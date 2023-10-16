<?php
session_start();
include '../../config/conn.php';
include '../header_admin.php';

$sql    =  "SELECT * FROM lokasi";
$query  =   mysqli_query($conn, $sql);
?>
<div class="my-3">
    <h1 class="text-center">CATATAN PERJALANAN </h1>

    <div class="row g-0">
        <div class="col-lg-5">
            <div class="card py-auto ms-4  my-auto shadow" style="width: 80%;">
                <div class="card-body">

                    <form action="input_cttnPerjalanan.php" method="post">
                        <label for="">Nama Lokasi</label>
                        <select name="id_lokasi" id="" class="form-control">
                            <?php
                            while ($dataLokasi =   mysqli_fetch_array($query)) :
                            ?>
                                <option value="<?= $dataLokasi['id_lokasi'] ?>"><?= $dataLokasi['nama_lokasi'] . " | " . $dataLokasi['alamat_lokasi'] ?></option>
                            <?php endwhile ?>
                        </select>

                        <label for="">Suhu Tubuh</label>
                        <input type="number" name="suhu" class="form-control" required>

                        <button type="submit" class=" my-2  btn btn-outline-success">Catat</button>
                    </form>
                </div>
            </div>
        </div>
        <div class="col-lg-7">
            <div class="card py-auto me-4 shadow">
                <div class="card-body">
                    <table class="table">
                        <thead>
                            <tr>
                                <th>NO</th>
                                <th>LOKASI PERJALANAN</th>
                                <th>ALAMAT LOKASI PERJALANAN</th>
                                <th>TANGGAL PERJALANAN</th>
                                <th>JAM PERJALANAN</th>
                            </tr>
                        </thead>

                        <tbody>
                            <?php
                            $no     = 1;
                            $nik    =   $_SESSION['nik'];
                            $sql    =   "SELECT * FROM `cttn_perjalanan` INNER JOIN lokasi ON cttn_perjalanan.id_lokasi = lokasi.id_lokasi WHERE nik='$nik' ";
                            $query  =   mysqli_query($conn, $sql);
                            while ($dataLokasi   =   mysqli_fetch_array($query)) :
                            ?>
                                <tr>
                                    <td><?= $no++; ?></td>
                                    <td><?= $dataLokasi['nama_lokasi']; ?></td>
                                    <td><?= $dataLokasi['alamat_lokasi']; ?></td>
                                    <td><?= $dataLokasi['tgl_perjalanan']; ?></td>
                                    <td><?= $dataLokasi['jam_perjalanan']; ?></td>
                                </tr>
                            <?php endwhile ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>



</div>