<?php
include '../koneksi.php';
if (isset($_POST['ubah'])) {
    $id_user = htmlspecialchars($_POST['id_user']);
    $password = md5($_POST['password']);
    $password2 = md5($_POST['password2']);
    if ($password != $password2) {
        echo "<script>alert('Retype Password harus sama dengan Password !');
window.location.href='datauser.php';</script>";
        exit;
    }
    $cek = mysqli_num_rows(mysqli_query($conn, "SELECT * FROM tb_user where id_user='$id_user'"));
    $query = "UPDATE tb_user SET
                password = '$password'
                WHERE id_user = '$id_user'
				";
    mysqli_query($conn, $query);
    if ($query) {
        echo "<script>alert('Ganti Password Sukses !');
window.location.href='datauser.php';</script>";
    } else {
        echo "<script>alert('Ganti Password gagal !');
window.location.href='datauser.php';</script>";
    }
}
