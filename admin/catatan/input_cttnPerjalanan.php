<link rel="stylesheet" href="../../btsp/css/bootstrap.min.css">
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
// $sql = 'false';
$query  =   mysqli_query($conn, $sql);

if ($query   ==  TRUE) {
?>
    <div class="modal fade" id="suksesinput" data-bs-backdrop="static" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <d class="modal-content">
                <div class="modal-header bg-success">
                    <h1 class="modal-title fs-5 text-light" id="exampleModalLabel">Berhasil </h1>
                </div>
                <div class="modal-body">
                    <h6>Catatan Perjalanan Anda Berhasil Di Tambahkan </h6>
                </div>
                <div class="modal-footer">
                    <a href="catatan_perjalanan.php" class="btn btn-outline-success">
                        <h5 class="py-auto">OKE</h5>
                    </a>
                </div>

        </div>
    </div>
    </div>

    <script src=" ../../btsp/js/bootstrap.bundle.js"></script>

    <script>
        let modal = new bootstrap.Modal(document.getElementById('suksesinput'), {});
        modal.show();
    </script>

<?php
} else {
?>
    <script>
        window.alert('Gagal Menambahkan Catatan');
        window.location.href = 'catatan_perjalanan.php';
    </script>
<?php
}
?>