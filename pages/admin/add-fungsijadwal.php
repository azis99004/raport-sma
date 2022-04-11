<?php
include '../koneksi.php';
if (isset($_POST['tambah'])) {
    $kode_kelas = htmlspecialchars($_POST['kode_kelas']);
    $kode_mapel = htmlspecialchars($_POST['kode_mapel']);
    $kode_guru = htmlspecialchars($_POST['kode_guru']);
    $jam_mulai = htmlspecialchars($_POST['jam_mulai']);
    $jam_selesai = htmlspecialchars($_POST['jam_selesai']);
    $hari = htmlspecialchars($_POST['hari']);

    $query = mysqli_query($conn, "INSERT into tb_jadwal_mapel (kode_kelas,kode_mapel,kode_guru,jam_mulai,jam_selesai,hari) values('$kode_kelas','$kode_mapel','$kode_guru','$jam_mulai','$jam_selesai','$hari')");
    if ($query) {
        echo "<script> type='text/javascript'>alert('Data berhasil ditambahkan!'); location.href=\"jadwalmapel.php\" ;</script>";
    }
}
