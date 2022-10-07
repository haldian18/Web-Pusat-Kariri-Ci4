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

        <img src="/asset/img/lowongan kerja.jpg" alt="..." height="100%" width="100%">
    </nav>
    <div>
        <div class="row mx-4 pb-5 pt-5">
            <?php foreach ($data->getResultArray() as $data) : ?>
                <div class="col-sm-4 col-xs-12 pb-5">
                    <div class="card">
                        <img src="/asset/img/<?= $data['img'] ?>" alt="" class="card-img-top" width="30%">
                        <div class="card-body">
                            <h5 class="card-title"><?= $data['judul'] ?></h5>
                            <p class="card-text"><?= $data['penjelasan'] ?></p>
                            <pclass="card-text"><?= $data['tipe'] ?></p>
                                <a href="/project/detaile/<?= $data['id'] ?> " class="btn btn-primary">ReadMore</a>
                        </div>
                    </div>
                </div>
                <br>
            <?php endforeach; ?>
        </div>
    </div>
    <div class="row mx-4 pb-5 pt-5">
        <div class="text-center pt-3 col-sm-6">
            <br>
            <h4 class=" pb-1"> Alumni Yang Success</h4>
            <!-- Youtube Vidio -->
            <iframe class="mx-4 pb-4" width="560" height="315" src="https://www.youtube.com/embed/vT8N8LT0bp0" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
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