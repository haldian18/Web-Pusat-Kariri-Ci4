<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>UPT | PUSAT KARIR</title>
    <meta name="description" content="The small framework with powerful features">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" type="image/png" href="/favicon.ico" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
</head>

<body>
    <!-- Nav bar -->
    <nav class="fixed-top navbar navbar-expand-lg navbar-light bg-primary">
        <div class="container-fluid text-light">
            <img src="/asset/img/logo.png " class="rounded-circle text-light mx-4" alt="..." width="8%">
            PUSAT KARIR
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mx-2 mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class=" nav-link active text-light" aria-current="page" href="/project/home">Home</a>
                    </li>
                    <li class="mx-3 nav-item dropdown">
                        <a class="nav-link dropdown-toggle text-light" href="/project/profile" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            Profile
                        </a>
                        <ul class="dropdown-menu text-light" aria-labelledby="navbarDropdown">
                            <li><a class="dropdown-item" href="/project/profile">Profile</a></li>
                            <li><a class="dropdown-item" href="/kerja/programKerja">Program kerja</a></li>
                            <li><a class="dropdown-item" href="/organisasi/struktur">Struktur Organisasi</a></li>
                            <li><a class="dropdown-item" href="/project/tugasPoko">Tugas Pokok dan Fungsi</a></li>
                        </ul>

                    </li>
                    <li class="nmx-3 av-item dropdown">
                        <a class="nav-link dropdown-toggle text-light" href="/project/informasi" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            Informasi
                        </a>
                        <ul class="dropdown-menu text-light" aria-labelledby="navbarDropdown">
                            <li><a class="dropdown-item" href="/project/informasi">Informasi </a></li>
                            <li><a class="dropdown-item" href="/project/pengumuman">Pengumuman </a></li>
                            <li><a class="dropdown-item" href="/project/loka">Lowongan Kerja</a></li>
                        </ul>
                    </li>
                </ul>
                </li>
            </div>
        </div>
    </nav>
    <br>
    <nav class="pt-4">

        <img src="/asset/img/struktur organisasi.jpg" alt="..." height="100%" width="100%">
    </nav>
    <div class="text-center">
        <h3 class="pt-4 pb-4"><i>Struktir Organisasi</i></h3>
    </div>
    <div class="container-fluid p-5">
        <div class="row d-flex justifay-content-center">
            <div class="row  ">
                <?php foreach ($data as $data) : ?>
                    <div class="col-sm-3 col-xs-12 pb-5">
                        <img src="/asset/img/<?= $data['img'] ?>" alt="" class="card-img-top" width="30%">
                        <h5 class="card-title"><?= $data['jabatan'] ?></h5>
                        <p class="card-text"><?= $data['nama'] ?></p>
                    </div>
                    <br>
                <?php endforeach; ?>
            </div>
        </div>
    </div>
    <div class="container-fluid p-5">
        <div class="row d-flex justifay-content-center">
            <div class="col-lg-12 col-xs-8">
                <div>
                    <h1>Job Description</h1>
                    <p>
                        Untuk menunjang kelancaran pelaksanaan kegiatan di UPT. Pusat Karir, maka telah disusun uraian tugas masing-masing bagian sebagai berikut :
                    </p>
                    <hr>
                    <div class="col-12">
                        <table class="table table-striped table-hover mx-auto">
                            <b>No</b>
                            <br>
                            <tr>
                                <td>Nama/NIP</td>
                                <td>Pangkat/Golongan/Jabatan</td>
                                <td>Uraian Tugas</td>
                            </tr>
                            <br>
                            <tr>
                                <td> Riko Noviadi, S.Pt.,M.P. <br> 197111101999031004 </td>
                                <td> Lektor Kepala /IV-a/Ka UPT. Pusat Karir </td>
                                <td> a. Menyusun rencana dan program kerja UPT <br> b. Merencanakan dan mendistribusikan tugas-tugas UPT kepada sekretraris dan staf administerasi <br> c. Mengkoordinasikan pelaksanaan tugas sekretraris dan staf administerasi <br> d. Memonitoring pelaksanaan tugas sekretraris dan staf administerasi <br> e. Melaksanakan evaluasi atas pelaksanaan tugas sekretraris dan staf administerasi <br> f. Melaksanakan pembinaan terhadap pegawai di lingkungan UPT Pusat Karir <br> g. Mengajukan usulan dan pertimbangan kepada Direktur yang berhubungan dengan tugas UPT Pusat karir bila dirasa perlu terhadap kebijakan yang diambil baik diminta ataupun tidak <br> h. Menyusun laporan tahunan UPT Pusat Karir <br> i. Melaksanakan tugas kedinasan lain yang diberikan pimpinan <br></td>
                            </tr>
                            <tr>
                                <td> Oki Arifin, S.Kom., M.Cs. <br>
                                    198910232019031011</td>
                                <td> Penata Muda/III-b/Sekertaris</td>
                                <td> 1. Mengkoordinasikan pelaksanaan kegiatan UPT Pusat Karir bersama staf Administerasi. <br> 2. Mengkoordinasikan pengurusan penerimaan, penggajian, dan promosi karyawan non PNS di UPT Pusat Karir. <br>
                                    3. Mengkoordinasikan pelaksanaan kegiatan penyusunan laporan tahunan UPT Pusat Karir. <br> 4. Membantu Ka UPT dalam mengelola keuangan dan menyelesaikan administerasi keungan kegiatan UPT Pusat Karir. <br>
                                    5. Membantu Ka UPT merencakan dan melaksanakan program kerja UPT <br> 6. Melaksanakan tugas kedinasan lain yang diberikan pimpinan.
                                </td>
                            </tr>
                            <tr>
                                <td>Ririn Ramadani, A.Md.</td>
                                <td>Tenaga Kontrak Staf Administerasi</td>
                                <td> 1. Membantu kegiatan perawatan asset dan fasilitas atas arahan Ka UPT dan atau Sekretaris UPT <br> 2. Membantu kegiatan inventarisir asset dan fasilitas atas arahan Ka UPT dan atau Sekretaris UPT. <br>
                                    3. Membantu Ka UPT dalam hal penyelesaian administrasi keuangan kegiatan-kegiatan yang menjadi tanggung jawab UPT Pusat Karir <br> 4. Membantu Ka UPT dalam hal penyelesaian administrasi keuangan operasional bulanan <br>
                                    5. Melaporkan pelaksanaan kegiatan yang menjadi tanggung jawabnya <br> 6. Melaksanakan tugas kedinasan lain yang diberikan pimpinan.
                                </td>
                            </tr>
                            <tr>
                                <td>Sandi Utama Putra, A.Md.</td>
                                <td>Tenaga Kontrak Pendukung IT</td>
                                <td> 1. Melaksanakan kegiatan di bidang IT dalam setiap kegiatan yang dikakukan oleh UPT Pusat Karir <br> 2. Melaksanakan tugas kedinasan lain yang diberikan pimpinan.
                                </td>
                            </tr>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="row mx-4 pb-5 pt-5">
        <div class="text-center pt-3 col-sm-6">
            <br>
            <h4 class=" pb-1"> Alumni Yang Success</h4>
            <!-- Youtube Vidio -->
            <iframe class=" mx-4 pb-4 pt-4" width="560" height="315" src="https://www.youtube.com/embed/vT8N8LT0bp0" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
        </div>
        <div class="pt-5 col-sm-6">
            <h5>POLITEKNIK NEGERI LAMPUNG <br></h5>
            <h6><i>State Polytechnic of Lampung</i></h6>
            <br>
            <p><img src="/asset/img/map.png" alt="" height="10%" width="5%">Google Maps</p>Jl. Soekarno Hatta No.10, Rajabasa Raya, Kec. Rajabasa, Kota Bandar Lampung, Lampung 35144 <br>
            <br>
            <p><img src="/asset/img/tel.png" alt="" height="10%" width="5%"> Telepon (0721) 703-995</p>
            <br>
            <p><img src="/asset/img/fax.png" alt="" height="10%" width="5%">Fax (0721) 787-309 Telepon (0721) 703-995</p>
        </div>
    </div>
    <!-- Footer -->
    <footer class="sticky-footer bg-white">
        <div class="container my-auto">
            <div class="copyright text-center my-auto">
                <span>Copyright &copy; Kelompok 1 2022</span>
            </div>
        </div>
    </footer>
    <!-- End of Footer -->
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>

</html>