<?php
session_start();
include "../koneksi.php";
if (!isset($_SESSION["username"])) {
    header("Location: ../index.php");
}
if (isset($_GET['id'])) {
    $deleteSql = mysqli_query($conn, "DELETE FROM tb_siswa WHERE id_siswa='$_GET[id]'");
    if ($deleteSql) {
        echo "<script> type='text/javascript'>alert('Data berhasil dihapus!'); location.href=\"datasiswa.php\" ;</script>";
    }
}
