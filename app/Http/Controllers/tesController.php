<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class tesController extends Controller
{ 
    public function index(){

        return view('admin.tes.index');
    }

    public function edit(){

        return view('admin.tes.edit');
    }

    public function siswaIndex(){

        return view('siswa.tes.index');
    }
    public function inputTes(){

        return view('siswa.tes.input');
    }
}
