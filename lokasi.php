<?php include "config/conn.php" ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lokasi</title>
</head>

<body>
    <form action="config/aksi_lokasi.php" method="post">
        <div>
            <label for="">Nama Lokasi</label>
            <input type="text" name="nama_lokasi" id="">
            <input type="hidden" name="act" value="simpan">
        </div>
        <div>
            <label for="">alamat_lokasi</label>
            <textarea name="alamat_lokasi" id="" cols="30" rows="10"></textarea>
        </div>

        <button type="submit">Simpan</button>
    </form>

    <table border="1">
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
                <td><a href="config/aksi_lokasi.php?act=delete&id_lokasi=<?= $data_lokasi['id_lokasi']; ?>">Hapus</a></td>
                <td><a href="edit_lokasi.php?act=update&id_lokasi=<?= $data_lokasi['id_lokasi']; ?>">Update</a></td>
            </tr>
        <?php endwhile ?>
    </table>
</body>

</html>