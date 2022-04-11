<?php
session_start();
include "../koneksi.php";
if (!isset($_SESSION["username"])) {
    header("Location: ../index.php");
}
if (isset($_GET['id'])) {
    $deleteSql = mysqli_query($conn, "DELETE FROM tb_kelassis WHERE kode_kelassis='$_GET[id]'");
    if ($deleteSql) {
        echo "<script> type='text/javascript'>alert('Data berhasil dihapus!'); location.href=\"datakelassiswa.php\" ;</script>";
    }
}
