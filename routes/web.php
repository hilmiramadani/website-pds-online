<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\MailController;
use App\Http\Controllers\SweetController;
use App\Http\Controllers\PdfController;
use App\Http\Livewire\Page\DetailPengguna;
use App\Http\Livewire\Page\Overview;
use App\Http\Livewire\Page\Pengajuan;
use App\Http\Livewire\Page\Pengaturan;
use App\Http\Livewire\Page\Pengguna;
use App\Http\Livewire\Page\Peninjauan;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Storage;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::middleware(['HasSession'])->group(function () {
    Route::get('/logout', [AuthController::class, 'logout'])->name("logout");
    Route::get('/', Overview::class)->name("overview");
    Route::get('/pengajuan', Pengajuan::class)->name("pengajuan");
    Route::get('/pengaturan', Pengaturan::class)->name("pengaturan");
});
Route::get('/peninjauan', Peninjauan::class)->name("peninjauan")->middleware('peninjauan');
Route::middleware(['peninjauan'])->group(function () {
    Route::get('/pengguna', Pengguna::class)->name("pengguna");
    Route::get('/pengguna/{id}', DetailPengguna::class)->name("detail-pengguna");
});
Route::get('/login', [AuthController::class, 'index'])->name("login")->middleware('NoSession');
Route::post('/login', [AuthController::class, 'login'])->middleware('NoSession');

// event Route

// event upload
Route::get('/get_upload', function () {
    $event = Storage::get('event_upload.json');
    return json_decode($event, true);
});
Route::get('/delete_upload/{id}', function ($id) {
    $event = Storage::get('event_upload.json');
    $decode = json_decode($event, true);
    $content = [];
    foreach (collect($decode) as $item) {
        if ($item['id'] != $id) {
            $content[] = [
                'type' => $item['type'],
                'id' => $item['id'],
                'identitas' => $item['identitas'],
                'role' => $item['role']
            ];
        }
    }
    $contents = json_encode($content);
    Storage::put('event_upload.json', $contents);
});


Route::get('/send', [MailController::class, 'index']);

Route::get('/kirimemail', function(){
    \Mail::raw ('Hallo selamat datang', function($message){
        $message->to('user@gmail.com', 'User');
        $message->subject( 'PDS');
        return("Email berhasil terkirim!");
    });
});
Route::post('/postuser', 'MailController@postuser');

Route::get('/sweet',[SweetController::class,'index']);

Route::get('/sop-pds',[PdfController::class, 'showPdf'])-> name("sop-pds");