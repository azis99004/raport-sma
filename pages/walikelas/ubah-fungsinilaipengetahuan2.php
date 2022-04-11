<?php
include '../koneksi.php';
if (isset($_POST['ubah'])) {
    $id_nilai_mapel = htmlspecialchars($_POST['id_nilai_mapel']);
    $kode_guru = htmlspecialchars($_POST['kode_guru']);
    $id_siswa = htmlspecialchars($_POST['id_siswa']);
    $kode_mapel = htmlspecialchars($_POST['kode_mapel']);
    $nilai = htmlspecialchars($_POST['nilai']);
    $grade = htmlspecialchars($_POST['grade']);
    $deskripsi = htmlspecialchars($_POST['deskripsi']);

    $query = "UPDATE tb_nilai_mapel SET
				kode_guru = '$kode_guru',
				id_siswa = '$id_siswa',
                kode_mapel = '$kode_mapel',
                nilai = '$nilai',
                grade = '$grade',
				deskripsi = '$deskripsi'
                WHERE id_nilai_mapel = '$id_nilai_mapel'
				";

    mysqli_query($conn, $query);

    if ($query) {
        echo "<script> type='text/javascript'>alert('Data berhasil ditambahkan!'); location.href=\"datasiswa.php\" ;</script>";
    }
}
