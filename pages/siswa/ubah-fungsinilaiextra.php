<?php
include '../koneksi.php';
if (isset($_POST['ubah'])) {
    $kode_nilai_extra = htmlspecialchars($_POST['kode_nilai_extra']);
    $kode_guru = htmlspecialchars($_POST['kode_guru']);
    $id_siswa = htmlspecialchars($_POST['id_siswa']);
    $nilai = htmlspecialchars($_POST['nilai']);
    $grade = htmlspecialchars($_POST['grade']);
    $deskripsi = htmlspecialchars($_POST['deskripsi']);

    $query = "UPDATE tb_extrakulikuler SET
				kode_guru = '$kode_guru',
				id_siswa = '$id_siswa',
				nilai = '$nilai',
                grade = '$grade',
                deskripsi = '$deskripsi'
                WHERE kode_nilai_extra = '$kode_nilai_extra'
				";
    mysqli_query($conn, $query);
    if ($query) {
        echo "<script> type='text/javascript'>alert('Data berhasil ditambahkan!'); location.href=\"dataextrakulikuler.php\" ;</script>";
    }
}
