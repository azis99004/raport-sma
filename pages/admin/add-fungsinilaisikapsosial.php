<?php
include '../koneksi.php';
if (isset($_POST['tambah'])) {
    $kode_guru = htmlspecialchars($_POST['kode_guru']);
    $id_siswa = htmlspecialchars($_POST['id_siswa']);
    $predikat = htmlspecialchars($_POST['predikat']);
    $deskripsi = htmlspecialchars($_POST['deskripsi']);

    $query = mysqli_query($conn, "INSERT into tb_sikap_sosial (kode_guru,id_siswa, predikat,deskripsi) values('$kode_guru','$id_siswa','$predikat','$deskripsi')");
    if ($query) {
        echo "<script> type='text/javascript'>alert('Data berhasil ditambahkan!'); location.href=\"datanilaisikapsosial.php\" ;</script>";
    }
}
