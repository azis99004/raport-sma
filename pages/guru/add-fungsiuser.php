<?php
include '../koneksi.php';
$id_siswa = $_POST['id_siswa'];
$nama = $_POST['nama'];
$password = md5($_POST['password']);
$password2 = md5($_POST['password2']);
$level = $_POST['level'];
if ($password != $password2) {
    echo "<script>alert('Retype Password harus sama dengan Password !');
window.location.href='datauser.php';</script>";
    exit;
}
$cek = mysqli_num_rows(mysqli_query($conn, "SELECT * FROM tb_user where id_siswa='$id_siswa'"));
if ($cek > 0) {
    echo "<script>alert('MAAF USER SUDAH TERDAFTAR !');
window.location.href='datauser.php';</script>";
} else {
    //PASSWORD KUDU DI ISI JEUNG SAJABANA
    if (empty($nama)) {
        die("<script> alert(' KOLOM USERNAME TIDAK BOLEH ADA YANG KOSONG !!!!!!');	 javascript:history.go(-1); </script>"); //Berhenti dan munculkan pesan jika nim tidak diisi
    } {
        $query = mysqli_query($conn, "INSERT INTO tb_user (username,password,level,id_siswa)values('$nama','$password','$level','$id_siswa');");
        if ($query) {
            echo "<script>alert('Tambah UserLogin Sukses !');
window.location.href='datauser.php';</script>";
        } else {
            echo "<script>alert('Tambah UserLogin gagal !');
window.location.href='datauser.php';</script>";
        }
    }
}
