<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class adminController extends Controller
{
    public function adminIndex()
    {
        return view('admin.index');
    }

    public function siswaIndex()
    {
        return view('siswa.index');
    }
}
