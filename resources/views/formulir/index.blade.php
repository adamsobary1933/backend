@extends('adminbackend')
@section('css')
<link rel="stylesheet" href="{{ asset('css/select2.min.css') }}">
@endsection
    
</center>
@section('content')
	<div class="row">
			<div class="col-lg-12">
			  <center><a><h3 style="color:black">Penilian Kinerja  Karyawan</a></h3></center>
			</div>
		</div><!--/.row-->

<center>
 <?php
        $tanggal= mktime(date("m"),date("d"),date("Y"));
                echo "Tanggal : <b>".date("d-M-Y", $tanggal)."</b>";
                date_default_timezone_set('Asia/Jakarta');
                $jam=date("H:i:s");
                echo "| Pukul : <b>". $jam." "."</b>";
                $a = date ("H");
                if (($a>=6) && ($a<=11)){
                echo "<b>,Selamat Pagi </b>";
                }
                else if(($a>11) && ($a<=12))
                {
                echo ", Selamat Pagi ";}
                else if (($a>12) && ($a<=18)){
                echo ", Selamat Siang ";}
                else { echo ", <b> Selamat Malam </b>";}
    ?>
    <br><br>

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-15">
            <div style="background-color:transparent">
                <body style="background-image: url(backend/assets/img/avatars/background.jpg); background-size:100%">
                 <center><a href="{{ route('formulir.create') }}" class="fa fa-plus-circle"></a></center>
                <br>
                    <br>
                    <div class="table-responsive">
                        @if (session('pesan'))
                        <div class="alert alert-info">
                            <b></b>{{ session('pesan') }}
                        </div>
                        @endif
                        <table class="table">
                            <tr>
                                <th>No</th>
                                <th>periode_penilaian</th>
                                <th>nama_penilai</th>
                                <th>tanggal </th>
                                <th>nama_karyawan</th>
                                <th>jabatan</th>
                                <th>departemen</th>
                                <th>deskripsi_pekerjaan</th>
                                <th colspan="3" style="text-align: center;">Aksi</th>
                            </tr>
                @php $no =1; @endphp
                @foreach($formulir as $data)
                <tr>
                    <td>{{ $no++ }}</td>
                    <td>{{ $data->periode_penilain }}</td>
                    <td>{{ $data->nama_penilai }}</td>
                    <td>{{ $data->tanggal }}</td>
                    <td>{{ $data->nama_kar }}</td>
                    <td>{{ $data->jabatan }}</td>
                    <td>{{ $data->departemen }}</td>
                    <td>{{ $data->deskripsi_pekerjaan }}</td>
                    <td><a href="{{ route('formulir.show', $data->id) }}" class="fa fa-eye"></a></td>
                    <td><form action="{{ route('formulir.destroy', $data->id) }}" method="post">
                        {{ csrf_field() }}
                         @if (session('notif'))
                        <div class="alert alert-info">
                            <b></b>{{ session('notif') }}
                        </div>
                        @endif
                     	<input type="hidden" name="_method" value="DELETE">
                 	<button type="submit" class="fa fa-trash"></button>
                    </form>
                    </td>
                </tr>
                @endforeach
                </table>
            </div>
        </div>
    </div>
</div>
@endsection
