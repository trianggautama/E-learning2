<?php

namespace App\Http\Controllers;

use App\Jawaban_siswa;
use App\Mapel;
use App\Periode;
use App\Soal;
use App\Tes;
use App\Tes_siswa;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

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
        $siswa_id = Auth::user()->siswa->id;
        $data = Tes::where('uuid', $uuid)->first();
        $tesSiswa = Tes_siswa::where('siswa_id', $siswa_id)->where('tes_id', $data->id)->first();
        // if (!$tesSiswa) {
            $tesSiswa = new Tes_siswa;
            $tesSiswa->siswa_id = $siswa_id;
            $tesSiswa->tes_id = $data->id;
            $tesSiswa->save();

            $soalData = Soal::where('mapel_id', $data->mapel_id)->get();
            $soal = $soalData->shuffle()->take(10);
            return view('siswa.tes.input', compact('data', 'soal'));
        // }

        // return back()->withWarning('Anda sudah melakukan tes');
    }

    public function jawaban(Request $req, $uuid)
    { 
                    $tes = Tes::where('uuid',$uuid)->first();
                    $tes_siswa = Tes_siswa::where('tes_id',$tes->id)->where('siswa_id',Auth::user()->siswa->id)->first();
                    $soal = collect($req->soal_id)->filter();
                    $pilihan = collect($req->pilihan)->filter();
                    for($i=0;$i<count($soal);$i++)
                    {
                        $jawaban             = new Jawaban_siswa();
                        $jawaban->soal_id     = $soal[$i];
                        $jawaban->jawaban    = $pilihan[$i];
                        $jawaban->bs         = 1; 
                        $jawaban->tes_siswa_id = $tes_siswa->id;
                        $jawaban->save();
                    }
    }

}
