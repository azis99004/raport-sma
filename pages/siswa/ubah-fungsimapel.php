<?php
include '../koneksi.php';
if (isset($_POST['ubah'])) {
    $kode_mapel = htmlspecialchars($_POST['kode_mapel']);
    $nama_mapel = htmlspecialchars($_POST['nama_mapel']);
    $jurusan = htmlspecialchars($_POST['jurusan']);

    $query = "UPDATE tb_mapel SET
				kode_mapel = '$kode_mapel',
				nama_mapel = '$nama_mapel',
				jurusan = '$jurusan'
                WHERE kode_mapel = '$kode_mapel'
				";
    mysqli_query($conn, $query);
    if ($query) {
        echo "<script> type='text/javascript'>alert('Data berhasil ditambahkan!'); location.href=\"datamapel.php\" ;</script>";
    }
}
