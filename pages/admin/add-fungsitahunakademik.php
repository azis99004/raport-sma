<?php
include '../koneksi.php';
if (isset($_POST['tambah'])) {
    $nama_tahun_akademik = htmlspecialchars($_POST['nama_tahun_akademik']);
    $semester = htmlspecialchars($_POST['semester']);

    $query = mysqli_query($conn, "INSERT into tb_tahun_akademik (nama_tahun_akademik,semester) values('$nama_tahun_akademik','$semester')");
    if ($query) {
        echo "<script> type='text/javascript'>alert('Data berhasil ditambahkan!'); location.href=\"datatahunakademik.php\" ;</script>";
    }
}
