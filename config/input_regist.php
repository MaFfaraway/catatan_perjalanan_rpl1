<?php
include "conn.php";
$nik            =   $_POST['nik'];
$username       =   $_POST['username'];
$password       =   md5($_POST['password']);
$alamat         =   $_POST['alamat'];
$no_telp        =   $_POST['no_telp'];
$tgl_lahir      =   $_POST['tgl_lahir'];
$jenis_kelamin  =   $_POST['jenis_kelamin'];

$query  =   "INSERT INTO `pengguna` (`nik`, `username`, `password`, `alamat`, `no_telp`, `tgl_lahir`, `jenis_kelamin`) VALUES ('" . $nik . "', '" . $username . "', '" . $password . "', '" . $alamat . "', '" . $no_telp . "', '" . $tgl_lahir . "', '" . $jenis_kelamin . "')";

$exe    =   mysqli_query($conn, $query);

if ($exe) {
    header('location:../login.php');
} else {
    echo "gagal";
}
