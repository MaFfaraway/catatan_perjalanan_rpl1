<?php
session_start();
include "conn.php";

$username   =    $_POST['username'];
$password   =    md5($_POST['password']);

$sql    =   "SELECT * FROM pengguna WHERE username='$username' AND password='$password'";
$query  =   mysqli_query($conn, $sql);

$data   =   mysqli_num_rows($query);

// print_r($data);

if ($data > 0) {

    $dataUser   =   mysqli_fetch_array($query);
    $_SESSION['nik']   = $dataUser['nik'];
    $_SESSION['nama_lengkap']   = $dataUser['nama_lengkap'];
    header('location:../admin/beranda.php');
} else {
    echo "gagal";
}
