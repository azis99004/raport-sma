<?php
include '../koneksi.php';
if (isset($_POST['tambah'])) {
    $id_siswa = htmlspecialchars($_POST['id_siswa']);
    $kode_kelas = htmlspecialchars($_POST['kode_kelas']);

    $query = mysqli_query($conn, "INSERT into tb_kelassis (id_siswa, kode_kelas) values('$id_siswa','$kode_kelas')");
    if ($query) {
        echo "<script> type='text/javascript'>alert('Data berhasil ditambahkan!'); location.href=\"datakelassiswa.php\" ;</script>";
    }
}
