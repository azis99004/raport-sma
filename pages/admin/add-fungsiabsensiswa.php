<?php
include '../koneksi.php';
if (isset($_POST['tambah'])) {
    date_default_timezone_set("Asia/Jakarta");
    $id_siswa = htmlspecialchars($_POST['id_siswa']);
    $kode_guru = htmlspecialchars($_POST['kode_guru']);
    $kehadiran = htmlspecialchars($_POST['kehadiran']);
    $deskripsi = htmlspecialchars($_POST['deskripsi']);
    $date = date('Y-m-d H:i:s');

    $query = mysqli_query($conn, "INSERT into tb_absen (tgl_absen, id_siswa, kode_guru,kehadiran, deskripsi) values('$date','$id_siswa','$kode_guru','$kehadiran','$deskripsi')");
    if ($query) {
        echo "<script> type='text/javascript'>alert('Data berhasil ditambahkan!'); location.href=\"absensiswa.php\" ;</script>";
    }
}
