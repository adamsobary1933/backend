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
<center><h5 class="card-title">Penilaian Kinerja Karyawan</h5></center>
    <div class="row justify-content-center">
            <div class="col-md-15">
                <div>
                    <div class="card-header">Formulir Karyawan</div>
                    <div class="card-body">
                    <form action="{{ route('formulir.store') }}" method="post" enctype="multipart/form-data">
                            {{ csrf_field() }}

                            <div class="form-row">
                            <div class="col-md-4 mb-3">
                                <label for="">Periode Penilaian</label>
                                <input type="text" name="periode_penilain" class="form-control"  required>
                                </div>
                            <div class="col-md-4 mb-3">
                                <label for="">Nama Penilai</label>
                                <input type="text" name="nama_penilai" class="form-control"  required>
                            </div>
                            </div>

                            <div class="form-row">
                            <div class="col-md-4 mb-3">
                                <label for="">Tanggal</label>
                                <input type="date" name="tanggal" class="form-control"  required>
                            </div>
                            <div class="col-md-4 mb-3">
                                <label for="">Nama Karyawan</label>
                                <input type="text" name="nama_kar" class="form-control"  required>
                            </div>
                            </div>



                       <div class="form-row">
                       <div class="col-md-4 mb-3">
                                <label for="">Jabatan</label>
                                <input type="text" name="jabatan" class="form-control"  required>
                            </div>
                       <div class="col-md-4 mb-3">
                                <label for="">Departemen</label>
                                <input type="text" name="departemen" class="form-control"  required>
                            </div>
                            </div>

                                <div class="form-row">
                                 <div class="col-md-4 mb-3">
                                <label for="">Deskripsi Pekerjaan</label>
                                <input type="text" name="deskripsi_pekerjaan" class="form-control"  required>
                            </div>

                            </div>


<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-15">
            <div>

              <center><h3 class="card-header">Unsur Yang Di Nilai</h3></center>
                                          <div class="form-group">
              <div class="card-header">1.Quality/Kualitas Kerja</div>
                <br>
                    <br>
                        <table border="1">
                            <tr>
                            <th scope="col">Nilai</th>
                                <th colspan="3">Sangat Baik</th>
                                <th colspan="3">Baik</th>
                                <th colspan="3">Cukup</th>
                                <th colspan="3">Kurang</th>
                                <th colspan="3">Sangat Kurang</th>
                            </tr>
                            <tr>
                              <td rowspan="4">  <input type="number" name="nilai1" class="btn btn-light"  required></td>
                            </tr>
                            <tr>
                              <th>100</th>
                             <th>95</th>
                             <th>90</th>
                            <th>85</th>
                             <th>80</th>
                            <th>75</th>
                            <th>70</th>
                            <th>65</th>
                            <th>60</th>
                            <th>55</th>
                            <th>50</th>
                            <th>45</th>
                            <th>40</th>
                            <th>35</th>
                            <th>30</th>
                            </tr>
                        <tr>
                          <th colspan="3">Hasil kinerja sangat baik dan menyelesaikan lebihb awal dari
                                                      waktu yang ditentukan dilihat dari tingkat
                                                      akurasi,kerapihan,kebersihan,dan kelengkapanya. </th>
                            <th colspan="3">Hasil kerja baik dan akurat</th>
                            <th colspan="3">Hasil kerja cukup baik,namun masih kurang lengkap dan akurat</th>
                            <th colspan="3">Hasil kerja belum sebaik yang diharapkan</th>
                            <th colspan="3">Hasil kerja tidak baik,sering mengulangi kesalahan yang sama</th>
                        </tr>
                    </td>
                    </form>
                </table>
                <br>
                                <label for="">Keterangan : </label>
                                <input type="text" name="keterangan1" class="form-control"  required>
______________________________________________________________________________________________________________________________________________________________
            </div>
            </div>
        </div>
    </div>
</div>

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-15">
            <div>
              <div class="card-header">2.Kuantitas Kerja(Menilai Kuantitas tugas yang diselesaikan berdasarkan standar output/target yang ditetapkan untuk tugas).</div>
                <br>
                    <br>
                        <table border="1">
                            <tr>
                            <th scope="col">Nilai</th>
                                <th colspan="3">Sangat Baik</th>
                                <th colspan="3">Baik</th>
                                <th colspan="3">Cukup</th>
                                <th colspan="3">Kurang</th>
                                <th colspan="3">Sangat Kurang</th>
                            </tr>
                               <tr>
                                 <td rowspan="6">  <input type="number" name="nilai2" class="btn btn-light"  required></td>
                            </tr>
                            <tr>
                              <th>100</th>
                             <th>95</th>
                             <th>90</th>
                            <th>85</th>
                             <th>80</th>
                            <th>75</th>
                            <th>70</th>
                            <th>65</th>
                            <th>60</th>
                            <th>55</th>
                            <th>50</th>
                            <th>45</th>
                            <th>40</th>
                            <th>35</th>
                            <th>30</th>
                            </tr>
                        <tr>
                          <th colspan="3">Jumlah hasil kerja lebih dari batas yang diharapkan dan mampu
                                                       membantu pekerjaan lain yang berkaitan langsung atau tidak langsung
                                                       dengan bagiannya dengan hasil kerja yang memuaskan
                            <th colspan="3">Jumlah hasil erja sudah dalam batas yang diharapkan namun
                                                         belum efektif dalam pengunaan waktu</th>
                            <th colspan="3">Jumlah hasil kerja keras masih dalam batas yang diharapkan,
                                                         namun belum efektif pengunaan waktu
                            </th>
                            <th colspan="3">Jumlah hasil kerja terbatas,bekerja hanya untuk instruksi</th>
                            <th colspan="3">sangat lambat/tidak mampu menyelesaikan sebagaian tugas-tugas
                                                         yang menjadi tanggung jawabnya,jumlah hasil kerja sedikit
                            </th>
                          </th>
                        </tr>
                    </td>
                    </form>
                </table>
                <br>
                                <label for="">Keterangan : </label>
                                <input type="text" name="keterangan2" class="form-control"  required>
______________________________________________________________________________________________________________________________________________________________

                    <div class="container">
    <div class="row justify-content-center">
        <div class="col-md-15">
            <div>
              <div class="card-header">3.Kemampuan dalam menyelesaikan pekerjaan</div>
                <br>
                    <br>
                        <table border="1">
                            <tr>
                            <th scope="col">Nilai</th>
                                <th colspan="3">Sangat Baik</th>
                                <th colspan="3">Baik</th>
                                <th colspan="3">Cukup</th>
                                <th colspan="3">Kurang</th>
                                <th colspan="3">Sangat Kurang</th>
                            </tr>
                               <tr>
                               <td rowspan="6">  <input type="number" name="nilai3" class="btn btn-light"  required></td>
                            </tr>
                            <tr>
                              <th>100</th>
                             <th>95</th>
                             <th>90</th>
                            <th>85</th>
                             <th>80</th>
                            <th>75</th>
                            <th>70</th>
                            <th>65</th>
                            <th>60</th>
                            <th>55</th>
                            <th>50</th>
                            <th>45</th>
                            <th>40</th>
                            <th>35</th>
                            <th>30</th>
                            </tr>
                        <tr>
                          <th colspan="3">Mampu menyelesaikan pekerjaan lebih dari waktu yang ditentukan
                            <th colspan="3">Mampu menyelesaikan pekerjaan yang diberikan sesuai dengan
                                                         target waktu/jadwal yang ditentukan
                            </th>
                            <th colspan="3">Cukup mampu menyelesaikan pekerjaan yang diberikan namun
                                                         belum sesuai dengan target yang diberikan/jadwal yang ditentukan
                            </th>
                            <th colspan="3">JKurang mampu menyelesaikan pekerjaan yang diberikan</th>
                            <th colspan="3">Tidak mampu menyelesaikan pekerjaan yang diberikan
                            </th>
                          </th>
                        </tr>
                    </td>
                    </form>
                </table>
                <br>

                                <label for="">Keterangan : </label>
                                <input type="text" name="keterangan3" class="form-control"  required>


                        <div class="container">
    <div class="row justify-content-center">
        <div class="col-md-15">
            <div>
              <div class="card-header">4.Work Atitude and Dicipline(Sikap Kerja& Kedisplinan)</div>
                <br>
                    <br>
                        <table border="1">
                            <tr>
                                <th scope="col">Nilai</th>
                                <th colspan="3">Sangat Baik</th>
                                <th colspan="3">Baik</th>
                                <th colspan="3">Cukup</th>
                                <th colspan="3">Kurang</th>
                                <th colspan="3">Sangat Kurang</th>
                            </tr>
                               <tr>
                         <td rowspan="6">  <input type="number" name="nilai4" class="btn btn-light"  required></td>
                            </tr>
                            <tr>
                              <th>100</th>
                             <th>95</th>
                             <th>90</th>
                            <th>85</th>
                             <th>80</th>
                            <th>75</th>
                            <th>70</th>
                            <th>65</th>
                            <th>60</th>
                            <th>55</th>
                            <th>50</th>
                            <th>45</th>
                            <th>40</th>
                            <th>35</th>
                            <th>30</th>
                            </tr>
                        <tr>
                          <th colspan="3">Bekerja dengan antusias,energik dan rajin sehingga memberi pengaruh
                                                      positif pada rekan kerja lain. penuh loyalitas dalam menjalankan peraturan
                                                      dan prosedur kerja
                            <th colspan="3">Energik dan rajin,penuh loyalitas dalam menjalankan
                                                         peraturan dan prosedur kerja
                            </th>
                            <th colspan="3">Rajin dan loyalitas dalam menjalankan pertauran dan prosedur kerja
                            </th>
                            <th colspan="3">Kurang rajin,hanya menjalankan pertauran dan prosedur kerja</th>
                            <th colspan="3">Tidak Rajin,tidak mengikuti peraturan dan prosedur kerja
                            </th>
                          </th>
                        </tr>
                    </td>
                    </form>
                </table>
                <br>

                                <label for="">Keterangan : </label>
                                <input type="text" name="keterangan4" class="form-control"  required>

                      <div class="container">
    <div class="row justify-content-center">
        <div class="col-md-15">
            <div>
              <div class="card-header">5.Kehadiran Kerja</div>
                <br>
                    <br>
                        <table border="1">
                            <tr>
                                <th scope="col">Nilai</th>
                                <th colspan="3">Sangat Baik</th>
                                <th colspan="3">Baik</th>
                                <th colspan="3">Cukup</th>
                                <th colspan="3">Kurang</th>
                                <th colspan="3">Sangat Kurang</th>
                            </tr>
                               <tr>
                               <td rowspan="6">  <input type="number" name="nilai5" class="btn btn-light"  required></td>
                            </tr>
                            <tr>
                              <th>100</th>
                             <th>95</th>
                             <th>90</th>
                            <th>85</th>
                             <th>80</th>
                            <th>75</th>
                            <th>70</th>
                            <th>65</th>
                            <th>60</th>
                            <th>55</th>
                            <th>50</th>
                            <th>45</th>
                            <th>40</th>
                            <th>35</th>
                            <th>30</th>
                            </tr>
                        <tr>
                          <th colspan="3">Alpa=0, Terlambat 0 kali,sering ijin jam kerja,(ijin datan Terlambat
                                                       /ijin pulang cepat)
                            <th colspan="3">Alpa=0, Terlambat lebih dari 3 kali,sering ijin jam kerja,(ijin datan Terlambat
                                                       /ijin pulang cepat)
                            </th>
                            <th colspan="3">Alpa=0, Terlambat lebih dari 6 kali,sering ijin jam kerja,(ijin datan Terlambat
                                                       /ijin pulang cepat)
                            </th>
                            <th colspan="3">Alpa=1, Terlambat lebih dari 9 kali,sering ijin jam kerja,(ijin datan Terlambat
                                                       /ijin pulang cepat)</th>
                            <th colspan="3">Alpa=2, Terlambat lebih dari 12 kali,sering ijin jam kerja,(ijin datan Terlambat
                                                       /ijin pulang cepat)
                            </th>
                          </th>
                        </tr>
                    </td>
                    </form>
                </table>
                <br>

                                <label for="">Keterangan : </label>
                                <input type="text" name="keterangan5" class="form-control"  required>


<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-15">
            <div>
              <div class="card-header">6.Kemampuan Pribadi</div>
                <br>
                    <br>
                        <table border="1">
                            <tr>

                                <th scope="col">Nilai</th>
                                <th colspan="3">Sangat Baik</th>
                                <th colspan="3">Baik</th>
                                <th colspan="3">Cukup</th>
                                <th colspan="3">Kurang</th>
                                <th colspan="3">Sangat Kurang</th>
                            </tr>
                               <tr>
                   <td rowspan="6">  <input type="number" name="nilai6" class="btn btn-light"  required></td>
                            </tr>
                            <tr>
                              <th>100</th>
                             <th>95</th>
                             <th>90</th>
                            <th>85</th>
                             <th>80</th>
                            <th>75</th>
                            <th>70</th>
                            <th>65</th>
                            <th>60</th>
                            <th>55</th>
                            <th>50</th>
                            <th>45</th>
                            <th>40</th>
                            <th>35</th>
                            <th>30</th>
                            </tr>
                        <tr>
                          <th colspan="3">Kemampuan pribadi sangat terpuji,berinisiatif,kreatif,proaktif luar biasa,
                                                       konsisten dalam pengembangan diri
                          </th>
                            <th colspan="3">Kemampuan pribadi baik. sekali,inisiatif,kreatif,proaktif tinggi,
                                                         konsisten dalam mengembangkan diri
                            </th>
                            <th colspan="3">Kemampuan pribadi rata-rata dapat diterima inisiatif,kreatif,proaktif
                                                        terlihat,tetapi kadangkala masih perlu bimbingan
                            </th>
                            <th colspan="3">Kemampuan pribadi sering dibawah rata-rata, inisiatif,kreatif,proaktif masih
                                                        perlu bimbingan dan dikembangkan
                            </th>
                            <th colspan="3">Tidak bisa berinisiatif,tidak menunjang usaha perbaikan cara kerja,
                                                        tidak dapat memcahkan masalah,pasif,tidak kreatif
                            </th>
                        </tr>
                    </td>
                    </form>
                </table>
                <br>
                                <label for="">Keterangan : </label>
                                <input type="text" name="keterangan6" class="form-control"  required>
______________________________________________________________________________________________________________________________________________________________
            </div>
            </div>
        </div>
    </div>
</div>

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-15">
            <div>
              <div class="card-header">7.Kerja sama dengan rekan kerja departemen lain dan/atau tim kejrja dalam departemen yang sama</div>
                <br>
                    <br>
                        <table border="1">
                            <tr>
                                <th scope="col">Nilai</th>
                                <th colspan="3">Sangat Baik</th>
                                <th colspan="3">Baik</th>
                                <th colspan="3">Cukup</th>
                                <th colspan="3">Kurang</th>
                                <th colspan="3">Sangat Kurang</th>
                            </tr>
                               <tr>
                             <td rowspan="6">  <input type="number" name="nilai7" class="btn btn-light"  required></td>
                            </tr>
                            <tr>
                              <th>100</th>
                             <th>95</th>
                             <th>90</th>
                            <th>85</th>
                             <th>80</th>
                            <th>75</th>
                            <th>70</th>
                            <th>65</th>
                            <th>60</th>
                            <th>55</th>
                            <th>50</th>
                            <th>45</th>
                            <th>40</th>
                            <th>35</th>
                            <th>30</th>
                            </tr>
                        <tr>
                          <th colspan="3">mampu menciptakan dan membina hubungan kerja sama secara positif dengan
                                                     jaringan unut kerja yang lebih jelas, terbuka untuk memberi dan menerima saran
                            <th colspan="3">mampu membina hubungan kerja sama secara positif dan terbuk
                                                        a untuk memberi dan menerima saran</th>
                            <th colspan="3">mamapu menerima kerjasama secara positif dan
                                                        terbuka menerima saran namun tidak memberi saran
                            </th>
                            <th colspan="3">mamapu menerima kerjasama dan tidak mau menerima saran</th>
                            <th colspan="3">tidak memperhatikan hubungan / kerjasama
                            </th>
                          </th>
                        </tr>
                    </td>
                    </form>
                </table>
                <br>
                                <label for="">Keterangan : </label>
                                <input type="text" name="keterangan7" class="form-control"  required>
______________________________________________________________________________________________________________________________________________________________

                    <div class="container">
    <div class="row justify-content-center">
        <div class="col-md-15">
            <div>
              <div class="card-header">8.Daya Analisa & Logika(Menilai Kemampuan Untuk Berfikir Analitis, objectif, dan logis)</div>
                <br>
                    <br>
                        <table border="1">
                            <tr>

                                <th scope="col">Nilai</th>
                                <th colspan="3">Sangat Baik</th>
                                <th colspan="3">Baik</th>
                                <th colspan="3">Cukup</th>
                                <th colspan="3">Kurang</th>
                                <th colspan="3">Sangat Kurang</th>
                            </tr>
                               <tr>
                              <td rowspan="6">  <input type="number" name="nilai8" class="btn btn-light"  required></td>
                            </tr>
                            <tr>
                              <th>100</th>
                             <th>95</th>
                             <th>90</th>
                            <th>85</th>
                             <th>80</th>
                            <th>75</th>
                            <th>70</th>
                            <th>65</th>
                            <th>60</th>
                            <th>55</th>
                            <th>50</th>
                            <th>45</th>
                            <th>40</th>
                            <th>35</th>
                            <th>30</th>
                            </tr>
                        <tr>
                          <th colspan="3">Daya analisa sangat tajam.konsisten menerangkan analisa secara sistematis,
                                                       objektif,logis berdasarkan fakta dan sasaran tugas
                            <th colspan="3">memiliki daya analisa yang baik.hasil kerjanya objektif,sistematis
                                                         dalam hal yang kompleks kadangkala masih perlu arahan
                            </th>
                            <th colspan="3">secara umum hasil kerjanya sistemaits logis,objektif,
                                                        tetapi kadangkala masih perlu dibimbing
                            </th>
                            <th colspan="3">kadangkala hasil analisanya kurang berbobot.hasil kerjanya
                                                        belum didukung dengan analisa dan sistematis yang baik</th>
                            <th colspan="3">Tidak Dapat Berfikir Analitis atau sistematis.gagal untuk mencapai sasaran tugas
                            </th>
                          </th>
                        </tr>
                    </td>
                    </form>
                </table>
                <br>

                                <label for="">Keterangan : </label>
                                <input type="text" name="keterangan8" class="form-control"  required>


                        <div class="container">
    <div class="row justify-content-center">
        <div class="col-md-15">
            <div>
              <div class="card-header">9.Inisiatif Kerja</div>
                <br>
                    <br>
                        <table border="1">
                            <tr>

                            <th scope="col">Nilai</th>
                                <th colspan="3">Sangat Baik</th>
                                <th colspan="3">Baik</th>
                                <th colspan="3">Cukup</th>
                                <th colspan="3">Kurang</th>
                                <th colspan="3">Sangat Kurang</th>
                            </tr>
                               <tr>
                               <td rowspan="6">  <input type="number" name="nilai9" class="btn btn-light"  required></td>
                            </tr>
                            <tr>
                              <th>100</th>
                             <th>95</th>
                             <th>90</th>
                            <th>85</th>
                             <th>80</th>
                            <th>75</th>
                            <th>70</th>
                            <th>65</th>
                            <th>60</th>
                            <th>55</th>
                            <th>50</th>
                            <th>45</th>
                            <th>40</th>
                            <th>35</th>
                            <th>30</th>
                            </tr>
                        <tr>
                          <th colspan="3">Banyak menghasilkan metode baru yang sistematis dan telah
                                                      di terapkan sesuai dengan kebutuhan perusahaan
                            <th colspan="3">selalu dapat diharapkan untuk mengembangkan gagasan dan solusi kreatif
                            </th>
                            <th colspan="3">mamapu mengusulkan metode baru,namun belum dapat memaksimalkan
                                                        pengunaan metode baru tersebut
                            </th>
                            <th colspan="3">tidak memliki metode baru,hanya mampu mendukung metode baru yang bukan
                                                         hasil pemikirannya sendiri
                            </th>
                            <th colspan="3">tidak memliki metode baru,hanya menjalankan rutinitas saja
                          </th>
                        </tr>
                    </td>
                    </form>
                </table>
                <br>

                                <label for="">Keterangan : </label>
                                <input type="text" name="keterangan9" class="form-control"  required>

                      <div class="container">
    <div class="row justify-content-center">
        <div class="col-md-15">
            <div>
              <div class="card-header">10.Kemampuan membuat skala prioritas</div>
                <br>
                    <br>
                        <table border="1">
                            <tr>

                                <th scope="col">Nilai</th>
                                <th colspan="3">Sangat Baik</th>
                                <th colspan="3">Baik</th>
                                <th colspan="3">Cukup</th>
                                <th colspan="3">Kurang</th>
                                <th colspan="3">Sangat Kurang</th>
                            </tr>
                               <tr>
                               <td rowspan="6">  <input type="number" name="nilai10" class="btn btn-light"  required></td>
                            </tr>
                            <tr>
                              <th>100</th>
                             <th>95</th>
                             <th>90</th>
                            <th>85</th>
                             <th>80</th>
                            <th>75</th>
                            <th>70</th>
                            <th>65</th>
                            <th>60</th>
                            <th>55</th>
                            <th>50</th>
                            <th>45</th>
                            <th>40</th>
                            <th>35</th>
                            <th>30</th>
                            </tr>
                        <tr>
                          <th colspan="3">Unggul dalam memisahkan antara aktivitas yang berpioritas tinggi dan rendah
                            <th colspan="3">di atas rata-rata dalam mempioritaskan tugas-tugas,aktivitas dan tujuan
                            </th>
                            <th colspan="3">selalu dalam situasi propestik yang layak
                            </th>
                            <th colspan="3">kurang dalam membuat determinasi prioritas</th>
                            <th colspan="3">tidak mampu mencapai tingkat pemprioritaskan program yang dapat diterima
                            </th>
                          </th>
                        </tr>
                    </td>
                    </form>
                </table>
                <br>
                                <label for="">Keterangan : </label>
                                <input type="text" name="keterangan10" class="form-control"  required>

                                                <div class="container">
    <div class="row justify-content-center">
        <div class="col-md-15">
            <div>
              <center><h3 class="card-header">Hasil Penilaian Kinerja Keseluruhan</h3></center>
                <br>
                    <br>
                        <table border="1">
                            <tr>

                                <th scope="col">Jumlah Unsur Yang Dinilai<th>
                                <th colspan="3">Sangat Baik</th>
                                <th colspan="3">Baik</th>
                                <th colspan="3">Cukup</th>
                                <th colspan="3">Kurang</th>
                                <th colspan="3">Sangat Kurang</th>
                            </tr>
                               <tr>
                               <td rowspan="6">  <input type="number" name="jumlah_nilai" class="btn btn-light"  required></td>
                            </tr>
                            <tr>
                              <th>100</th>
                             <th>95</th>
                             <th>90</th>
                            <th>85</th>
                             <th>80</th>
                            <th>75</th>
                            <th>70</th>
                            <th>65</th>
                            <th>60</th>
                            <th>55</th>
                            <th>50</th>
                            <th>45</th>
                            <th>40</th>
                            <th>35</th>
                            <th>30</th>
                            </tr>
                              <tr>
                                      <td colspan="3">  <input class="form-control"  type="text" name="sangat_baik" disabled></td>
                                       <td colspan="3">  <input class="form-control" type="text" name="baik" disabled></td>
                                       <td colspan="3">  <input class="form-control"  type="text" name="cukup" disabled></td>
                                       <td colspan="3">  <input class="form-control" type="text" name="kurang" disabled></td>
                                       <td colspan="3">  <input class="form-control"  type="text" name="sangat_kurang" disabled></td>
                            </tr>
                            </th>
                          </th>
                        </tr>
                    </td>
                    </form>
                </table>
                     <br>
                                 <label for="">Rangkuman Evaluasi : </label>
                                <input type="text" name="rangkuman_evaluasi" class="form-control"  required>

                                 <label for="">Rekomendasi : </label>
                                <input type="text" name="rekomendasi" class="form-control"  required>
                                    <br><br>
                                        <button type="submit" class="btn btn-outline-info btn-rounded btn-block">
                                            Simpan Data
                                        </button>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
