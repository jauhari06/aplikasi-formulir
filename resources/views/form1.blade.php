<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FORMULIR APLIKASI RPL TIPE A </title>
    <!-- Tambahkan link ke file CSS -->
    
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.0.3/css/font-awesome.css">
    <link href="{{ asset('css/main.css')}}" rel="stylesheet" />
</head>
<body>

    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <a class="navbar-brand" href="#">RPL TIPE A</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item">
                    <a class="nav-link" href="{{ url('/') }}">Form 1</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ url('form2') }}">Form 2</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ url('form3') }}">Form 3</a>
                </li>
            </ul>
        </div>
    </nav>

    <div class="container-fluid px-1 py-5 mx-auto">
        <div class="row d-flex justify-content-center">
            <div class="col-xl-7 col-lg-8 col-md-9 col-11 text-center">
                <h3>FORMULIR APLIKASI RPL TIPE A (Form 2)</h3>
                <div class="card">
                    <form class="form-card" onsubmit="event.preventDefault()">
                        <div class="row justify-content-between text-left">
                            <div class="form-group col-sm-12 flex-column d-flex"> <label class="form-control-label px-3">Program studi<span class="text-danger"> *</span></label> <input type="text" id="Programstudi" name="Programstudi" placeholder="masukan Program studi anda" > </div>
                        </div>
                        <div class="form-group col-sm-6 flex-column d-flex">
                            <label class="form-control-label px-3">Jenjang<span class="text-danger"> *</span></label>
                            <select id="Jenjang" name="Jenjang" class="form-control">
                                <option value="Sarjana">Sarjana</option>
                                <option value="Pasca Sarjana">Pasca Sarjana</option>
                            </select>
                        </div>
                        <p style="text-align: left;">Nama Perguruan Tinggi	:  Universitas Narotama Surabaya.</p>
                    </form>
                    <h5 class="mb-4" style="text-align: left;">Bagian 1: Rincian Data Calon Mahasiswa</h5>
                    <p style="text-align: left;">Pada bagian ini, cantumkan data pribadi, data pendidikan formal serta data pekerjaan saudara pada saat ini.</p>
                    <h7 class="mb-4" style="text-align: left;">a. Data Pribadi</h7>
                    <form class="form-card" onsubmit="event.preventDefault()">
                        

                        <div class="row justify-content-between text-left">
                            <div class="form-group col-sm-12 flex-column d-flex"> <label class="form-control-label px-3">nama lengkap<span class="text-danger"> *</span></label> <input type="text" id="fname" name="fname" placeholder="masukan nama lengkap anda" > </div>
                        </div>
                        <div class="row justify-content-between text-left">
                            <div class="form-group col-sm-12 flex-column d-flex"> <label class="form-control-label px-3">Tempat Tanggal Lahir<span class="text-danger"> *</span></label> <input type="text" id="tempatTanggalLahir" name="tempatTanggalLahir" placeholder="masukan Tempat Tanggal Lahir anda" > </div>
                        </div>
                        <div class="row">
                            <div class="form-group col-sm-6 flex-column d-flex">
                                <label class="form-control-label px-3">Jenis kelamin<span class="text-danger"> *</span></label>
                                <select id="gender" name="gender" class="form-control">
                                    <option value="Pria">Pria</option>
                                    <option value="Wanita">Wanita</option>
                                </select>
                            </div>
                            <div class="form-group col-sm-6 flex-column d-flex">
                                <label class="form-control-label px-3">Status<span class="text-danger"> *</span></label>
                                <select id="status" name="status" class="form-control">
                                    <option value="Menikah">Menikah</option>
                                    <option value="Lajang">Lajang</option>
                                    <option value="Pernah menikah">Pernah menikah</option>
                                </select>
                            </div>
                        </div>
                        <div class="row justify-content-between text-left">
                            <div class="form-group col-12 flex-column d-flex"> <label class="form-control-label px-3">Kebangsaan<span class="text-danger"> *</span></label> <input type="text" id="Kebangsaan" name="Kebangsaan" placeholder="" > </div>
                        </div>
                        <div class="row justify-content-between text-left">
                            <div class="form-group col-12 flex-column d-flex"> <label class="form-control-label px-3">Alamat Rumah<span class="text-danger"> *</span></label> <input type="text" id="AlamatRumah" name="AlamatRumah" placeholder="" > </div>
                        </div>
                        <div class="row justify-content-between text-left">
                            <div class="form-group col-sm-6 flex-column d-flex"> <label class="form-control-label px-3">Kode Pos<span class="text-danger"> *</span></label> <input type="text" id="kodePos" name="kodePos" placeholder="" > </div>
                            <div class="form-group col-sm-6 flex-column d-flex"> <label class="form-control-label px-3">No. Telepon/HP<span class="text-danger"> *</span></label> <input type="text" id="HP" name="HP" placeholder="" > </div>
                        </div>
                        <div class="row justify-content-between text-left">
                            <div class="form-group col-12 flex-column d-flex"> <label class="form-control-label px-3">email<span class="text-danger"> *</span></label> <input type="text" id="email" name="email" placeholder="" > </div>
                        </div>
                    </form>
                    <h7 class="mb-4" style="text-align: left;">b.	Data Pendidikan </h7>
                    <form class="form-card" onsubmit="event.preventDefault()">
                        <div class="row justify-content-between text-left">
                            <div class="form-group col-sm-12 flex-column d-flex"> <label class="form-control-label px-3">Pendidikan Terakhir<span class="text-danger"> *</span></label> <input type="text" id="PendidikanTerakhir" name="PendidikanTerakhir" placeholder="" > </div>
                        </div>
                        <div class="row justify-content-between text-left">
                            <div class="form-group col-sm-12 flex-column d-flex"> <label class="form-control-label px-3">Nama Perguruan Tinggi/Sekolah<span class="text-danger"> *</span></label> <input type="text" id="Sekolah" name="Sekolah" placeholder="" > </div>
                        </div>
                        <div class="row justify-content-between text-left">
                            <div class="form-group col-sm-12 flex-column d-flex"> <label class="form-control-label px-3">Program Studi<span class="text-danger"> *</span></label> <input type="text" id="ProgramStudi" name="ProgramStudi" placeholder=""> </div>
                        </div>
                        <div class="row justify-content-between text-left">
                            <div class="form-group col-sm-12 flex-column d-flex"> <label class="form-control-label px-3">Tahun lulus<span class="text-danger"> *</span></label> <input type="text" id="Tahunlulus" name="Tahunlulus" placeholder="" > </div>
                        </div>
                    </form>
                    <h5 class="mb-4" style="text-align: left;">Bagian 2: Daftar Mata Kuliah</h5>
<p style="text-align: left;">
    Daftar Mata Kuliah pada Program Studi yang diajukan untuk memperoleh pengakuan berdasarkan kompetensi 
    yang sudah saudara peroleh dari pendidikan formal sebelumnya (melalui Transfer sks), dan dari pendidikan 
    nonformal, informal atau pengalaman kerja (melalui asesmen untuk Perolehan sks), dengan cara memberi tanda pada pilihan Ya atau Tidak.
</p>
<div class="container">
    <form class="form-card" onsubmit="event.preventDefault()">
        <table class="table table-bordered wide-table">
            <thead class="thead-light">
                <tr>
                    <th style="width: 20%;">KODE MK</th>
                    <th style="width: 40%;">NAMA MATAKULIAH</th>
                    <th style="width: 20%;">SKS</th>
                    <th style="width: 30%;">Mengajukan RPL</th>
                    <th style="width: 20%;">Keterangan</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td><input type="text" name="kode_mk[]" class="form-control" placeholder="Masukkan KODE MK"></td>
                    <td><input type="text" name="nama_matkul[]" class="form-control" placeholder="Masukkan Nama Matakuliah"></td>
                    <td><input type="text" name="sks[]" class="form-control" placeholder="Masukkan SKS"></td>
                    <td>
                        <select name="rpl[]" class="form-control">
                            <option value="iya">Iya</option>
                            <option value="tidak">Tidak</option>
                        </select>
                    </td>
                    <td>
                        <select name="keterangan[]" class="form-control">
                            <option value="transfer_sks">Transfer SKS</option>
                            <option value="perolehan_sks">Perolehan SKS</option>
                        </select>
                    </td>
                </tr>
            </tbody>
        </table>
        <div class="text-right mt-3">
            <button type="button" class="btn btn-primary" onclick="tambahBaris()">Tambah Baris</button>
        </div>
    </form>
</div>

<!-- Pernyataan -->
<p class="mt-4">
    Bersama ini saya mengajukan permohonan untuk dapat mengikuti Rekognisi Pembelajaran Lampau (RPL) dan dengan ini saya menyatakan bahwa:
</p>
<p style="text-align: left;">1. Semua informasi yang saya tuliskan adalah sepenuhnya benar dan saya bertanggung-jawab atas seluruh data dalam formulir ini, dan apabila dikemudian hari ternyata informasi yang saya sampaikan tersebut adalah tidak benar, maka saya bersedia menerima sangsi sesuai dengan ketentuan yang berlaku;</p>
<p style="text-align: left;">2. Saya memberikan ijin kepada pihak pengelola program RPL, untuk melakukan pemeriksaan kebenaran informasi yang saya berikan dalam formulir aplikasi ini kepada seluruh pihak yang terkait dengan jenjang akademik sebelumnya dan kepada perusahaan tempat saya bekerja sebelumnya dan atau saat ini saya bekerja;</p>
<p style="text-align: left;">3. Saya akan mengikuti proses asesmen sesuai dengan jadwal/waktu yang ditetapkan oleh Perguruan Tinggi.</p>


<!-- Tombol Simpan dan Cetak -->
<div class="form-group text-center mt-4">
    <button type="submit" class="btn btn-success">Simpan</button>
    <button type="button" class="btn btn-secondary" onclick="window.print()">Cetak</button>
</div>
</div>
</div>
</div>
</div>

    <!-- Tambahkan link ke file JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.bundle.min.js"></script>
    <script src="{{ asset('js/form1-val.js') }}"></script>
    <script src="{{ asset('js/main.js') }}"></script>
</body>
</html>