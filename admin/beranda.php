<?php
session_start();

$nik            =   $_SESSION['nik'];
$nama_lengkap   =   $_SESSION['nama_lengkap'];
if (!empty($nik)) {
    include "header_admin.php"
?>

    <!-- <head>
        <link rel="stylesheet" href="../btsp/css/bootstrap.min.css">
    </head> -->

    <div class="container my-4">
        <div class="card bg-info my-2">
            <div class="card-body">
                <h1>Selamat Datang <?= $nama_lengkap; ?></h1>
            </div>
        </div>

        <div class="row">
            <div class="col-lg-5">
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Perferendis neque atque totam dolores corrupti maiores ipsam, adipisci sunt odio, unde quidem, officia ad esse facilis? Distinctio recusandae quaerat esse quo.</p>
            </div>
            <div class="col-lg-7">
                <div class="row">
                    <div class="col-lg-6">
                        <div class="card mb-3" style="max-width: 340px;">
                            <div class="row g-0">
                                <div class="col-md-4 text-center my-auto">
                                    <i class="bi bi-person-rolodex fs-1 "></i>
                                </div>
                                <div class="col-md-8">
                                    <div class="card-body">
                                        <h5 class="card-title">Jumlah Pengguna</h5>
                                        <p class="card-text">12</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="card mb-3" style="max-width: 340px;">
                            <div class="row g-0">
                                <div class="col-md-4 text-center my-auto">
                                    <i class="bi bi-geo-alt-fill fs-1   "></i>
                                </div>
                                <div class="col-md-8">
                                    <div class="card-body">
                                        <h5 class="card-title">Jumlah Lokasi</h5>
                                        <p class="card-text">12</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="card mb-3" style="max-width: 340px;">
                            <div class="row g-0">
                                <div class="col-md-4 text-center my-auto">
                                    <i class="bi bi-car-front-fill fs-1"></i>
                                </div>
                                <div class="col-md-8">
                                    <div class="card-body">
                                        <h5 class="card-title">Jumlah Perjalanan</h5>
                                        <p class="card-text">12</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>




<?php
    include '../layout/footer.php';
} else {
    header('location:../login.php');
}



?>