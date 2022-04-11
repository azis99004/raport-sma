<?php
include '../koneksi.php';
if (isset($_POST['tambah'])) {
    $kode_guru = htmlspecialchars($_POST['kode_guru']);
    $id_siswa = htmlspecialchars($_POST['id_siswa']);
    $nilai = htmlspecialchars($_POST['nilai']);
    $grade = htmlspecialchars($_POST['grade']);
    $deskripsi = htmlspecialchars($_POST['deskripsi']);

    $query = mysqli_query($conn, "INSERT into tb_extrakulikuler (kode_guru,id_siswa,nilai, grade, deskripsi) values('$kode_guru','$id_siswa','$nilai','$grade','$deskripsi')");
    if ($query) {
        echo "<script> type='text/javascript'>alert('Data berhasil ditambahkan!'); location.href=\"dataextrakulikuler.php\" ;</script>";
    }
}
