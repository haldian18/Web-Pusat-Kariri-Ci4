<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/css/bootstrap.min.css" integrity="sha384-r4NyP46KrjDleawBgD5tp8Y7UzmLA05oM1iAEQ17CSuDqnUK2+k9luXQOfXJCJ4I" crossorigin="anonymous">

    <title>Login</title>
</head>

<body>
    <nav class="fixed-top navbar navbar-expand-lg navbar-light bg-primary">
        <div class="container-fluid text-light">
            <img src="/asset/img/logo.png " class="rounded-circle text-light mx-4" alt="..." width="8%">
            <form class="d-flex">
                <a class="btn text-warning btn-outline-light" aria-current="page" href="/project/home">Logout</a>
            </form>
        </div>
        </div>
    </nav>
    <div class="container">
        <div class="row justify-content-md-center pt-5">

            <div class="col-6 pt-5">
                <?php if (session()->getFlashdata('msg')) : ?>
                    <div class="alert alert-danger"><?= session()->getFlashdata('msg') ?></div>
                <?php endif; ?>
                <div class="row mx-4 pt-5">
                    <div class="card">
                        <div class="card-header bg-primary text-light text-center">
                            LOGIN ACCOUNT
                        </div>
                        <div class="card-body">
                            <form action="/login/auth" method="post">
                                <div class="mb-3">
                                    <label for="InputForEmail" class="form-label">Email address</label>
                                    <input type="email" class="form-control is-invalid" name="email" class="form-control" id="InputForEmail" value="<?= set_value('email') ?>">
                                </div>
                                <div class="mb-3">
                                    <label for="InputForPassword" class="form-label">Password</label>
                                    <input type="password" class="form-control is-invalid" name="password" class="form-control" id="InputForPassword">
                                </div>
                                <button type="submit" class="btn btn-primary">Login</button>
                            </form>
                            <br>
                            <p class="col-6">Belum memiliki akun ? <a href="/register">Register</a></p>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>

    <!-- Footer -->
    <footer class="pt-5 sticky-footer bg-white">
        <div class="container my-auto">
            <div class="copyright text-center my-auto">
                <span>Copyright &copy; Kelompok 1 2022</span>
            </div>
        </div>
    </footer>
    <!-- End of Footer -->

    <!-- Popper.js first, then Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/js/bootstrap.min.js" integrity="sha384-oesi62hOLfzrys4LxRF63OJCXdXDipiYWBnvTl9Y9/TRlw5xlKIEHpNyvvDShgf/" crossorigin="anonymous"></script>
</body>

</html>