@extends('layouts.admin')

@section('content')
<section role="main" class="content-body">
    <header class="page-header">
        <h2>Halaman Siswa</h2>
        <div class="right-wrapper text-right">
            <ol class="breadcrumbs">
                <li>
                    <a href="index.html">
                        <i class="fas fa-home"></i>
                    </a>
                </li>
                <li><span>Data Siswa</span></li>
            </ol>
            <a class="sidebar-right-toggle"><i class="fas fa-chevron-left"></i></a>
        </div>
    </header>
    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-header">
                    <div class="text-right">
                        <button class="btn btn-sm btn-secondary"><i class="fa fa-print"></i> Cetak Data</button>
                        <button class="btn btn-sm btn-success" id="tambah"><i class="fa fa-plus"></i> Tambah
                            Data</button>
                    </div>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-bordered table-striped mb-0" id="datatable-default">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>NRP</th>
                                    <th>Nama</th>
                                    <th>Kelas</th>
                                    <th>Tempat, Tanggal Lahir</th>
                                    <th>email</th>
                                    <th>asal</th>
                                    <th>Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                              <tr>
                                <td>1</td>
                                <td>NRP</td>
                                <td>John Doe</td>
                                <td>A</td>
                                <td>Banjarbaru 12 Januari 1980</td>
                                <td>email@gmail.com</td>
                                <td>PT.A</td>
                                  <td>
                                    <a href="" class="btn btn-sm btn-warning m-1 "> <i
                                                class="fa fa-file"></i></a>
                                            <a href="{{Route('siswaEdit')}}" class="btn btn-sm btn-primary m-1 "> <i
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

<div class="modal fade bd-example-modal-lg" id="modal" tabindex="-1" role="dialog">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Tambah Data</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="" method="post">
                    @csrf
                    <div class="form-group ">
                        <label class="">Kelas</label>
                        <select name="keals_id" id="kelas_id" class="form-control">
                            <option value="">-- pilih kelas --</option>
                        </select>
                    </div>
                    <div class="form-group ">
                        <label class="">NRP</label>
                        <input type="text" class="form-control" name="nrp" id="nrp" placeholder="NRP">
                    </div>
                    <div class="form-group ">
                        <label class="">Nama Siswa</label>
                        <input type="text" class="form-control" name="nama" id="nama" placeholder="Siswa">
                    </div>
                    <div class="form-group ">
                        <label class="">Jenis Kelamin</label>
                        <select name="jk" id="jk" class="form-control">
                            <option value="1">Laki - laki</option>
                            <option value="2">Perempuan</option>
                        </select>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group ">
                                <label class="">Tempat Lahir</label>
                                <input type="text" class="form-control" name="tempat_lahir" id="tempat_lahir" placeholder="Siswa">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group ">
                                <label class="">Tanggal Lahir</label>
                                <input type="date" class="form-control" name="tanggal_lahir" id="tanggal_lahir" placeholder="Siswa">
                            </div>
                        </div>
                    </div>
                    <div class="form-group ">
                                <label class="">Email</label>
                                <input type="email" class="form-control" name="email" id="email" placeholder="Siswa">
                            </div>
                            <div class="form-group ">
                                <label class="">Asal</label>
                                <input type="text" class="form-control" name="asal" id="asal" placeholder="Siswa">
                            </div>
                            <div class="form-group ">
                                <label class="">Foto</label>
                                <input type="file" class="form-control" name="foto" id="foto" placeholder="Siswa">
                            </div>
                            <div class="form-group ">
                                <label class="">Password</label>
                                <input type="password" class="form-control" name="password" id="password" placeholder="password">
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
    $("#tambah").click(function(){
            $('#status').text('Tambah Data');
            $('#modal').modal('show');
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