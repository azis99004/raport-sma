<?php
include '../koneksi.php';
if (isset($_POST['tambah'])) {
    $id_siswa = htmlspecialchars($_POST['id_siswa']);
    $sakit = htmlspecialchars($_POST['sakit']);
    $izin = htmlspecialchars($_POST['izin']);
    $tanpa_keterangan = htmlspecialchars($_POST['tanpa_keterangan']);
    $kode_tahun_akademik = htmlspecialchars($_POST['kode_tahun_akademik']);

    $query = mysqli_query($conn, "INSERT into tb_absen_total (id_siswa,sakit, izin, tanpa_keterangan,kode_tahun_akademik) values('$id_siswa','$sakit','$izin','$tanpa_keterangan','$kode_tahun_akademik')");
    if ($query) {
        echo "<script> type='text/javascript'>alert('Data berhasil ditambahkan!'); location.href=\"pilih-tahun-siswa.php\" ;</script>";
    }
}
