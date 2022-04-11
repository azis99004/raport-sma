<?php
include '../koneksi.php';
if (isset($_POST['tambah'])) {
    $kode_guru = htmlspecialchars($_POST['kode_guru']);
    $id_siswa = htmlspecialchars($_POST['id_siswa']);
    $kode_mapel = htmlspecialchars($_POST['kode_mapel']);
    $nilai = htmlspecialchars($_POST['nilai_keterampilan']);
    $grade = htmlspecialchars($_POST['grade_keterampilan']);
    $deskripsi = htmlspecialchars($_POST['deskripsi_keterampilan']);
    $kode_tahun_akademik = htmlspecialchars($_POST['kode_tahun_akademik']);

    $query = mysqli_query($conn, "INSERT into tb_nilai_keterampilan (kode_guru,id_siswa, kode_mapel,nilai_keterampilan, grade_keterampilan, deskripsi_keterampilan, kode_tahun_akademik) values('$kode_guru','$id_siswa','$kode_mapel','$nilai','$grade','$deskripsi','$kode_tahun_akademik')");
    if ($query) {
        echo "<script> type='text/javascript'>alert('Data berhasil ditambahkan!'); location.href=\"pilih-kelas.php\" ;</script>";
    }
}
