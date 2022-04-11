<?php
session_start();
include "../koneksi.php";
if (!isset($_SESSION["walikelas"])) {
    header("Location: ../index.php");
    exit;
}
if (isset($_GET['id'])) {
    $deleteSql = mysqli_query($conn, "DELETE FROM tb_extrakulikuler WHERE kode_nilai_extra='$_GET[id]'");
    if ($deleteSql) {
        echo "<script> type='text/javascript'>alert('Data berhasil dihapus!'); location.href=\"datasiswa.php\" ;</script>";
    }
}
