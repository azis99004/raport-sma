<?php
include '../koneksi.php';
if (isset($_POST['ubah'])) {
    $id_nilai_keterampilan = htmlspecialchars($_POST['id_nilai_keterampilan']);
    $kode_mapel = htmlspecialchars($_POST['kode_mapel']);
    $kode_guru = htmlspecialchars($_POST['kode_guru']);
    $id_siswa = htmlspecialchars($_POST['id_siswa']);
    $nilai = htmlspecialchars($_POST['nilai_keterampilan']);
    $grade = htmlspecialchars($_POST['grade_keterampilan']);
    $deskripsi = htmlspecialchars($_POST['deskripsi_keterampilan']);
    $kode_tahun_akademik = htmlspecialchars($_POST['kode_tahun_akademik']);

    $query = "UPDATE tb_nilai_keterampilan SET
				kode_mapel = '$kode_mapel',
				kode_guru = '$kode_guru',
                id_siswa = '$id_siswa',
                nilai_keterampilan = '$nilai',
                grade_keterampilan = '$grade',
				deskripsi_keterampilan = '$deskripsi',
                kode_tahun_akademik = '$kode_tahun_akademik'
                WHERE id_nilai_keterampilan = '$id_nilai_keterampilan'
				";

    mysqli_query($conn, $query);

    if ($query) {
        echo "<script> type='text/javascript'>alert('Data berhasil ditambahkan!'); location.href=\"penilaianmapelketerampilan.php\" ;</script>";
    }
}
