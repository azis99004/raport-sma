<?php
include '../koneksi.php';
if (isset($_POST['ubah'])) {
    $kode_kelas = htmlspecialchars($_POST['kode_kelas']);
    $kode_ruangan = htmlspecialchars($_POST['kode_ruangan']);
    $query = "UPDATE tb_kelas SET
				kode_kelas = '$kode_kelas',
                kode_ruangan = '$kode_ruangan'
                WHERE kode_kelas = '$kode_kelas'
				";

    mysqli_query($conn, $query);

    if ($query) {
        echo "<script> type='text/javascript'>alert('Data berhasil ditambahkan!'); location.href=\"datakelas.php\" ;</script>";
    }
}
