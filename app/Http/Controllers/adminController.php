<?php

namespace App\Http\Controllers;

use App\Mapel;
use Illuminate\Http\Request;

class adminController extends Controller
{
    public function adminIndex()
    {
        return view('admin.index');
    }

    public function siswaIndex()
    {
        $mapel = Mapel::all();
        return view('siswa.index',compact('mapel'));
    }
}
