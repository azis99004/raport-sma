<?php

include "../koneksi.php";
$query = mysqli_query($conn, "SELECT * FROM tb_siswa where kode_kelas = $_GET[kelas]");
$result = mysqli_fetch_assoc($query);
var_dump($query);
header("Location: datasiswa.php");
