<?php
include "conn.php";
if (!empty($_POST['act'])) {
    $act    =   $_POST['act'];
} elseif (!empty($_GET['act'])) {
    $act    =   $_GET['act'];
    $id_lokasi =   $_GET['id_lokasi'];
}

if ($act    ==  'simpan') {
    $nama_lokasi    =   $_POST['nama_lokasi'];
    $alamat_lokasi    =   $_POST['alamat_lokasi'];

    $sql    =   "INSERT INTO lokasi (nama_lokasi, alamat_lokasi) VALUES ('$nama_lokasi', '$alamat_lokasi')";
    $query  =   mysqli_query($conn, $sql);

    if ($query) {
        header('location:../lokasi.php');;
    } else {
        echo "Gagal";
    }
} elseif ($act == 'update') {
    $id_lokasi      =   $_POST['id_lokasi'];
    $nama_lokasi    =   $_POST['nama_lokasi'];
    $alamat_lokasi  =   $_POST['alamat_lokasi'];

    $sql    =   "UPDATE lokasi SET nama_lokasi  =   '$nama_lokasi', alamat_lokasi   =   '$alamat_lokasi' WHERE id_lokasi    =   '$id_lokasi'";
    $query  =   mysqli_query($conn, $sql);

    if ($query   =   true) {
        header('location:../lokasi.php');
    } else {
        echo "gagal";
    }
} elseif ($act       ==  "delete") {
    $sql    =   "DELETE FROM lokasi WHERE id_lokasi='$id_lokasi'";
    $query  =   mysqli_query($conn, $sql);

    if ($query) {
        header('location:../lokasi.php');
    }
}
