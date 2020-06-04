<?php

namespace App\Http\Controllers;

use App\Mapel;
use App\Pertemuan;
use Illuminate\Http\Request;

class pertemuanController extends Controller
{

    public function index()
    {
        $data = Pertemuan::orderBy('tanggal', 'desc')->get();
        return view('admin.pertemuan.index', compact('data'));
    }

    public function store(Request $req)
    {
        $mapel = Mapel::where('uuid', $req->uuid)->first();
        $data = $mapel->pertemuan()->create($req->all());
        return redirect()->back()->withSuccess('Data berhasil disimpan');
    }

    public function show($uuid)
    {
        $data = Pertemuan::where('uuid', $uuid)->first();
        return view('admin.pertemuan.show', compact('data'));
    }

    public function edit($uuid)
    {
        $data = Pertemuan::where('uuid', $uuid)->first();
        return view('admin.pertemuan.edit', compact('data'));
    }

    public function update(Request $req, $uuid)
    {
        $data = Pertemuan::where('uuid', $uuid)->first();
        $data->fill($req->all())->save();

        return redirect()->route('mapelShow', ['uuid' => $data->mapel->uuid])->withSuccess('Data berhasil diubah');
    }

    public function destroy($uuid)
    {
        $data = Pertemuan::where('uuid', $uuid)->first()->delete();
        return redirect()->back()->withSuccess('Data berhasil dihapus');
    }

    public function siswaIndex()
    {
        $data = Pertemuan::orderBy('tanggal', 'desc')->get();
        return view('siswa.pertemuan.index', compact('data'));
    }
}
