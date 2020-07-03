<?php

namespace App\Http\Controllers;

use App\Mapel;
use App\Pertemuan;
use Illuminate\Http\Request;

class adminController extends Controller
{
    public function adminIndex()
    {
        return view('admin.index');
    }

    public function siswaIndex()
    {   
        $pertemuan = Pertemuan::orderBy('tanggal', 'asc')->paginate(5);
        $mapel = Mapel::all();
        return view('siswa.index',compact('mapel','pertemuan'));
    }

    public function instrukturIndex()
    {
        return view('instruktur.index');
    }

    public function instrukturProfil()
    {
        return view('instruktur.profil');
    }
}
