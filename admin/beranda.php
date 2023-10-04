<?php
session_start();

$nik            =   $_SESSION['nik'];
$nama_lengkap   =   $_SESSION['nama_lengkap'];
if (!empty($nik)) {
?>

    <head>
        <link rel="stylesheet" href="../btsp/css/bootstrap.min.css">
    </head>
    <!-- nav -->
    <nav class="sticky-top shadow navbar navbar-expand-lg bg-light">
        <div class="container-fluid container">
            <a class="navbar-brand" href="#">
                <img src="img/logoKEMKES.png" alt="">
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse flex-grow" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto gap-5 flex-nowrap">
                    <li class="nav-item mx-2">
                        <a class="nav-link active" aria-current="page" href="beranda.php">Beranda</a>
                    </li>
                    <li class="nav-item mx-2">
                        <a class="nav-link" href="lokasi/lokasi.php">Lokasi</a>
                    </li>
                    <li class="nav-item mx-2">
                        <a class="nav-link" href="../config/logout.php">Logout</a>
                    </li>
                    <!-- <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            Dropdown
                        </a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="#">Action</a></li>
                            <li><a class="dropdown-item" href="#">Another action</a></li>
                            <li>
                                <hr class="dropdown-divider">
                            </li>
                            <li><a class="dropdown-item" href="#">Something else here</a></li>
                        </ul>
                    </li> -->
                </ul>
                <button class="btn btn-outline-success" onclick="location.href='login.php'">Masuk</button>

            </div>
        </div>
    </nav>
    <!-- end nav -->

    <h1>Selamat Datang <?= $nama_lengkap; ?></h1>




<?php
} else {
    header('location:../login.php');
}



?>