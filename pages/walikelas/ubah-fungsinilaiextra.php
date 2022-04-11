<?php
include '../koneksi.php';
if (isset($_POST['ubah'])) {
    $kode_nilai_extra = htmlspecialchars($_POST['kode_nilai_extra']);
    $id_siswa = htmlspecialchars($_POST['id_siswa']);
    $kegiatan_ekstrakulikuler = htmlspecialchars($_POST['kegiatan_ekstrakulikuler']);
    $predikat = htmlspecialchars($_POST['predikat']);
    $keterangan = htmlspecialchars($_POST['keterangan']);
    $kode_tahun_akademik = htmlspecialchars($_POST['kode_tahun_akademik']);

    $query = "UPDATE tb_extrakulikuler SET
				id_siswa = '$id_siswa',
				kegiatan_ekstrakulikuler = '$kegiatan_ekstrakulikuler',
                predikat = '$predikat',
                keterangan = '$keterangan',
                kode_tahun_akademik = '$kode_tahun_akademik'
                WHERE kode_nilai_extra = '$kode_nilai_extra'
				";
    mysqli_query($conn, $query);
    if ($query) {
        echo "<script> type='text/javascript'>alert('Data berhasil ditambahkan!'); location.href=\"datasiswa.php\" ;</script>";
    }
}
