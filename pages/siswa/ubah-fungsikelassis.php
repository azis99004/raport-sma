<?php
include '../koneksi.php';
if (isset($_POST['ubah'])) {
    $kode_kelassis = htmlspecialchars($_POST['kode_kelassis']);
    $id_siswa = htmlspecialchars($_POST['id_siswa']);
    $kode_kelas = htmlspecialchars($_POST['kode_kelas']);

    $query = "UPDATE tb_kelassis SET
				id_siswa = '$id_siswa',
				kode_kelas = '$kode_kelas'
                WHERE kode_kelassis = '$kode_kelassis'
				";
    mysqli_query($conn, $query);
    if ($query) {
        echo "<script> type='text/javascript'>alert('Data berhasil diubah'); location.href=\"datakelassiswa.php\" ;</script>";
    }
}
