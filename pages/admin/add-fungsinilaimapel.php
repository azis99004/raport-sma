<?php
include '../koneksi.php';
if (isset($_POST['tambah'])) {
    $kode_guru = htmlspecialchars($_POST['kode_guru']);
    $id_siswa = htmlspecialchars($_POST['id_siswa']);
    $kode_mapel = htmlspecialchars($_POST['kode_mapel']);
    $nilai = htmlspecialchars($_POST['nilai_mapel']);
    $grade = htmlspecialchars($_POST['grade_mapel']);
    $deskripsi = htmlspecialchars($_POST['deskripsi_mapel']);
    $kode_tahun_akademik = htmlspecialchars($_POST['kode_tahun_akademik']);

    $query = mysqli_query($conn, "INSERT into tb_nilai_mapel (kode_guru,id_siswa, kode_mapel,nilai_mapel, grade_mapel, deskripsi_mapel, kode_tahun_akademik) values('$kode_guru','$id_siswa','$kode_mapel','$nilai','$grade','$deskripsi','$kode_tahun_akademik')");
    if ($query) {
        echo "<script> type='text/javascript'>alert('Data berhasil ditambahkan!'); location.href=\"penilaianmapel.php\" ;</script>";
    }
}
