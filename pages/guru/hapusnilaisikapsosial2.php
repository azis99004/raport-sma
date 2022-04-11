<?php
session_start();
include "../koneksi.php";
if (!isset($_SESSION["guru"])) {
    header("Location: ../index.php");
    exit;
}
if (isset($_GET['id'])) {
    $deleteSql = mysqli_query($conn, "DELETE FROM tb_sikap_sosial WHERE kode_sikap_sosial='$_GET[id]'");
    if ($deleteSql) {
        echo "<script> type='text/javascript'>alert('Data berhasil dihapus!'); location.href=\"pilih-kelas.php\" ;</script>";
    }
}
