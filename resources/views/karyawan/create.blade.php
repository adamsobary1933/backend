@extends('adminbackend')
@section('css')
<link rel="stylesheet" href="{{ asset('css/select2.min.css') }}">
@endsection

<!DOCTYPE html>
<html lang="en">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
</head>
    @section('content')
        <body style="background-image: url(backend/assets/img/avatars/background.jpg); background-size:100%">
    <div class="container">
        <div class="row">
            <div class="col-lg-10">
                <div class="card">
                    <div class="card-header">Tambah Data karyawan</div>
                    <div class="card-body">
                    <form action="{{ route('karyawan.store') }}" method="post" enctype="multipart/form-data">
                               {{ csrf_field() }}
                             <div class="form-row">
                                    <div class="col">
                                            <input type="text"  name="nama_karyawan" class="form-control" placeholder="Nama Karyawan">
                                    </div>
                                    <br><br>
                            <div class="col">
                                            <input type="text"  name="alamat" class="form-control" placeholder="Alamat">
                                        </div>
                                    </div>
                               <div class="form-row">
                                    <div class="col">
                                            <input type="text"  name="jabatan" class="form-control" placeholder="Jabatan">
                                    </div>
                            <div class="col">
                                <h5>Jenis Kelamin</h5>
                         <p><input type='radio' name='jenis_kelamin' value='pria' />Pria</p>
               <p><input type='radio' name='jenis_kelamin' value='perempuan' />Perempuan</p>
                        </div>
                    </div>
                            <div class="form-row">
                                    <div class="col">
                                            <input type="text"  name="email" class="form-control" placeholder="Email">
                                    </div>
                                <div class="col">
                                            <input type="date"  name="tanggal_mulai_kontrak" class="form-control" placeholder="Tanggal_Mulai_Kontrak">
                                        </div>
                                    </div>
                                    <br>
                                <div class="form-row">
                                    <div class="col">
                                            <input type="text"  name="umur" class="form-control" placeholder="Umur">
                                    </div>
                                   <div class="col">
                                        <input type="date"  name="tanggal_akhir_kontrak" class="form-control" placeholder="Tanggal_Akhir_Kontrak">
                                        </div>
                                    </div>
                                    <br>
                            <button type="submit" class="btn btn-outline-info btn-rounded btn-block">
                                            Simpan Data
                                        </button>
                            </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
@endsection
