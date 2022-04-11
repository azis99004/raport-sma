<?php
include '../koneksi.php';
if (isset($_POST['ubah'])) {
    $id_nilai_harian = htmlspecialchars($_POST['id_nilai_harian']);
    $kode_mapel = htmlspecialchars($_POST['kode_mapel']);
    $kode_guru = htmlspecialchars($_POST['kode_guru']);
    $id_siswa = htmlspecialchars($_POST['id_siswa']);
    $nilai = htmlspecialchars($_POST['nilai']);
    $grade = htmlspecialchars($_POST['grade']);
    $deskripsi = htmlspecialchars($_POST['deskripsi']);

    $query = "UPDATE tb_nilai_harian SET
				kode_mapel = '$kode_mapel',
				kode_guru = '$kode_guru',
                id_siswa = '$id_siswa',
                nilai = '$nilai',
                grade = '$grade',
				deskripsi = '$deskripsi'
                WHERE id_nilai_harian = '$id_nilai_harian'
				";

    mysqli_query($conn, $query);

    if ($query) {
        echo "<script> type='text/javascript'>alert('Data berhasil ditambahkan!'); location.href=\"datanilaiharian.php\" ;</script>";
    }
}
