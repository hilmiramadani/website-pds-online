<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Response;
use Illuminate\Support\Facades\Storage;

class PdfController extends Controller
{
    public function showPdf()
    {
        $pdfPath = 'public/2022_SOP PDS Online.pdf';

        if(Storage::exists($pdfPath)) {

            $headers = [
                'Content-Type' => 'application/pdf',
            ];

            return Response::make(Storage::get($pdfPath),200, $headers);
        } else {
            return abort(404, 'File not found');
        }
    }
}
