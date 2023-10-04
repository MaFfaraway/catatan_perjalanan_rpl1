<?php
session_start();

$nik            =   $_SESSION['nik'];
$nama_lengkap   =   $_SESSION['nama_lengkap'];
if (!empty($nik)) {

?>
    <a href="beranda.php">Beranda</a>|
    <a href="lokasi/lokasi.php">Lokasi</a> |
    <a href="../config/logout.php">Logout</a>
    <h1>Selamat Datang <?= $nama_lengkap; ?></h1>




<?php
} else {
    header('location:../login.php');
}



?>