<?php
include '../koneksi.php';
if (isset($_POST['ubah'])) {
    $kode_sikap_sosial = htmlspecialchars($_POST['kode_sikap_sosial']);
    $id_siswa = htmlspecialchars($_POST['id_siswa']);
    $predikat = htmlspecialchars($_POST['predikat']);
    $deskripsi = htmlspecialchars($_POST['deskripsi']);

    $query = "UPDATE tb_sikap_sosial SET
				id_siswa = '$id_siswa',
                predikat = '$predikat',
                deskripsi = '$deskripsi'
                WHERE kode_sikap_sosial = '$kode_sikap_sosial'
				";
    mysqli_query($conn, $query);
    if ($query) {
        echo "<script> type='text/javascript'>alert('Data berhasil ditambahkan!'); location.href=\"datasiswa.php\" ;</script>";
    }
}
