<?php

namespace App\Http\Controllers;

use App\Mapel;
use App\Periode;
use Illuminate\Http\Request;

class mapelController extends Controller
{
    public function index()
    {
        $data = Mapel::orderBy('id', 'Desc')->get();
        $periode = Periode::orderBy('tahun', 'Desc')->get();
        return view('admin.mapel.index', compact('data', 'periode'));
    }

    public function store(Request $req)
    {
        $data = Mapel::create($req->all());
        return redirect()->back()->withSuccess('Data berhasil disimpan');
    }

    public function show($uuid)
    {
        $data = Mapel::where('uuid', $uuid)->first();
        return view('admin.mapel.show', compact('data'));
    }

    public function edit($uuid)
    {
        $data = Mapel::where('uuid', $uuid)->first();
        $periode = Periode::orderBy('tahun', 'Desc')->get();
        return view('admin.mapel.edit', compact('data', 'periode'));
    }

    public function update(Request $req, $uuid)
    {
        $data = Mapel::where('uuid', $uuid)->first();
        $data->fill($req->all())->save();
        return redirect()->route('mapelIndex')->withSuccess('Data berhasil diubah');
    }

    public function destroy($uuid)
    {
        $data = Mapel::where('uuid', $uuid)->first()->delete();
        return redirect()->back()->withSuccess('Data berhasil dihapus');
    }

}
