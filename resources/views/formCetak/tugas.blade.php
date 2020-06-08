<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <style>
        body {}
        table {
            border-collapse: collapse;
            width: 100%;
        }
        table,
        th,
        td {
            border: 1px solid #708090;
            text-align: center;
        }
        th {
            background-color: darkslategray;
            text-align: center;
            color: aliceblue;
        }
        td {}
        br {
            margin-bottom: 5px !important;
        }
        .judul {
            text-align: center;
        }
        .header {
            margin-bottom: 0px;
            text-align: center;
            height: 150px;
            padding: 0px;
        }
        .pemko {
            width: 100px;
        }
        .logo {
            float: left;
            margin-right: 0px;
            width: 15%;
            padding: 0px;
            text-align: right;
        }
        .headtext {
            float: right;
            margin-left: 0px;
            width: 75%;
            padding-left: 0px;
            padding-right: 10%;
        }
        hr {
            margin-top: 10%;
            height: 3px;
            background-color: black;
        }
        .ttd {
            margin-left: 70%;
            text-align: center;
            text-transform: uppercase;
        }
        .text-center{
            text-align:center;
        }
    </style>
</head>

<body>
   <div class="text-center">
   <img src="admin/img/logo_ut.png" width="100" />
   </div>

    <div class="container">
        <div class="isi">
            <h2 style="text-align:center;">LAPORAN DATA TUGAS SISWA</h2>
            <br>            
            <table class="table table-bordered table-striped mb-0" id="datatable-default">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Mapel</th>
                                    <th>Pertemuan</th>
                                    <th>Tugas</th>
                                    <th>Nama Siswa</th>
                                    <th>Waktu Mengumpul</th>
                                    <th>File</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($data as $d)
                              <tr>
                                  <td>{{$loop->iteration}}</td>
                                  <td>{{$d->tugas->pertemuan->mapel->mapel}}</td>
                                  <td>{{$d->tugas->pertemuan->pertemuan}}</td>
                                  <td>{{$d->tugas->deskripsi}}</td>
                                  <td>{{$d->siswa->user->nama}}</td>
                                  <td>{{carbon\carbon::parse($d->created_at)->translatedFormat('H:i')}} WITA</td>
                                  <td> <a href="{{asset('tugas/'.$d->file)}}" class="btn btn-warning" download><i class="fa fa-file-download"></i> {{$d->file}}</a></td>
                              </tr>
                              @endforeach
                            </tbody>
                        </table>
            <br>
            <br>
            <div class="ttd">
                <h5 style="margin:0px;">
                    <p style="margin:0px;">Banjarbaru, {{$tgl}}</p>
                </h5>
                <h5  style="margin:0px;">Kepala Sekolah</h5>
                <br>
                <br>
                <h5 style="text-decoration:underline; margin:0px;">Nama</h5>
                <h5  style="margin:0px;">NRP.19810405 200612312 1 002</h5>
            </div>
        </div>
    </div>
</body>
</html>