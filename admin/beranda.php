<?php
session_start();

$nik            =   $_SESSION['nik'];
$nama_lengkap   =   $_SESSION['nama_lengkap'];
if (!empty($nik)) {

?>
    <h1>Selamat Datang <?= $nama_lengkap; ?></h1>



    <a href="../config/logout.php">Logout</a>

<?php
} else {
    header('location:../login.php');
}



?>