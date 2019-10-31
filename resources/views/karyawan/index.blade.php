@extends('adminbackend')
@section('css')
<link rel="stylesheet" href="{{ asset('css/select2.min.css') }}">
@endsection

   @section('content')   
    <div class="row">
                <div class="col-lg-12">
                    {{-- <center><img src="assets/backend/img/netkrom.jpg" width="20%"></center> --}}
                <center><a><h3 style="color:black">Data Karyawan</a></h3></center>
                </div>
            </div>
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
        <?php

                    $a = date ("m") - 1;
                    foreach($karyawan as $datas){
                        $bulan_sekarang= mktime(date("m"));
                        $bulan_sekarang2=date("m", $tanggal);

                        $bln = $datas->tanggal_akhir_kontrak ;
                        $date = date('m', strtotime('-1 month', strtotime($bln)));

                        if (($bulan_sekarang2 == $date)){
                                echo "<div role='alert' aria-live='assertive' aria-atomic='true' class='alert' style='color:black' data-autohide='false' >
                                            Atas Nama <strong>$datas->nama_karyawan </strong>, Kontrak Akan Segera Habis!!!
                                            <button type='button' class='close' data-dismiss='alert' aria-label='Close'>
                                                <span aria-hidden='true'>&times;</span>
                                            </button>
                                        </div>";
                            }
                    }
        ?>
                <body style="background-image: url(backend/assets/img/avatars/background.jpg); background-size:100%">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-15">
                <div style="background-color:transparent">
                    <br>
                    <center><a href="{{ route('karyawan.create') }}" class="fa fa-plus-circle"></a></center>
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
                                    <th>Nama Karyawan</th>
                                    <th>Alamat</th>
                                    <th>Jabatan </th>
                                    <th>Jenis Kelamin</th>
                                    <th>Email</th>
                                    <th>Umur</th>
                                    <th>Tanggal_Mulai_Kontrak</th>
                                    <th>Tanggal_Akhir_Kontrak</th>
                                    <th colspan="3" style="text-align: center;">Aksi</th>
                                </tr>
                    @php $no =1; @endphp
                  
                    @foreach($karyawan as $data)
                    <tr>
                        <td>{{ $no++ }}</td>
                        <td>{{ $data->nama_karyawan }}</td>
                        <td>{{ $data->alamat }}</td>
                        <td>{{ $data->jabatan }}</td>
                        <td>{{ $data->jenis_kelamin }}</td>
                        <td>{{ $data->email }}</td>
                        <td>{{ $data->umur }}</td>
                        <td>{{ $data->tanggal_mulai_kontrak }}</td>
                        <td>{{ $data->tanggal_akhir_kontrak }}</td>
                        <td><a href="{{ route('karyawan.edit', $data->id) }}" class="fa  fa-edit"></a></td>
                        <td><a href="{{ route('karyawan.show', $data->id) }}" class="fa fa-eye"></a></td>
                        <td><form action="{{ route('karyawan.destroy', $data->id) }}" method="post">
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
