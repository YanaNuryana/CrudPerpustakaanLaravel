<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class contohController extends Controller
{
    public function welcome(){
        return view('welcome');
    }

    public function tentang(){
        return view('tentangkami');
    }

    public function domainhosting(){
        return view('layanan.domainhosting');
    }
}
