<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class soalController extends Controller
{
    public function index(){

        return view('admin.soal.index');
    }

    public function edit(){

        return view('admin.soal.edit');
    }
}
