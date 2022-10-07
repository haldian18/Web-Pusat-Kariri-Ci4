<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <title>Add Data Diri</title>
</head>

<body>
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
                            <li><a class="dropdown-item" href="/project/programKerja">Program kerja</a></li>
                            <li><a class="dropdown-item" href="/project/strukturOrganisasi">Struktur Organisasi</a></li>
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
    <div class="container pt-5">
        <div class="row">
            <div class="col-lg-12">
                <h1>From Tambah Data</h1>
            </div>
        </div>

        <form action="/kerja/simpan" enctype="multipart/form-data" method="POST">
            <div class="row mt-3">
                <div class="col-lg-3">
                    <label for="">Program</label>
                </div>
                <div class="col-lg-6">
                    <input type="text" class="form-control" name="program" placeholder="program">
                </div>
            </div>
            <div class="row  mt-3">
                <div class="col-lg-9">
                    <button class="btn btn-primary" type="submit">simpan</button>

                </div>
            </div>
        </form>
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