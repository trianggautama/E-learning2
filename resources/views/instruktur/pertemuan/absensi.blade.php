@extends('layouts.instruktur')

@section('content')
<section role="main" class="content-body">
    <header class="page-header">
        <h2>Halaman Pertemuan</h2>
        <div class="right-wrapper text-right">
            <ol class="breadcrumbs">
                <li>
                    <a href="index.html">
                        <i class="fas fa-home"></i>
                    </a>
                </li>
                <li><span>Data Pertemuan </span></li>
            </ol>
            <a class="sidebar-right-toggle"><i class="fas fa-chevron-left"></i></a>
        </div>
    </header>
    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-header">
                    <h3>Absensi Pertemuan </h3>
                    <div class="text-right">
                    </div>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-bordered table-striped mb-0" id="datatable-default">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Nama Siswa</th>
                                    <th>NRP</th>
                                    <th>Jam Absen</th>
                                    <th>Status</th>
                                    <th>Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                               <tr>
                                   <td>1</td>
                                   <td>Siswa 1</td>
                                   <td>124142143</td>
                                   <td>7.30</td>
                                   <td>Belum di verifikasi</td>
                                   <td>
                                   <a href="#" class="btn btn-sm btn-success m-1 " target="_blank"> <i
                                                class="fa fa-check-circle"></i> verifikasi</a>
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

@endsection
@section('scripts')
<script>

</script>
@endsection