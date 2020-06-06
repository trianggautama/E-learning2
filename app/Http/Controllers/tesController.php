<?php

namespace App\Http\Controllers;

use App\Mapel;
use App\Periode;
use App\Soal;
use App\Tes;
use Illuminate\Http\Request;

class tesController extends Controller
{
    public function index()
    {
        $data = Tes::orderBy('id', 'desc')->get();
        $mapel = Mapel::orderBy('mapel', 'asc')->get();
        $periode = Periode::orderBy('tahun', 'desc')->get();
        return view('admin.tes.index', compact('data', 'mapel', 'periode'));
    }

    public function store(Request $req)
    {
        $data = Tes::create($req->all());

        return redirect()->back()->withSuccess('Data berhasil disimpan');
    }

    public function edit($uuid)
    {
        $data = Tes::where('uuid', $uuid)->first();
        $periode = Periode::orderBy('tahun', 'desc')->get();

        return view('admin.tes.edit', compact('data', 'periode'));
    }

    public function update(Request $req, $uuid)
    {
        $data = Tes::where('uuid', $uuid)->first();
        $data->fill($req->all())->save();

        return redirect()->route('tesIndex')->withSuccess('Data berhasil diubah');
    }

    public function destroy($uuid)
    {
        $data = Tes::where('uuid', $uuid)->first()->delete();

        return redirect()->back()->withSuccess('Data berhasil dihapus');
    }

    public function siswaIndex()
    {
        $data = Tes::where('status', 0)->orderBy('id', 'desc')->get();
        return view('siswa.tes.index', compact('data'));
    }

    public function inputTes($uuid)
    {
        $data = Tes::where('uuid', $uuid)->first();
        $soalData = Soal::where('mapel_id', $data->mapel_id)->get();
        $soal = $soalData->shuffle();
        $soal->take(10);
        return view('siswa.tes.input', compact('data', 'soal'));
    }

}
