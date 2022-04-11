<?php
include '../koneksi.php';
if (isset($_POST['ubah'])) {
    $kode_tahun_akademik = htmlspecialchars($_POST['kode_tahun_akademik']);
    $nama_tahun_akademik = htmlspecialchars($_POST['nama_tahun_akademik']);
    $semester = htmlspecialchars($_POST['semester']);

    $query = "UPDATE tb_tahun_akademik SET
                nama_tahun_akademik = '$nama_tahun_akademik',
                semester = '$semester'
                WHERE kode_tahun_akademik = '$kode_tahun_akademik'
				";
    mysqli_query($conn, $query);
    if ($query) {
        echo "<script> type='text/javascript'>alert('Data berhasil ditambahkan!'); location.href=\"datatahunakademik.php\" ;</script>";
    }
}
