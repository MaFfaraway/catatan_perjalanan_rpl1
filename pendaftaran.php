    <?php
    include "layout/header.php";
    include "template/navbar.php";
    ?>

    <body class="">

        <div class="container  my-4">
            <div class="row mt-4 pt-4">
                <div class="col-lg-6 m-auto">
                    <div class="card border-0 shadow-lg">
                        <div class="card-body">

                            <div class="row pt-5">
                                <div class="col-lg-12 text-center">
                                    <h3 class="">PEDULISATU</h3>
                                </div>
                            </div>

                            <form action="config/input_regist.php" method="post">
                                <div class="row my-3">
                                    <div class="col-lg-12">
                                        <input type="number" name="nik" placeholder="Masukkan NIK Anda" id="" class="form-control">
                                    </div>
                                </div>
                                <div class="row my-3">
                                    <div class="col-lg-12">
                                        <input type="text" name="username" placeholder="Masukkan Nama Pengguna Anda" id="" class="form-control">
                                    </div>
                                </div>
                                <div class="row my-3">
                                    <div class="col-lg-12">
                                        <textarea name="alamat" id="" cols="30" rows="10" placeholder="Masukkan Alamat Anda" class="form-control"></textarea>
                                    </div>
                                </div>
                                <div class="row my-3">
                                    <div class="col-lg-12">
                                        <input type="number" name="no_telp" placeholder="Masukkan Nomor Telepon Anda" id="" class="form-control">
                                    </div>
                                </div>
                                <div class="row my-3">
                                    <div class="col-lg-12">
                                        <input type="date" name="tgl_lahir" id="" class="form-control">
                                    </div>
                                </div>
                                <div class="row my-3">
                                    <div class="col-lg-12">
                                        <select name="jenis_kelamin" id="" class="form-control">
                                            <option value="" disabled selected style="color: gray;">Jenis Kelamin</option>
                                            <option value="pria">Pria</option>
                                            <option value="perempuan">Wanita</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="row my-3">
                                    <div class="col-lg-12">
                                        <input type="password" name="password" placeholder="Masukkan Kata Sandi Anda" id="" class="form-control">
                                    </div>
                                </div>

                                <div class="row my-3">
                                    <div class="col-lg-12">
                                        <button type="submit" class="form-control btn btn-outline-success">Registrasi</button>
                                        <p class="mt-2 text-center fs-6">Sudah Punya Akun? , <a href="pendaftaran.php">Klik Disini</a>. Untuk Registrasi Akun</p>
                                    </div>
                                </div>
                            </form>

                        </div>
                    </div>
                </div>
            </div>
        </div>

    </body>




    <?php
    // include "template/copyright.php";
    include "layout/footer.php";
    ?>