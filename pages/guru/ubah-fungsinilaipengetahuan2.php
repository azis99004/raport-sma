<?php
include '../koneksi.php';
if (isset($_POST['ubah'])) {
    $id_nilai_mapel = htmlspecialchars($_POST['id_nilai_mapel']);
    $kode_guru = htmlspecialchars($_POST['kode_guru']);
    $id_siswa = htmlspecialchars($_POST['id_siswa']);
    $kode_mapel = htmlspecialchars($_POST['kode_mapel']);
    $nilai = htmlspecialchars($_POST['nilai_mapel']);
    $grade = htmlspecialchars($_POST['grade_mapel']);
    $deskripsi = htmlspecialchars($_POST['deskripsi_mapel']);
    $kode_tahun_akademik = htmlspecialchars($_POST['kode_tahun_akademik']);

    $query = "UPDATE tb_nilai_mapel SET
				kode_guru = '$kode_guru',
				id_siswa = '$id_siswa',
                kode_mapel = '$kode_mapel',
                nilai_mapel = '$nilai',
                grade_mapel = '$grade',
				deskripsi_mapel = '$deskripsi',
                kode_tahun_akademik = '$kode_tahun_akademik'
                WHERE id_nilai_mapel = '$id_nilai_mapel'
				";

    mysqli_query($conn, $query);

    if ($query) {
        echo "<script> type='text/javascript'>alert('Data berhasil ditambahkan!'); location.href=\"pilih-kelas.php\" ;</script>";
    }
}
