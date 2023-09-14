<?php
session_start();
include "conn.php";

$username   =    $_POST['username'];
$password   =    $_POST['password'];

$sql    =   "SELECT * FROM pengguna WHERE username='$username' AND password='$password'";
$query  =   mysqli_query($conn, $sql);

$data   =   mysqli_num_rows($query);

// print_r($data);

if ($data > 0) {
    $_SESSION['login']   =   "Sudah Login ";
    header('location:../lokasi.php');
} else {
    echo "gagal";
}
