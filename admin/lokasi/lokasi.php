<?php
session_start();
include "../../config/conn.php";

$nik_sess  =   $_SESSION['nik'];
$nama_lengkap_sess  =   $_SESSION['nama_lengkap'];

if (!empty($nik_sess) and !empty($nama_lengkap_sess)) {
    include '../header_admin.php';
?>
    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Lokasi</title>
    </head>

    <body>
        <div class="container my-3">

            <h1 class="text-center">LOKASI</h1>
            <div class="card">
                <div class="card-body">
                    <form action="../../config/aksi_lokasi.php" method="post">
                        <div class="form-group">
                            <label for="">Nama Lokasi</label>
                            <input type="text" class="form-control" name="nama_lokasi" id="" required>
                            <input type="hidden" name="act" value="simpan">
                        </div>
                        <div class="form-group">
                            <label for="">alamat_lokasi</label>
                            <textarea name="alamat_lokasi" class="form-control" id="" cols="30" rows="10" required></textarea>
                        </div>
                        <button type="submit" class="btn btn-primary my-2 ">Simpan</button>
                    </form>
                </div>
            </div>

            <table class="table" border="1">
                <tr>
                    <th>No.</th>
                    <th>ID Lokasi</th>
                    <th>Nama Lokasi</th>
                    <th>Alamat Lokasi</th>
                    <th colspan="2">Aksi</th>
                </tr>

                <?php
                $no =   1;
                $query          = "SELECT * FROM lokasi";
                $sql            = mysqli_query($conn, $query);
                while ($data_lokasi    = mysqli_fetch_array($sql)) :
                ?>
                    <tr>
                        <td><?= $no++; ?></td>
                        <td></td>
                        <td><?= $data_lokasi['nama_lokasi']; ?></td>
                        <td><?= $data_lokasi['alamat_lokasi']; ?></td>
                        <td><a href="<?= base_url ?>config/aksi_lokasi.php?act=delete&id_lokasi=<?= $data_lokasi['id_lokasi']; ?>">Hapus</a></td>
                        <td><a href="edit_lokasi.php?act=update&id_lokasi=<?= $data_lokasi['id_lokasi']; ?>">Update</a></td>
                    </tr>
                <?php endwhile ?>
            </table>
        </div>
    </body>

    </html>
<?php
    include '../../layout/footer.php';
} else {
    header('location:../../login.php');
} ?>