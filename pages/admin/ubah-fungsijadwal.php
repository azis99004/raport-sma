<?php
include '../koneksi.php';
if (isset($_POST['ubah'])) {
    $kode_jadwal = htmlspecialchars($_POST['kode_jadwal']);
    $kode_kelas = htmlspecialchars($_POST['kode_kelas']);
    $kode_mapel = htmlspecialchars($_POST['kode_mapel']);
    $kode_guru = htmlspecialchars($_POST['kode_guru']);
    $jam_mulai = htmlspecialchars($_POST['jam_mulai']);
    $jam_selesai = htmlspecialchars($_POST['jam_selesai']);
    $hari = htmlspecialchars($_POST['hari']);

    $query = "UPDATE tb_jadwal_mapel SET
				kode_kelas = '$kode_kelas',
				kode_mapel = '$kode_mapel',
                kode_guru = '$kode_guru',
                jam_mulai = '$jam_mulai',
                jam_selesai = '$jam_selesai',
				hari = '$hari'
                WHERE kode_jadwal = '$kode_jadwal'
				";

    mysqli_query($conn, $query);

    if ($query) {
        echo "<script> type='text/javascript'>alert('Data berhasil ditambahkan!'); location.href=\"jadwalmapel.php\" ;</script>";
    }
}
