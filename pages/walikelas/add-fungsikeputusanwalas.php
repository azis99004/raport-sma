<?php
include '../koneksi.php';
if (isset($_POST['tambah'])) {
    $id_siswa = htmlspecialchars($_POST['id_siswa']);
    $kode_walas = htmlspecialchars($_POST['kode_walas']);
    $keputusan = htmlspecialchars($_POST['keputusan']);
    $kode_tahun_akademik = htmlspecialchars($_POST['kode_tahun_akademik']);

    $query = mysqli_query($conn, "INSERT into tb_keputusan_walas (id_siswa,kode_walas,keputusan,kode_tahun_akademik) values('$id_siswa','$kode_walas','$keputusan','$kode_tahun_akademik')");
    if ($query) {
        echo "<script> type='text/javascript'>alert('Data berhasil ditambahkan!'); location.href=\"halaman_walas.php\" ;</script>";
    }
}
