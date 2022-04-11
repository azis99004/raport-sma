<?php
session_start();
include "../koneksi.php";
if (!isset($_SESSION["username"])) {
    header("Location: ../index.php");
}
if (isset($_GET['id'])) {
    $deleteSql = mysqli_query($conn, "DELETE FROM tb_nilai_uas WHERE id_nilai_uas='$_GET[id]'");
    if ($deleteSql) {
        echo "<script> type='text/javascript'>alert('Data berhasil dihapus!'); location.href=\"datanilaiuas.php\" ;</script>";
    }
}
