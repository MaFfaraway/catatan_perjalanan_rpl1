<?php

include '../../config/conn.php';

$sql    =  "SELECT * FROM lokasi";
$query  =   mysqli_query($conn, $sql);
?>
<h1>CATATAN PERJALANAN </h1>

<form action="input_cttnPerjalanan.php" method="post">
    <label for="">Nama Lokasi</label>
    <select name="id_lokasi" id="">
        <?php
        while ($dataLokasi =   mysqli_fetch_array($query)) :
        ?>
            <option value="<?= $dataLokasi['id_lokasi'] ?>"><?= $dataLokasi['nama_lokasi'] . "|" . $dataLokasi['alamat_lokasi'] ?></option>
        <?php endwhile ?>
    </select>

    <label for="">Suhu Tubuh</label>
    <input type="number" name="suhu">

    <button type="submit">Catat</button>
</form>

<table class="table">
    <thead>
        <tr>
            <th>NO</th>
            <th>SUHU</th>
            <th>TANGGAL PERJALANAN</th>
            <th>JAM PERJALANAN</th>
            <th>LOKASI PERJALANAN</th>
        </tr>
    </thead>

    <tbody>
        <tr>
            <td></td>
        </tr>
    </tbody>
</table>