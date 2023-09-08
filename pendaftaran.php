<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pendaftaran</title>
</head>

<body>
    <form action="config/input_regist.php" method="post">
        <div>
            <label for="">NIK</label>
            <input type="number" name="nik" id="">
        </div>
        <div>
            <label for="">Username</label>
            <input type="text" name="username" id="">
        </div>
        <div>
            <label for="">Alamat</label>
            <textarea name="alamat" id="" cols="30" rows="10"></textarea>
        </div>
        <div>
            <label for="">Nomor Telepon</label>
            <input type="number" name="no_telp" id="">
        </div>
        <div>
            <label for="">Tanggal Lahir</label>
            <input type="date" name="tgl_lahir" id="">
        </div>
        <div>
            <label for="">Jenis Kelamin</label>
            <select name="jenis_kelamin" id="">
                <option value="pria">Pria</option>
                <option value="perempuan">Wanita</option>
            </select>
        </div>
        <div>
            <label for="">Password</label>
            <input type="password" name="password" id="">
        </div>
        <button type="submit">Registrasi</button>
    </form>
</body>

</html>