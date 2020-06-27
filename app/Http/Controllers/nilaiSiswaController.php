<?php

namespace App\Http\Controllers;

use App\Siswa;
use Illuminate\Http\Request;

class nilaiSiswaController extends Controller
{
    public function index()
    {
        $siswa = Siswa::latest()->get();
        return view('admin.nilaiAkhir.index',compact('siswa'));
    }

    public function edit()
    {
        return view('admin.nilaiAkhir.edit');
    }
}
