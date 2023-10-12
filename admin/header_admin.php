<?php


$preUrl =   explode('/', $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI']);
$url    =   (isset($_SERVER['HTTPS']) ? 'https' : 'http') . '://' . $preUrl[0] . '/' . $preUrl[1] . '/';
define('base_url', $url);

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PeduliSatu</title>
    <link rel="stylesheet" href="<?= base_url ?>btsp/css/bootstrap.min.css">
    <link rel="icon" href="https://cdn1.iconfinder.com/data/icons/earth-day-10/512/884_earth_day_world-256.png">

</head>

<body>
    <nav class="sticky-top shadow navbar navbar-expand-lg bg-light">
        <div class="container-fluid container">
            <a class="navbar-brand" href="#">
                <img src="<?= base_url ?>img/logoKEMKES.png" alt="">
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse flex-grow" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto gap-5 flex-nowrap">
                    <li class="nav-item mx-2">
                        <a class="nav-link active" aria-current="page" href="<?= base_url ?>admin/beranda.php">Beranda</a>
                    </li>
                    <li class="nav-item mx-2">
                        <a class="nav-link" href="<?= base_url ?>admin/lokasi/lokasi.php">Lokasi</a>
                    </li>
                    <li class="nav-item mx-2">
                        <a class="nav-link" href="<?= base_url ?>admin/catatan/catatan_perjalanan.php">Buat Catatan Perjalanan</a>
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
                <button class="btn btn-outline-success" onclick="location.href='<?= base_url ?>config/logout.php'">Logout</button>

            </div>
        </div>
    </nav>
    <!-- end nav -->