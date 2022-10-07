<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <title>Document</title>
</head>

<body>

    <nav class="fixed-top navbar navbar-expand-lg navbar-light bg-primary">
        <div class="container-fluid text-light">
            <img src="/asset/img/logo.png " class="rounded-circle text-light mx-4" alt="..." width="8%">
            PUSAT KARIR
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mx-2 mb-2 mb-lg-0">
                </ul>
            </div>
        </div>
    </nav>

    <div class=" container-fluid row justifay-content-center">
        <div class="pb-5 mt-4 row mx-4 pb-5 pt-5 col-sm-8">
            <img src="/asset/img/<?= $img ?>" alt="" class="card-img-top" width="30%">
            <h5 class="card-title"><?= $judul ?></h5>
            <p class="card-text"><?= $penjelasan ?></p>
        </div>
        <br>
    </div>
    <div class="row mx-4 pb-5 pt-5">
        <div class="text-center pt-3 col-sm-6">
            <br>
            <h4 class=" pb-1"> Alumni Yang Success</h4>
            <!-- Youtube Vidio -->
            <iframe width="560" height="315" src="https://www.youtube.com/embed/vT8N8LT0bp0" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
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