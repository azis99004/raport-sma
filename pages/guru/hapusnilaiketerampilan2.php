<?php
session_start();
include "../koneksi.php";
if (!isset($_SESSION["guru"])) {
    header("Location: ../index.php");
    exit;
}
if (isset($_GET['id'])) {
    $deleteSql = mysqli_query($conn, "DELETE FROM tb_nilai_keterampilan WHERE id_nilai_keterampilan='$_GET[id]'");
    if ($deleteSql) {
        echo "<script> type='text/javascript'>alert('Data berhasil dihapus!'); location.href=\"pilih-kelas.php\" ;</script>";
    }
}
