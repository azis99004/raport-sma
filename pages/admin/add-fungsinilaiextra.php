<?php
include '../koneksi.php';
if (isset($_POST['tambah'])) {
    $id_siswa = htmlspecialchars($_POST['id_siswa']);
    $kegiatan_ekstrakulikuler = htmlspecialchars($_POST['kegiatan_ekstrakulikuler']);
    $predikat = htmlspecialchars($_POST['predikat']);
    $keterangan = htmlspecialchars($_POST['keterangan']);

    $query = mysqli_query($conn, "INSERT into tb_extrakulikuler (id_siswa,kegiatan_ekstrakulikuler, predikat, keterangan) values('$id_siswa','$kegiatan_ekstrakulikuler','$predikat','$keterangan')");
    if ($query) {
        echo "<script> type='text/javascript'>alert('Data berhasil ditambahkan!'); location.href=\"dataextrakulikuler.php\" ;</script>";
    }
}
