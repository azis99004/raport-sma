<?php
include '../koneksi.php';
if (isset($_POST['tambah'])) {
    $kode_ruangan = htmlspecialchars($_POST['kode_ruangan']);
    $kode_guru = htmlspecialchars($_POST['kode_guru']);
    $nama_kelas = htmlspecialchars($_POST['nama_kelas']);

    $query = mysqli_query($conn, "INSERT into tb_kelas (kode_ruangan,kode_guru,nama_kelas) values('$kode_ruangan','$kode_guru','$nama_kelas')");
    if ($query) {
        echo "<script> type='text/javascript'>alert('Data berhasil ditambahkan!'); location.href=\"datakelas.php\" ;</script>";
    }
}
