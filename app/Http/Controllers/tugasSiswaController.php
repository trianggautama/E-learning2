<?php

namespace App\Http\Controllers;

use App\Mapel;
use App\Pertemuan;
use App\Tugas;
use App\Tugas_siswa;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

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

    // public function instrukturIndex()
    // {
    //     $instruktur = Auth::user()->instruktur->id;
    //     $mapel = Mapel::with('pertemuan')->where('instruktur_id',$instruktur)->get();
    //     $data = $mapel->map(function($item){
    //         $pertemuan = Pertemuan::where('mapel_id',$item->id)->get();
    //         $data2 = $pertemuan->map(function($item2){
    //             $tugas = Tugas::with('tugas_siswa')->where('pertemuan_id',$item2->id)->get();
    //             return $tugas;
    //         });
    //         return $data2;
    //     });
    //     return view('instruktur.tugasSiswa.index', compact('data'));
    // }

}
