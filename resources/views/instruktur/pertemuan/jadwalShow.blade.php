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
                    Modul Pertemuan cacaacx
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
                    </div>
                </div>
                <div class="card-body">
                    {{--  <input type="hidden" id="tugas" value="{{$t->id}}"> --}}
                    <h3>{{$t->deskripsi}} <br>
                        <small>Batas Waktu
                            ({{carbon\carbon::parse($t->batas_waktu)->translatedFormat('d F Y')}})</small></h3>
                    <hr>
                    <label for=""><b>Berkas Upload </b></label><br>
                </div>
            </div>
            @endforeach

            <div class="card">
                <div class="card-header">
                    Kolom Diskusi
                </div>
                <div class="card-body">
                <ul class="simple-user-list mb-3">
								<li>
                                    <div class="alert alert-default">
                                        <figure class="image rounded">
                                            <img src="{{asset('admin/img/!sample-user.jpg')}}" alt="Joseph Doe Junior" class="rounded-circle">
                                        </figure>
                                        <div class="row">
                                            <div class="col-md-6"><span class="title">Joseph Doe Junior</span></div>
                                            <div class="col-md-6 text-right"> <a href="" class=" text-danger"> <i class="fas fa-trash"></i> Hapus</a></div>
                                        </div>
                                        <span class="message">Lorem, ipsum dolor sit amet consectetur adipisicing elit.</span>
									</div>
								</li>
								<li>
                                    <div class="alert alert-default">
                                        <figure class="image rounded">
                                            <img src="{{asset('admin/img/!sample-user.jpg')}}" alt="Joseph Doe Junior" class="rounded-circle">
                                        </figure>
                                        <span class="title">Joseph Doe Junior</span>
                                        
                                        <span class="message">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Dolore quam laudantium dicta deleniti repudiandae aperiam eaque assumenda cumque! Nobis placeat vero consequatur temporibus veritatis accusantium quam, eligendi laborum ut ab?</span>
									</div>
								</li>
                            </ul>
                            <div class="compose pt-3">
                                <textarea name="komen" id="" rows="8" class="form-control" placeholder="ketik komentar anda ..."></textarea>
										<div class="text-right mt-3">
											<a href="#" class="btn btn-primary">
												<i class="fas fa-paper-plane mr-1"></i>
												Send
											</a>
										</div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
@section('scripts')
<script>
    tambah = (id) =>{
        $('#tugas_id').val(id);
        $('#modal').modal('show');
    }
    $(document).ready(function() {
        $('#summernote').summernote();
    });
 
</script>
@endsection