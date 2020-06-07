<?php

namespace App\Http\Controllers;

use App\Mapel;
use PDF;
use Carbon\Carbon;
use App\Siswa;
use App\Pertemuan;
use Illuminate\Http\Request;

class reportController extends Controller
{

    public function siswa()
    {
        $data         = Siswa::all();
        $tgl= Carbon::now()->format('d-m-Y');
        $pdf          = PDF::loadView('formCetak.siswa', ['data'=>$data,'tgl'=>$tgl]);
        $pdf->setPaper('a4', 'landscape');

        return $pdf->stream('Laporan Data Siswa.pdf');
    }

    public function mapel()
    {
        $data         = Mapel::all();
        $tgl= Carbon::now()->format('d-m-Y');
        $pdf          = PDF::loadView('formCetak.mapel', ['data'=>$data,'tgl'=>$tgl]);
        $pdf->setPaper('a4', 'portrait');

        return $pdf->stream('Laporan Data Mata Pelajaran.pdf');
    }

    public function pertemuan()
    {
        $data = Pertemuan::orderBy('tanggal', 'asc')->get();
        $tgl= Carbon::now()->format('d-m-Y');
        $pdf          = PDF::loadView('formCetak.pertemuan', ['data'=>$data,'tgl'=>$tgl]);
        $pdf->setPaper('a4', 'portrait');

        return $pdf->stream('Laporan Data Jadwal Pertemuan.pdf');
    }

    public function pertemuanMapel($uuid)
    {
        $mapel = Mapel::where('uuid',$uuid)->first();
        $data = Pertemuan::where('mapel_id',$mapel->id)->orderBy('tanggal', 'asc')->get();
        $tgl= Carbon::now()->format('d-m-Y');
        $pdf          = PDF::loadView('formCetak.pertemuanMapel', ['data'=>$data,'tgl'=>$tgl,'mapel'=>$mapel]);
        $pdf->setPaper('a4', 'portrait');

        return $pdf->stream('Laporan Data Jadwal Pertemuan.pdf');
    }
}
