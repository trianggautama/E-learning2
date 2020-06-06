<?php

namespace App\Http\Controllers;

use App\Pertemuan;
use App\Tugas;
use Illuminate\Http\Request;

class tugasController extends Controller
{

    public function index()
    {
        $data = Tugas::orderBy('id', 'desc')->get();
        return view('admin.tugas.index', compact('data'));
    }

    public function store(Request $req)
    {
        $pertemuan = Pertemuan::where('uuid', $req->uuid)->first();
        $data = $pertemuan->tugas()->create($req->all());

        return redirect()->back()->withSuccess('Data berhasil disimpan');
    }

    public function show($uuid)
    {
        $data = Tugas::where('uuid', $uuid)->first();
        return view('admin.tugas.show', compact('data'));
    }

    public function edit($uuid)
    {
        $data = Tugas::where('uuid', $uuid)->first();
        return view('admin.tugas.edit', compact('data'));
    }

    public function update(Request $req, $uuid)
    {
        $data = Tugas::where('uuid', $uuid)->first();
        $data->fill($req->all())->save();

        return redirect()->route('pertemuanShow', ['uuid' => $data->pertemuan->uuid])->withSuccess('Data berhasil diubah');
    }

    public function destroy($uuid)
    {
        $data = Tugas::where('uuid', $uuid)->first()->delete();
        return redirect()->back()->withSuccess('Data berhasil dihapus');
    }

    public function instrukturEdit($uuid)
    {
        $data = Tugas::where('uuid', $uuid)->first();
        return view('instruktur.tugas.edit', compact('data'));
    }

    public function instrukturUpdate(Request $req, $uuid)
    {
        $data = Tugas::where('uuid', $uuid)->first();
        $data->fill($req->all())->save();

        return redirect()->route('instrukturPertemuanShow', ['uuid' => $data->pertemuan->uuid])->withSuccess('Data berhasil diubah');
    }
}
