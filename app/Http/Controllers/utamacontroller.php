<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class utamacontroller extends Controller
{
    public function index() {
        return view('utama.index') ;
    }
}
