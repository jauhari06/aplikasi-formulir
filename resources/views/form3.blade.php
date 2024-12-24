<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FORMULIR APLIKASI RPL TIPE A</title>
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
                <h3>FORMULIR DAFTAR RIWAYAT HIDUP (CURRICULUM VITAE) (Form 5)</h3>
                <div class="card">
                    <h6 class="mb-4" style="text-align: left;">IDENTITAS DIRI</h6>
                    <p style="text-align: left;">Nama Perguruan Tinggi: Universitas Narotama Surabaya.</p>
                    <form class="form-card" onsubmit="event.preventDefault()">
                        <div class="row justify-content-between text-left">
                            <div class="form-group col-sm-12 flex-column d-flex">
                                <label class="form-control-label px-3">Nama<span class="text-danger"> *</span></label>
                                <input type="text" id="fname" name="fname" placeholder="masukan nama lengkap anda" onblur="validate(1)">
                            </div>
                        </div>
                        <div class="row justify-content-between text-left">
                            <div class="form-group col-sm-12 flex-column d-flex">
                                <label class="form-control-label px-3">Tempat dan Tanggal Lahir<span class="text-danger"> *</span></label>
                                <input type="text" id="fname" name="fname" placeholder="masukan Tempat dan Tanggal Lahir anda" onblur="validate(1)">
                            </div>
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
                            <div class="form-group col-sm-12 flex-column d-flex">
                                <label class="form-control-label px-3">Agama <span class="text-danger"> *</span></label>
                                <input type="text" id="fname" name="fname" placeholder="masukan Agama anda" onblur="validate(1)">
                            </div>
                        </div>
                        <div class="row justify-content-between text-left">
                            <div class="form-group col-sm-12 flex-column d-flex">
                                <label class="form-control-label px-3">Institusi Tempat Bekerja<span class="text-danger"> *</span></label>
                                <input type="text" id="fname" name="fname" placeholder="masukan Institusi Tempat Bekerja anda" onblur="validate(1)">
                            </div>
                        </div>
                        <div class="row justify-content-between text-left">
                            <div class="form-group col-sm-12 flex-column d-flex">
                                <label class="form-control-label px-3">Jabatan<span class="text-danger"> *</span></label>
                                <input type="text" id="fname" name="fname" placeholder="masukan Jabatan anda" onblur="validate(1)">
                            </div>
                        </div>
                        <div class="row justify-content-between text-left">
                            <div class="form-group col-sm-12 flex-column d-flex">
                                <label class="form-control-label px-3">Status Pekerjaan<span class="text-danger"> *</span></label>
                                <select id="status_pekerjaan" name="status_pekerjaan" class="form-control">
                                    <option value="" disabled selected>Pilih Status Pekerjaan</option>
                                    <option value="pegawai_tetap">Pegawai Tetap</option>
                                    <option value="pegawai_honorer">Pegawai Honorer</option>
                                    <option value="pegawai_negeri_sipil">Pegawai Negeri Sipil</option>
                                    <option value="lainnya">Lainnya</option>
                                </select>
                            </div>
                        </div>
                        <div class="row justify-content-between text-left">
                            <div class="form-group col-sm-12 flex-column d-flex">
                                <label class="form-control-label px-3">Alamat Tempat Bekerja<span class="text-danger"> *</span></label>
                                <input type="text" id="fname" name="fname" placeholder="masukan Alamat Tempat Bekerja anda" onblur="validate(1)">
                            </div>
                        </div>
                        <div class="row justify-content-between text-left">
                            <div class="form-group col-sm-12 flex-column d-flex">
                                <label class="form-control-label px-3">Telp./Faks.<span class="text-danger"> *</span></label>
                                <input type="text" id="fname" name="fname" placeholder="masukan Telp./Faks. anda" onblur="validate(1)">
                            </div>
                        </div>
                        <div class="row justify-content-between text-left">
                            <div class="form-group col-sm-12 flex-column d-flex">
                                <label class="form-control-label px-3">Alamat Kantor<span class="text-danger"> *</span></label>
                                <input type="text" id="fname" name="fname" placeholder="masukan Alamat Kantor anda" onblur="validate(1)">
                            </div>
                        </div>
                        <div class="row justify-content-between text-left">
                            <div class="form-group col-sm-12 flex-column d-flex">
                                <label class="form-control-label px-3">Telp./HP<span class="text-danger"> *</span></label>
                                <input type="text" id="fname" name="fname" placeholder="masukan Telp./HP anda" onblur="validate(1)">
                            </div>
                        </div>
                        <div class="row justify-content-between text-left">
                            <div class="form-group col-sm-12 flex-column d-flex">
                                <label class="form-control-label px-3">Alamat e-mail<span class="text-danger"> *</span></label>
                                <input type="text" id="fname" name="fname" placeholder="masukan Alamat e-mail anda" onblur="validate(1)">
                            </div>
                        </div>
                    </form>
                    <h6 class="mb-4"  style="text-align: left;">RIWAYAT PENDIDIKAN </h6>
                    <form class="form-card" onsubmit="event.preventDefault()">
                        <table class="table table-bordered">
                            <thead class="thead-light">
                                <tr>
                                    <th>No</th>
                                    <th>Nama Sekolah</th>
                                    <th>Tahun Lulus</th>
                                    <th>Jurusan/
                                        Program Studi</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td><input type="text" name="No[]" class="form-control"></td>
                                    <td><input type="text" name="Nama_Sekolah[]" class="form-control"></td>
                                    <td><input type="text" name="Tahun_Lulus[]" class="form-control"></td>
                                    <td><input type="text" name="Jurusan/
                                        Program Studi[]" class="form-control"></td>
                                </tr>
                            </tbody>
                        </table>
                        <div class="text-right mt-3">
                            <button type="button" class="btn btn-primary" onclick="tambahBaris()">Tambah Baris</button>
                        </div>
                    </form>

                    <h6 class="mb-4"  style="text-align: left;">PELATIHAN PROFESIONAL</h6>
                    <form class="form-card" onsubmit="event.preventDefault()">
                        <table class="table table-bordered">
                            <thead class="thead-light">
                                <tr>
                                    <th>Tahun</th>
                                    <th>Nama Pelatihan (dalam/luar negeri) dan disebutkan uraian materinya</th>
                                    <th>Penyelenggara</th>
                                    <th>Jangka waktu</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td><input type="text" name="Tahun[]" class="form-control"></td>
                                    <td><input type="text" name="Nama_Pelatihan[]" class="form-control"></td>
                                    <td><input type="text" name="Penyelenggara[]" class="form-control"></td>
                                    <td><input type="text" name="Jangka_waktu[]" class="form-control"></td>
                                </tr>
                            </tbody>
                        </table>
                        <div class="text-right mt-3">
                            <button type="button" class="btn btn-primary" onclick="tambahBaris()">Tambah Baris</button>
                        </div>
                    </form>

                    <h6 class="mb-4"  style="text-align: left;">KONFERENSI/SEMINAR/LOKAKARYA/SIMPOSIUM </h6>
                    <form class="form-card" onsubmit="event.preventDefault()">
                        <table class="table table-bordered">
                            <thead class="thead-light">
                                <tr>
                                    <th>Tahun</th>
                                    <th>Judul Seminar/lokakarya/simposium</th>
                                    <th>Penyelenggara</th>
                                    <th>Status keikutsertaan: Panitia/ peserta/pembicara</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td><input type="text" name="Tahun[]" class="form-control"></td>
                                    <td><input type="text" name="Judul_Seminar[]" class="form-control"></td>
                                    <td><input type="text" name="Penyelenggara[]" class="form-control"></td>
                                    <td><input type="text" name="Status_keikutsertaan[]" class="form-control"></td>
                                </tr>
                            </tbody>
                        </table>
                        <div class="text-right mt-3">
                            <button type="button" class="btn btn-primary" onclick="tambahBaris()">Tambah Baris</button>
                        </div>
                    </form>

                    <h6 class="mb-4"  style="text-align: left;">PENGHARGAAN/PIAGAM</h6>
                    <form class="form-card" onsubmit="event.preventDefault()">
                        <table class="table table-bordered">
                            <thead class="thead-light">
                                <tr>
                                    <th>Tahun</th>
                                    <th>Bentuk Penghargaan</th>
                                    <th>Pemberi Penghargaan</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td><input type="text" name="Tahun[]" class="form-control"></td>
                                    <td><input type="text" name="Bentuk_Penghargaan[]" class="form-control"></td>
                                    <td><input type="text" name="Pemberi_Penghargaan[]" class="form-control"></td>
                                </tr>
                            </tbody>
                        </table>
                        <div class="text-right mt-3">
                            <button type="button" class="btn btn-primary" onclick="tambahBaris()">Tambah Baris</button>
                        </div>
                    </form>

                    <h6 class="mb-4"  style="text-align: left;">ORGANISASI PROFESI/ILMIAH</h6>
                    <form class="form-card" onsubmit="event.preventDefault()">
                        <table class="table table-bordered">
                            <thead class="thead-light">
                                <tr>
                                    <th>Tahun</th>
                                    <th>Jenis/ Nama Organisasi</th>
                                    <th>Jabatan/jenjang keanggotaan</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td><input type="text" name="Tahun[]" class="form-control"></td>
                                    <td><input type="text" name="Nama_Organisasi[]" class="form-control"></td>
                                    <td><input type="text" name="Jabatan[]" class="form-control"></td>
                                </tr>
                            </tbody>
                        </table>
                        <div class="text-right mt-3">
                            <button type="button" class="btn btn-primary" onclick="tambahBaris()">Tambah Baris</button>
                        </div>
                    </form>

                    <h6 class="mb-4"  style="text-align: left;">DAFTAR RIWAYAT PEKERJAAN/PENGALAMAN KERJA</h6>
                    <p style="text-align: left;">Pada bagian ini, diisi dengan pengalaman kerja yang anda miliki yang relevan dengan mata kuliah yang akan dinilai. Tulislah data pengalaman kerja saudara dimulai dari urutan paling akhir (terkini).</p>
                    <form class="form-card" onsubmit="event.preventDefault()">
                        <table class="table table-bordered">
                            <thead class="thead-light">
                                <tr>
                                    <th>No</th>
                                    <th>Nama dan Alamat Institusi/Perusahaan</th>
                                    <th>Periode Bekerja
                                        (Tgl/bln/th)
                                        </th>
                                    <th>Posisi/
                                        jabatan  
                                        </th>
                                    <th>Uraian Tugas utama pada posisi pekerjaan tersebut</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td><input type="text" name="No[]" class="form-control"></td>
                                    <td><input type="text" name="Nama_Alamat[]" class="form-control"></td>
                                    <td><input type="text" name="Periode_Bekerja[]" class="form-control"></td>
                                    <td><input type="text" name="Posisi[]" class="form-control"></td>
                                    <td><input type="text" name="Uraian_Tugas[]" class="form-control"></td>
                                </tr>
                            </tbody>
                        </table>
                        <div class="text-right mt-3">
                            <button type="button" class="btn btn-primary" onclick="tambahBaris()">Tambah Baris</button>
                        </div>
                    </form>
                    <p style="text-align: left;">Saya menyatakan bahwa semua keterangan dalam Daftar Riwayat Hidup (Curriculum Vitae) ini adalah sepenuhnya benar dan saya bertanggung-jawab atasseluruh data dalam formulir inidan apabila dikemudian hari ternyata informasi yang saya sampaikan tersebut adalah tidak benar, maka saya bersedia menerima sangsi sesuai dengan ketentuan yang berlaku dan apabila terdapat kesalahan, saya bersedia mempertanggungjawabkannya.</p>

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
    <script src="{{ asset('js/main.js') }}"></script>
</body>
</html>
