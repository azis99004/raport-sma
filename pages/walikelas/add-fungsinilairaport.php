<?php
include '../koneksi.php';
if (isset($_POST['tambah'])) {
    $id_siswa = htmlspecialchars($_POST['id_siswa']);
    $id_nilai_mapel = htmlspecialchars($_POST['id_nilai_mapel']);
    $id_nilai_keterampilan = htmlspecialchars($_POST['id_nilai_keterampilan']);
    $nama_kel_mapel = htmlspecialchars($_POST['nama_kel_mapel']);
    $kode_tahun_akademik = htmlspecialchars($_POST['kode_tahun_akademik']);

    $query = mysqli_query($conn, "INSERT into tb_nilai_raport (id_siswa,id_nilai_mapel, id_nilai_keterampilan,nama_kel_mapel,kode_tahun_akademik) values('$id_siswa','$id_nilai_mapel','$id_nilai_keterampilan','$nama_kel_mapel','$kode_tahun_akademik')");
    if ($query) {
        echo "<script> type='text/javascript'>alert('Data berhasil ditambahkan!'); location.href=\"datasiswa.php\" ;</script>";
    }
}
