<?php

namespace App\Http\Controllers;

use App\Tugas;
use App\Tugas_siswa;
use Illuminate\Http\Request;

class tugasSiswaController extends Controller
{
    public function index()
    {
        $data = Tugas_siswa::orderBy('id', 'desc')->get();
        return view('admin.tugasSiswa.index', compact('data'));
    }

    public function filter()
    {
        $data = Tugas::orderBy('id', 'desc')->get();
        return view('admin.tugasSiswa.filter', compact('data'));
    }
}
