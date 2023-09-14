<?php
include "layout/header.php";
include "template/navbar.php";
?>

<body class="">

    <div class="container ">
        <div class="row mt-4 pt-4">
            <div class="col-lg-6 m-auto">
                <div class="card border-0 shadow-lg">
                    <div class="card-body">

                        <div class="row pt-5">
                            <div class="col-lg-12 text-center">
                                <h3 class="">PEDULISATU</h3>
                            </div>
                        </div>

                        <form action="config/cek_login.php" method="post">
                            <div class="row my-3">
                                <div class="col-lg-12">
                                    <input type="text" name="username" placeholder="Masukkan Nama Pengguna Anda" id="" class="form-control">
                                </div>
                            </div>

                            <div class="row my-3">
                                <div class="col-lg-12">
                                    <input type="password" name="password" placeholder="Masukkan Kata Sandi Anda" id="" class="form-control">
                                </div>
                            </div>

                            <div class="row my-3">
                                <div class="col-lg-12">
                                    <button type="submit" class="form-control btn btn-outline-success">Masuk</button>
                                    <p class="mt-2 text-center fs-6">Belum Punya Akun? , <a href="pendaftaran.php">Klik Disini</a>. Untuk Registrasi Akun</p>
                                </div>
                            </div>
                        </form>

                    </div>
                </div>
            </div>
        </div>
    </div>

</body>
<!-- <h1>LOGIN</h1>
<form action="" method="post">
    <div>
        <label for="">Username</label>
        <input type="text" name="username" id="" required>
    </div>
    <div>
        <label for="">Password</label>
        <input type="password" name="password" id="" required>
    </div>

    <button type="submit">Login</button>
</form> -->



<?php
// include "template/copyright.php";
include "layout/footer.php";
?>