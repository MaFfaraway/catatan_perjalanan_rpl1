<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lokasi</title>
</head>

<body>
    <form action="../../config/aksi_lokasi.php" method="post">
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
</body>

</html>