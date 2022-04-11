<?php
include '../koneksi.php';
if (isset($_POST['tambah'])) {
    $kode_guru = htmlspecialchars($_POST['kode_guru']);
    $kode_kelas = htmlspecialchars($_POST['kode_kelas']);

    $query = mysqli_query($conn, "INSERT into tb_walas (kode_guru,kode_kelas) values('$kode_guru','$kode_kelas')");
    if ($query) {
        echo "<script> type='text/javascript'>alert('Data berhasil ditambahkan!'); location.href=\"datawalikelas.php\" ;</script>";
    }
}
