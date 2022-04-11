<?php
include '../koneksi.php';
if (isset($_POST['ubah'])) {
    $kode_identitas_sekolah = htmlspecialchars($_POST['kode_identitas_sekolah']);
    $nama_sekolah = htmlspecialchars($_POST['nama_sekolah']);
    $npsn = htmlspecialchars($_POST['npsn']);
    $nss = htmlspecialchars($_POST['nss']);
    $alamat_sekolah = htmlspecialchars($_POST['alamat_sekolah']);
    $kode_pos = htmlspecialchars($_POST['kode_pos']);
    $no_telpon = htmlspecialchars($_POST['no_telpon']);
    $kelurahan = htmlspecialchars($_POST['kelurahan']);
    $kecamatan = htmlspecialchars($_POST['kecamatan']);
    $kabupaten_kota = htmlspecialchars($_POST['kabupaten_kota']);
    $provinsi = htmlspecialchars($_POST['provinsi']);
    $website = htmlspecialchars($_POST['website']);
    $email = htmlspecialchars($_POST['email']);

    $query = "UPDATE tb_identitas_sekolah SET
				kode_identitas_sekolah = '$kode_identitas_sekolah',
				nama_sekolah = '$nama_sekolah',
				npsn = '$npsn',
                nss = '$nss',
                alamat_sekolah = '$alamat_sekolah',
                kode_pos = '$kode_pos',
                no_telpon = '$no_telpon',
                kelurahan = '$kelurahan',
                kecamatan = '$kecamatan',
                kabupaten_kota = '$kabupaten_kota',
                provinsi = '$provinsi',
                website = '$website',
                email = '$email'
                WHERE kode_identitas_sekolah = '$kode_identitas_sekolah'
				";
    mysqli_query($conn, $query);
    if ($query) {
        echo "<script> type='text/javascript'>alert('Data berhasil ditambahkan!'); location.href=\"identitassekolah.php\" ;</script>";
    }
}
