<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class kelasController extends Controller
{
    public function index(){

        return view('admin.kelas.index');
    }

    public function edit(){

        return view('admin.kelas.edit');
    }
}
