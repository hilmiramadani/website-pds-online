<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\MailPds;

class MailController extends Controller
{
    public function index()
    {
        // $mailData = [
        //     'pesan' => 'hallo',
        //     'body' => 'This is for testing email',
            
        // ];

        // Mail::to('hilmihakimr10@gmail.com')->send(new MailPds($mailData));

        // $pegawai = \database\seeders::create($request->all());

        \Mail::raw ('Hallo selamat datang', function($message){
            $message->to('User@gmail.com', 'users');
            $message->subject('PDS');
        });
    }
}
