<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PeduliSatu</title>
    <link rel="stylesheet" href="btsp/css/bootstrap.min.css">
    <link rel="icon" href="https://cdn1.iconfinder.com/data/icons/earth-day-10/512/884_earth_day_world-256.png">

    <style>
        @media (max-width:1080px) {
            #gambar {
                order: 1;
            }

            #deskripsi {
                order: 2;
            }
        }
    </style>
</head>

<body>
    <?php 



        $preUrl =   explode('/', $_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI'] );
        $url    =   (isset($_SERVER['HTTPS'])?'https':'http').'://'.$preUrl[0].'/'.$preUrl[1].'/';
        define('base_url',$url);
    
    ?>
<nav class="sticky-top shadow navbar navbar-expand-lg bg-light">
    <div class="container-fluid container">
        <a class="navbar-brand" href="#">
            <img src="img/logoKEMKES.png" alt="">
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse flex-grow" id="navbarSupportedContent">
            <ul class="navbar-nav ms-auto flex-nowrap">
                <li class="nav-item mx-2">
                    <a class="nav-link active" aria-current="page" href="<?= $url ?>index.php">Beranda</a>
                </li>
                <li class="nav-item mx-2">
                    <a class="nav-link" href="#">Dashboard PeduliSatu</a>
                </li>
                <li class="nav-item mx-2">
                    <a class="nav-link" href="#">Tentang PeduliSatu</a>
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

            <button class="btn btn-outline-success" onclick="location.href='<?= $url ?>login.php'">Masuk</button>
        </div>
    </div>
</nav>