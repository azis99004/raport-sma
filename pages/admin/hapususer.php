<?php
session_start();
include "../koneksi.php";
if (!isset($_SESSION["admin"])) {
    header("Location: ../index.php");
    exit;
}
if (isset($_GET['id'])) {
    $deleteSql = mysqli_query($conn, "DELETE FROM tb_user WHERE id_user='$_GET[id]'");
    if ($deleteSql) {
        echo "<script> type='text/javascript'>alert('Data berhasil dihapus!'); location.href=\"datauser.php\" ;</script>";
    }
}
