@extends('layouts.admin')

@section('content')
    <section role="main" class="content-body">
		<header class="page-header">
			<h2>Halaman Soal</h2>
				<div class="right-wrapper text-right">
					<ol class="breadcrumbs">
						<li>
						    <a href="#">
								<i class="fas fa-home"></i>
							</a>
						</li>
						<li><span>Edit Data Soal</span></li>
					</ol>
				<a class="sidebar-right-toggle" ><i class="fas fa-chevron-left"></i></a>
			</div>
		</header>
        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-header">
                        Edit Data Soal
                    </div>
                    <div class="card-body">
                        <form action="" enctype="multipart/form-data"  method="post">
                            @csrf
                            @method('PUT')                            
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
                    <div class="form-group ">
                        <label class="">Pilihan A</label>
                        <input type="text" class="form-control" name="soal" id="soal">
                    </div>

                    <div class="form-group ">
                        <label class="">Pilihan B</label>
                        <input type="text" class="form-control" name="soal" id="soal">
                    </div>

                    <div class="form-group ">
                        <label class="">Pilihan C</label>
                        <input type="text" class="form-control" name="soal" id="soal">
                    </div>
                    <div class="form-group ">
                        <label class="">Pilihan D</label>
                        <input type="text" class="form-control" name="soal" id="soal">
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
                    </div>
                    <div class="card-footer text-right">
                        <a href="{{Route('kelasIndex')}}" type="button" class="btn btn-default" >Batal</a>
                        <button type="submit" class="btn btn-primary">ubah</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>

@endsection
@section('scripts')
    <script>
        $(document).ready(function() {
            $('#summernote').summernote();
        });
    </script>
@endsection