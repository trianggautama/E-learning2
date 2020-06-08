@extends('layouts.siswa')

@section('content')
<section role="main" class="content-body">
    <header class="page-header">
        <h2>Detail Pertemuan {{$data->pertemuan}} {{$data->mapel->mapel}}</h2>
        <div class="right-wrapper text-right">
            <ol class="breadcrumbs">
                <li>
                    <a href="index.html">
                        <i class="fas fa-home"></i>
                    </a>
                </li>
                <li><span>Data Pertemuan </span></li>
                <li><span>Detail </span></li>
            </ol>
            <a class="sidebar-right-toggle"><i class="fas fa-chevron-left"></i></a>
        </div>
    </header>
    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-header">
                    Modul Pertemuan
                    <div class="text-right">
                    </div>
                </div>
                <div class="card-body">
                    <h5>Modul</h5>
                    @foreach($modul as $m)
                    <a href="{{asset('modul/'.$m->file)}}" class="btn btn-warning" download><i
                            class="fa fa-file-download"></i> {{$m->judul}}</a>
                    @endforeach
                </div>
            </div>
            @foreach($data->tugas as $t)
            <div class="card">
                <div class="card-header">
                    <div class="text-right">
                        <button class="btn btn-sm btn-success" onclick="tambah('{{$t->id}}')"><i class="fa fa-plus"></i>
                            Upload
                            Tugas</button>
                    </div>
                </div>
                <div class="card-body">
                    {{--  <input type="hidden" id="tugas" value="{{$t->id}}"> --}}
                    <h3>{{$t->deskripsi}} <br>
                        <small>Batas Waktu
                            ({{carbon\carbon::parse($t->batas_waktu)->translatedFormat('d F Y')}})</small></h3>
                    <hr>
                    <label for=""><b>Berkas Upload</b></label><br>
                    Anda Belum Mengumpulkan Tugas
                </div>
            </div>
            @endforeach
        </div>
    </div>
</section>

<div class="modal fade bd-example-modal-lg" id="modal" tabindex="-1" role="dialog">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Upload Tugas</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="{{Route('tugasSiswaStore')}}" method="post" enctype="multipart/form-data">
                    @csrf
                    <input type="hidden" name="tugas_id" id="tugas_id">
                    <div class="form-group ">
                        <label class="">File Tugas</label>
                        <input type="file" class="form-control" name="file" id="file" placeholder="Kelas">
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-default" data-dismiss="modal">Batal</button>
                        <button type="submit" class="btn btn-primary">Simpan</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
</div>

@endsection
@section('scripts')
<script>
    tambah = (id) =>{
        $('#tugas_id').val(id);
        $('#modal').modal('show');
    }
    
</script>
@endsection