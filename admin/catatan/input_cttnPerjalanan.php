<?php
session_start();
include '../../config/conn.php';


$nik = $_SESSION['nik'];

$id_lokasi  =   $_POST['id_lokasi'];
$nik  =   $nik;
$suhu  =   $_POST['suhu'];
$tgl_perjalanan  =   date('Y-m-d');
$jam_perjalanan  =   date('H:i:s');

$sql =  "INSERT INTO cttn_perjalanan (nik, id_lokasi, tgl_perjalanan, jam_perjalanan, suhu) VALUES('$nik', '$id_lokasi', '$tgl_perjalanan', '$jam_perjalanan', '$suhu' )";

$query  =   mysqli_query($conn, $sql);

if ($query   ==  TRUE) {
    header('location:catatan_perjalanan.php');
} else {
    echo "<script> alert('Gagal');</script>";
}
