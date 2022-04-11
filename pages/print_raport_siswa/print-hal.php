<?php
session_start();
error_reporting(0);
include "../koneksi.php";
$siswa = mysqli_fetch_array(mysqli_query($conn, "SELECT * FROM tb_siswa where id_siswa='$_GET[id]'"));
?>
<html>

<head>
    <link href="../../img/logoSMA.png" rel="shortcut icon">
    <title>Cover Raport Siswa</title>
    <link rel="stylesheet" href="../../dist/css/printer2.css">
</head>

<body onload="window.print()">
    <h1 align=center>RAPORT SISWA <br>SEKOLAH MENENGAH ATAS <br> (SMA)</h1>
    <center>
        <img width='170px' src='logoSMA.png'><br><br><br><br><br><br><br><br>
        Nama Siswa :<br>
        <h3 style='border:1px solid #000; width:82%; padding:6px'><?php echo $siswa['nama_siswa']; ?></h3><br><br>

        NISN : <br>
        <h3 style='border:1px solid #000; width:82%; padding:3px'><?php echo $siswa['nisn']; ?></h3><br><br><br><br><br><br>

        <p style='font-size:22px'>KEMENTERIAN PENDIDIKAN DAN KEBUDAYAAN <br>REPUBLIK INDONESIA</p>
    </center>
</body>

</html>