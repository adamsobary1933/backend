@extends('adminbackend')
@section('css')
<link rel="stylesheet" href="{{ asset('css/select2.min.css') }}">
@endsection
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Menampilkan Data Karyawan</div>
                <div class="card-body">
                       <div class="form-row">
                                    <div class="col">
                                        <label for="">Nama Karyawan</label>
                                            <input type="text"  name="nama_karyawan" value="{{ $karyawan->nama_karyawan }}" class="form-control" disabled>
                                    </div>
                                    <br><br>
                            <div class="col">
                                <label for="">Alamat</label>
                                               <input type="text"  name="alamat" value="{{ $karyawan->alamat }}" class="form-control" disabled>
                                        </div>
                                    </div>
                                    <br>
                                       <div class="form-row">
                                    <div class="col">
                                        <label for="">Jabatan</label>
                                            <input type="text"  name="jabatan" value="{{ $karyawan->jabatan }}" class="form-control" disabled>
                                    </div>
                                    <br><br>
                            <div class="col">
                                <label for="">Jenis Kelamin</label>
                                               <input type="text"  name="jenis_kelamin" value="{{ $karyawan->jenis_kelamin }}" class="form-control" disabled>
                                        </div>
                                    </div>
                                    <br>
                                          <div class="form-row">
                                    <div class="col">
                                        <label for="">Email</label>
                                            <input type="text"  name="email" value="{{ $karyawan->email }}" class="form-control" disabled>
                                    </div>
                                    <br><br>
                            <div class="col">
                                <label for="">Umur</label>
                                               <input type="text"  name="umur" value="{{ $karyawan->umur }}" class="form-control" disabled>
                                        </div>
                                    </div>
                                        <br>
                                           <div class="form-row">
                                    <div class="col">
                                        <label for="">Tanggal Awal Kontrak</label>
                                            <input type="text"  name="tanggal_mulai_kontrak" value="{{ $karyawan->tanggal_mulai_kontrak }}" class="form-control" disabled>
                                    </div>
                                    <br><br>
                            <div class="col">
                                <label for="">Tanggal Akhir Kontrak</label>
                                               <input type="text"  name="tanggal_akhir_kontrak" value="{{ $karyawan->tanggal_akhir_kontrak }}" class="form-control" disabled>
                                        </div>
                                    </div>
                                    <br>
    <div class="form-group">
        <a href="{{ url('/karyawan') }}" class="btn btn-outline-info btn-rounded btn-block">Kembali</a>
    </div>
        </div>
            </div>
                </div>
                    </div>
                        </div>
                            @endsection
