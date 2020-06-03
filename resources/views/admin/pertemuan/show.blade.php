@extends('layouts.admin')

@section('content')
<section role="main" class="content-body">
    <header class="page-header">
        <h2>Detail pertemuan 1 (Nama Mapel)</h2>
        <div class="right-wrapper text-right">
            <ol class="breadcrumbs">
                <li>
                    <a href="index.html">
                        <i class="fas fa-home"></i>
                    </a>
                </li>
                <li><span>Data Mapel</span></li>
                <li><span>Pertemuan</span></li>
                <li><span>Detail</span></li>
            </ol>
            <a class="sidebar-right-toggle"><i class="fas fa-chevron-left"></i></a>
        </div>
    </header>
    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-header">
                    <h4>Data Modul</h4>
                    <div class="text-right">
                        <button class="btn btn-sm btn-success" id="tambahModul"><i class="fa fa-plus"></i> Tambah
                            Data</button>
                    </div>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-bordered table-striped mb-0" id="datatable-default">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Judul</th>
                                    <th>File</th>
                                    <th>Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($data->modul as $d)
                                <tr>
                                    <td>{{$loop->iteration}}</td>
                                    <td>{{$d->judul}}</td>
                                    <td>
                                        <a href="#" class="btn btn-sm btn-success m-1 "> <i
                                                class="fa fa-download"></i></a>
                                    </td>
                                    <td>
                                        <a href="{{Route('modulEdit',['uuid' => $d->uuid])}}"
                                            class="btn btn-sm btn-primary m-1 "> <i class="fa fa-edit"></i></a>
                                        <button class="btn btn-sm btn-danger" onclick="Hapus()"> <i
                                                class="fa fa-trash"></i></button>
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            <div class="card">
                <div class="card-header">
                    <h4>Data Ujian (Isi jika ada ujian pada pertemuan ini)</h4>
                    <div class="text-right">
                        <button class="btn btn-sm btn-success" id="tambahTes"><i class="fa fa-plus"></i> Tambah
                            Data</button>
                    </div>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-bordered table-striped mb-0" id="datatable-default">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Mapel</th>
                                    <th>Batas Waktu</th>
                                    <th>Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>1</td>
                                    <td>Mapel 1</td>
                                    <td>
                                        3 Januari 2020
                                    </td>
                                    <td>
                                        <a href="{{Route('tesEdit')}}" class="btn btn-sm btn-primary m-1 "> <i
                                                class="fa fa-edit"></i></a>
                                        <button class="btn btn-sm btn-danger" onclick="Hapus()"> <i
                                                class="fa fa-trash"></i></button>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<div class="modal fade bd-example-modal-lg" id="modalModul" tabindex="-1" role="dialog">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Tambah Data</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="{{Route('modulStore')}}" method="post" enctype="multipart/form-data">
                    @csrf
                    <input type="hidden" name="uuid" value="{{$data->uuid}}">
                    <div class="form-group ">
                        <label class="">Judul Modul</label>
                        <input type="text" class="form-control" name="judul" id="judul" placeholder="Judul">
                    </div>
                    <div class="form-group ">
                        <label class="">file</label>
                        <input type="file" class="form-control" name="file" id="file">
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

<div class="modal fade bd-example-modal-lg" id="modalTes" tabindex="-1" role="dialog">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Tambah Data Tes</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="" method="post">
                    @csrf
                    <div class="form-group ">
                        <label class="">Periode</label>
                        <select name="periode_id" id="periode_id" class="form-control">
                            <option value="">-- ambil dari tabel periode data terakhir</option>
                        </select>
                    </div>
                    <div class="form-group ">
                        <label class="">Batas Waktu</label>
                        <input type="date" class="form-control" name="batas_waktu" id="batas_waktu">
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
    $("#tambahModul").click(function(){
            $('#status').text('Tambah Data');
            $('#modalModul').modal('show');
        });

        $("#tambahTes").click(function(){
            $('#status').text('Tambah Data');
            $('#modalTes').modal('show');
        });
        function Hapus(uuid) {
			Swal.fire({
			title: 'Anda Yakin?',
			text: " Menghapus Haul " ,        
			icon: 'warning',
			showCancelButton: true,
			confirmButtonColor: '#3085d6',
			cancelButtonColor: '#d33',
			confirmButtonText: 'Hapus',
			cancelButtonText: 'Batal'
		}).then((result) => {
			if (result.value) {
				url = '';
				window.location.href =  url+'/'+uuid ;			
			}
		})
        }
</script>
@endsection