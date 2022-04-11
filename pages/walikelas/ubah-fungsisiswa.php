<?php
include '../koneksi.php';
if (isset($_POST['ubah'])) {
    $id = htmlspecialchars($_POST['id_siswa']);
    $kode_kelas =
        htmlspecialchars($_POST['kode_kelas']);

    $query = "UPDATE tb_siswa SET
				kode_kelas = '$kode_kelas'
                WHERE id_siswa = '$id'
				";
    mysqli_query($conn, $query);
    if ($query) {
        echo "<script> type='text/javascript'>alert('Data berhasil ditambahkan!'); location.href=\"halaman_walas.php\" ;</script>";
    }
}
