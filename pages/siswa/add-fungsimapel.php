<?php
include '../koneksi.php';
if (isset($_POST['tambah'])) {
    $kode_mapel = htmlspecialchars($_POST['kode_mapel']);
    $nama_mapel = htmlspecialchars($_POST['nama_mapel']);
    $jurusan = htmlspecialchars($_POST['jurusan']);

    $query = mysqli_query($conn, "INSERT into tb_mapel (kode_mapel, nama_mapel, jurusan) values('$kode_mapel','$nama_mapel','$jurusan')");
    if ($query) {
        echo "<script> type='text/javascript'>alert('Data berhasil ditambahkan!'); location.href=\"datamapel.php\" ;</script>";
    }
}
