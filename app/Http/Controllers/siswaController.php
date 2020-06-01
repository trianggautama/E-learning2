<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class siswaController extends Controller
{
    public function index(){

        return view('admin.siswa.index');
    }

    public function edit(){

        return view('admin.siswa.edit');
    }
}
