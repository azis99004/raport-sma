<?php
include '../koneksi.php';
if (isset($_POST['ubah'])) {
    $kode_sikap = htmlspecialchars($_POST['kode_sikap']);
    $kode_guru = htmlspecialchars($_POST['kode_guru']);
    $id_siswa = htmlspecialchars($_POST['id_siswa']);
    $predikat = htmlspecialchars($_POST['predikat']);
    $deskripsi = htmlspecialchars($_POST['deskripsi']);
    $kode_tahun_akademik = htmlspecialchars($_POST['kode_tahun_akademik']);

    $query = "UPDATE tb_sikap SET
                kode_guru = '$kode_guru',
				id_siswa = '$id_siswa',
                predikat = '$predikat',
                deskripsi = '$deskripsi',
                kode_tahun_akademik = '$kode_tahun_akademik'
                WHERE kode_sikap = '$kode_sikap'
				";
    mysqli_query($conn, $query);
    if ($query) {
        echo "<script> type='text/javascript'>alert('Data berhasil ditambahkan!'); location.href=\"halaman_guru.php\" ;</script>";
    }
}
