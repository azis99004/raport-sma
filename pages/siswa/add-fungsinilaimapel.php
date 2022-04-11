<?php
include '../koneksi.php';
if (isset($_POST['tambah'])) {
    $kode_guru = htmlspecialchars($_POST['kode_guru']);
    $id_siswa = htmlspecialchars($_POST['id_siswa']);
    $kode_mapel = htmlspecialchars($_POST['kode_mapel']);
    $nilai = htmlspecialchars($_POST['nilai']);
    $grade = htmlspecialchars($_POST['grade']);
    $deskripsi = htmlspecialchars($_POST['deskripsi']);

    $query = mysqli_query($conn, "INSERT into tb_nilai_mapel (kode_guru,id_siswa, kode_mapel,nilai, grade, deskripsi) values('$kode_guru','$id_siswa','$kode_mapel','$nilai','$grade','$deskripsi')");
    if ($query) {
        echo "<script> type='text/javascript'>alert('Data berhasil ditambahkan!'); location.href=\"penilaianmapel.php\" ;</script>";
    }
}
