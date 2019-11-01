@extends('adminbackend')
@section('css')
<link rel="stylesheet" href="{{ asset('css/select2.min.css') }}">
<style>
	.content{
		background-image:url("{{ asset('backend/assets/img/avatars/background.jpg') }}");
		background-size: 100%;
	}
	</style>
@endsection
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div>
                <div class="card-header">Perpanjang Kontrak Karyawan</div>
                <div class="card-body">
                    <form action="{{ route('karyawan.update', $karyawan->id) }}" method="post" enctype="multipart/form-data">
                        <input name="_method" type="hidden" value="PATCH">
                        {{ csrf_field() }}
   <div class="form-group">
        <label for="">Nama Karyawan</label>
        <input class="form-control" value="{{ $karyawan->nama_karyawan }}" type="text" name="nama_karyawan">
    </div>
      <div class="form-group">
        <label for="">Tanggal_Mulai_Kontrak</label>
        <input class="form-control" value="{{ $karyawan->tanggal_mulai_kontrak }}" type="date" name="tanggal_mulai_kontrak">
    </div>
      <div class="form-group">
        <label for="">Tanggal_Akhir_Kontrak</label>
        <input class="form-control" value="{{ $karyawan->tanggal_akhir_kontrak }}" type="date" name="tanggal_akhir_kontrak">
    </div>
      <button type="submit" class="btn btn-outline-info btn-rounded btn-block">
                                            Simpan Data
                                        </button>
      @if (session('new'))
                        <div class="alert alert-info">
                            <b></b>{{ session('new') }}
                        </div>
                        @endif
<br>
    <div class="form-group">
        <a href="{{ url('/karyawan') }}" class="btn btn-outline-info btn-rounded btn-block">Kembali</a>

        </form>
            </div>
                </div>
                    </div>
                        </div>
                            </div>
                                @endsection
