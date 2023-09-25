<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;
// use Alert;


class SweetController extends Controller
{
    function index() {
        Alert::success('Success Title', 'Success Message');
        return redirect()->back();
    }
}
