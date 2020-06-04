@extends('layouts.admin')

@section('content')
<section role="main" class="content-body">
    <header class="page-header">
        <h2>Halaman Soal</h2>
        <div class="right-wrapper text-right">
            <ol class="breadcrumbs">
                <li>
                    <a href="index.html">
                        <i class="fas fa-home"></i>
                    </a>
                </li>
                <li><span>Data Soal</span></li>
            </ol>
            <a class="sidebar-right-toggle"><i class="fas fa-chevron-left"></i></a>
        </div>
    </header>
    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-header">
                    <div class="text-right">
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
                                    <th>Mata Pelajaran</th>
                                    <th>Kode Soal</th>
                                    <th>Soal</th>
                                    <th>Gambar</th>
                                    <th>Status</th>
                                    <th>Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                              <tr>
                                  <td>1</td>
                                  <td>Mapel 1</td>
                                  <td>S012</td>
                                  <td> Lorem ipsum vero magnam  Fugit ipsa magnam voluptatibus dolorem placeat veniam tempora quo ipsam?</td>
                                  <td><img src="{{asset('admin/img/!logged-user.jpg')}}" alt="Joseph Doe" class="rounded-circle" width="50px"/></td>
                                  <td>Aktif</td>
                                  <td>
                                    <a href="{{Route('soalEdit')}}" class="btn btn-sm btn-primary m-1 "> <i class="fa fa-edit"></i></a>
                                    <button class="btn btn-sm btn-danger" onclick="Hapus()"> <i class="fa fa-trash"></i></button>
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
                        <label class="">Mata Pelajaran</label>
                        <select name="" id="" class="form-control">
                            <option value="">-- pilih Mapel</option>
                        </select>
                    </div>
                    <div class="form-group ">
                        <label class="">Kode Soal</label>
                        <input type="text" class="form-control" name="soal" id="soal">
                    </div>
                    <div class="form-group ">
                        <label class="">Soal</label>
                        <textarea name="soal" id="soal" class="form-control"></textarea>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group ">
                            <label class="">Pilihan A</label>
                            <input type="text" class="form-control" name="soal" id="soal">
                        </div>

                        <div class="form-group ">
                            <label class="">Pilihan B</label>
                            <input type="text" class="form-control" name="soal" id="soal">
                        </div>
                        </div>
                        <div class="col-md-6">
                        <div class="form-group ">
                        <label class="">Pilihan C</label>
                        <input type="text" class="form-control" name="soal" id="soal">
                    </div>
                    <div class="form-group ">
                        <label class="">Pilihan D</label>
                        <input type="text" class="form-control" name="soal" id="soal">
                    </div>
                        </div>
                    </div>
                    <div class="form-group ">
                        <label class="">gambar Soal</label>
                        <input type="file" class="form-control" name="gambar" id="gambar">
                    </div>
                    <div class="form-group ">
                        <label class="">Status</label>
                        <select name="" id="" class="form-control">
                            <option value="1">Aktif</option>
                            <option value="2">Tidak Aktif</option>
                        </select>
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