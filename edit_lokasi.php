<?php
include "layout/header.php";
include "config/conn.php";
$id_lokasi =   $_GET['id_lokasi'];

$sql    =   "SELECT * FROM lokasi WHERE id_lokasi='$id_lokasi'";
$query  =   mysqli_query($conn, $sql);
$data   =   mysqli_fetch_array($query);

?>
<div class="container">

    <h1>UPDATE LOKASI</h1>
    <div class="card">
        <div class="card-body">
            <form action="config/aksi_lokasi.php" method="post">
                <div class="form-group">
                    <label for="">Nama Lokasi</label>
                    <input type="text" name="nama_lokasi" class="form-control" value="<?= $data['nama_lokasi']; ?>">
                    <input type="hidden" name="act" value="update">
                    <input type="hidden" name="id_lokasi" value="<?= $id_lokasi; ?>">
                </div>
                <div class="form-group">
                    <label for="">Alamat Lokasi</label>
                    <textarea style="max-height:100px ;" name="alamat_lokasi" id="" cols="30" rows="10" class="form-control"><?= $data['nama_lokasi']; ?></textarea>
                </div>

                <button type="submit" class="btn btn-success mt-3">Update</button>
            </form>
        </div>
    </div>

</div>

<?php include "layout/footer.php" ?>