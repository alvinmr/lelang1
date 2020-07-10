<?php

include './db/config.php';

session_start();

if (!empty($_GET['pesan'])) {
    if ($_GET['pesan'] == 'gagal') echo "<script> alert('bid kamu kurang tinggi'); </script>";
}

?>

<!doctype html>
<html lang="en">

    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

        <title>Aplikasi Pelelangan</title>

        <!-- Vendor CSS -->
        <!-- CSS Vendor -->
        <link rel="stylesheet" href="./admin/template/vendor/bootstrap-4.5.0-dist/css/bootstrap.min.css">
        <link rel="stylesheet" href="./admin/template/vendor/font-awesome-4.7.0/css/all.min.css">
    </head>

    <body>
        <div id="app">
            <div class="main-wrapper main-wrapper-1">
                <nav class="navbar navbar-expand-lg navbar-light bg-light">
                    <div class="container">
                        <a class="navbar-brand" href="#">Aplikasi Pelelangan</a>
                        <button class="navbar-toggler" type="button" data-toggle="collapse"
                            data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false"
                            aria-label="Toggle navigation">
                            <span class="navbar-toggler-icon"></span>
                        </button>
                        <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                            <div class="navbar-nav ml-auto">
                                <a class="nav-item nav-link <?= $_GET['page'] == '' ? 'active' : '' ?>"
                                    href="./">Beranda</a>
                                <?php if (empty($_SESSION['username'])) { ?>
                                <a href="login.php" class="btn btn-primary mx-4">Masuk</a>
                                <a href="register.php" class="btn btn-secondary">Daftar</a>
                                <?php } else { ?>
                                <a class="nav-item nav-link <?= $_GET['page'] == 'riwayat' ? 'active' : '' ?>"
                                    href="?page=riwayat">Riwayat</a>
                                <a href="./modules/auth.php?aksi=logout" class="btn btn-primary">Logout</a>
                                <?php } ?>

                            </div>
                        </div>
                    </div>
                </nav>
            </div>
        </div>

        <section class="section">
            <div class="container">

                <!-- Content -->
                <?php if (empty($_GET['page'])) {
                include './pages/index.php';
                } else {
                include './pages/' . $_GET['page'] . '.php';
                }  ?>
                <!-- End Content -->


            </div>
        </section>



        <!-- Footer -->
        <footer>
            <div class="container my-4 text-center">
                Copyright milik tuhan
            </div>
        </footer>
        <!-- Optional JavaScript -->
        <!-- jQuery first, then Popper.js, then Bootstrap JS -->
        <script src="./admin/template/vendor/jquery/jquery.slim.min.js">
        </script>
        <script src="./admin/template/vendor/bootstrap-4.5.0-dist/js/bootstrap.bundle.js">
        </script>
    </body>

</html>