<?php
session_start();
error_reporting(0);
include "../koneksi.php";
include "tgl_indo.php";
$skp = mysqli_fetch_array(mysqli_query($conn, "SELECT * FROM tb_sikap where id_siswa='$_GET[id]' AND kode_tahun_akademik='$_GET[tahun]'"));
$skp_sos = mysqli_fetch_array(mysqli_query($conn, "SELECT * FROM tb_sikap_sosial where id_siswa='$_GET[id]' AND kode_tahun_akademik='$_GET[tahun]'"));
?>
<html>

<head>
  <link href="../../img/logoSMA.png" rel="shortcut icon">
  <title>Raport Siswa</title>
  <link rel="stylesheet" href="../../dist/css/printer4.css">
</head>

<body onload="window.print()">
  <?php
  $t = mysqli_fetch_array(mysqli_query($conn, "SELECT * FROM tb_tahun_akademik where kode_tahun_akademik = '$_GET[tahun]'"));
  $s = mysqli_fetch_assoc(mysqli_query($conn, "SELECT * FROM tb_siswa inner join tb_kelas on tb_siswa.kode_kelas=tb_kelas.kode_kelas WHERE id_siswa='$_GET[id]'"));
  $keputusan = mysqli_fetch_assoc(mysqli_query($conn, "SELECT * FROM tb_keputusan_walas inner join tb_siswa on tb_keputusan_walas.id_siswa=tb_siswa.id_siswa join tb_tahun_akademik on tb_keputusan_walas.kode_tahun_akademik = tb_tahun_akademik.kode_tahun_akademik WHERE tb_siswa.id_siswa='$_GET[id]' AND tb_tahun_akademik.kode_tahun_akademik='$_GET[tahun]'"));
  if ($_GET['tahun'] % 2 == 1) {
    $semester = 'Ganjil';
  } else {
    $semester = 'Genap';
  }

  $iden = mysqli_fetch_array(mysqli_query($conn, "SELECT * FROM tb_identitas_sekolah ORDER BY kode_identitas_sekolah DESC LIMIT 1"));
  echo "<table width=100%>
        <tr><td width=140px>Nama Sekolah</td> <td> : SMA Mutiara Insan Nusantara</td><td width=140px>Semseter</td> <td>: $semester</td></tr>
        <tr><td>Nama Peserta Didik</td>       <td> : <b>$s[nama_siswa]</b> </td>           <td>Tahun Pelajaran </td> <td>: $t[nama_tahun_akademik]</td></tr>
        <tr><td>No Induk/NISN</td>            <td> : $s[nisn]</td>        <td></td></tr>
      </table><br>

      <h2 align=center>CAPAIAN HASIL BELAJAR</h2>
      <b>A. SIKAP</b><br><br>";
  echo "<b>1. Sikap Spiritual</b>
      <table id='tablemodul1' width=100% border=1>
          <tr>
            <th width='190px'>Predikat</th>
            <th>Deskripsi</th>
          </tr>
          <tr>
            <th style='padding:60px'>$skp[predikat]</th>
            <th>$skp[deskripsi]</th>
          </tr>
      </table><br/>";

  echo "<b>2. Sikap Sosial</b>
      <table id='tablemodul1' width=100% border=1>
          <tr>
            <th width='190px'>Predikat</th>
            <th>Deskripsi</th>
          </tr>
          <tr>
            <th style='padding:60px'>$skp_sos[predikat]</th>
            <th>$skp_sos[deskripsi]</th>
          </tr>
      </table><br/>";
  echo "<b>B. PENGETAHUAN DAN KETERAMPILAN</b><br><br>
   <table id='tablemodul1' width=100% border=1>
          <tr>
            <th width='160px' colspan='2' rowspan='2'>Mata Pelajaran</th>
            <th rowspan='2'>KKM</th>
            <th colspan='3' style='text-align:center'>Pengetahuan</th>
            <th colspan='3' style='text-align:center'>Keterampilan</th>
          </tr>
          <tr>
            <th>Nilai</th>
            <th>Predikat</th>
            <th>Deskripsi</th>
            <th>Nilai</th>
            <th>Predikat</th>
            <th>Deskripsi</th>
          </tr>"; {
    echo "<tr>
            <td colspan='9'><b>Kelompok Umum (A)</b></td>
          </tr>";
    $mapel = mysqli_query($conn, "SELECT * FROM tb_nilai_raport join tb_siswa on tb_siswa.id_siswa=tb_nilai_raport.id_siswa join tb_nilai_mapel on tb_nilai_mapel.id_nilai_mapel=tb_nilai_raport.id_nilai_mapel join tb_nilai_keterampilan on tb_nilai_keterampilan.id_nilai_keterampilan=tb_nilai_raport.id_nilai_keterampilan join tb_mapel on tb_mapel.kode_mapel = tb_nilai_keterampilan.kode_mapel AND tb_mapel.kode_mapel = tb_nilai_mapel.kode_mapel where tb_siswa.id_siswa='$_GET[id]' AND tb_nilai_raport.nama_kel_mapel='Kelompok Umum (A)'AND tb_nilai_raport.kode_tahun_akademik = '$_GET[tahun]'");
    $no = 1;
    while ($m = mysqli_fetch_array($mapel)) {
      echo "<tr>
                <td align=center>$no</td>
                <td>$m[nama_mapel]</td>
                <td align=center>75</td>
                <td align=center>$m[nilai_mapel]</td>
                <td align=center>$m[grade_mapel]</td>
                <td align=center>$m[deskripsi_mapel]</td>
                <td align=center>$m[nilai_keterampilan]</td>
                <td align=center>$m[grade_keterampilan]</td> 
                <td align=center>$m[deskripsi_keterampilan]</td>
            </tr>";
      $no++;
    }
    echo "<tr>
            <td colspan='9'><b>Kelompok Umum (B)</b></td>
          </tr>";
    $mapel2 = mysqli_query($conn, "SELECT * FROM tb_nilai_raport join tb_siswa on tb_siswa.id_siswa=tb_nilai_raport.id_siswa join tb_nilai_mapel on tb_nilai_mapel.id_nilai_mapel=tb_nilai_raport.id_nilai_mapel join tb_nilai_keterampilan on tb_nilai_keterampilan.id_nilai_keterampilan=tb_nilai_raport.id_nilai_keterampilan join tb_mapel on tb_mapel.kode_mapel = tb_nilai_keterampilan.kode_mapel AND tb_mapel.kode_mapel = tb_nilai_mapel.kode_mapel where tb_siswa.id_siswa='$_GET[id]' AND tb_nilai_raport.nama_kel_mapel='Kelompok Umum (B)'AND tb_nilai_raport.kode_tahun_akademik = '$_GET[tahun]'");
    $no = 1;
    while ($cm = mysqli_fetch_array($mapel2)) {
      echo "<tr>
                <td align=center>$no</td>
                <td>$cm[nama_mapel]</td>
                <td align=center>75</td>
                <td align=center>$cm[nilai_mapel]</td>
                <td align=center>$cm[grade_mapel]</td>
                <td align=center>$cm[deskripsi_mapel]</td>
                <td align=center>$cm[nilai_keterampilan]</td>
                <td align=center>$cm[grade_keterampilan]</td> 
                <td align=center>$cm[deskripsi_keterampilan]</td>
            </tr>";
      $no++;
    }
    echo "<tr>
            <td colspan='9'><b>Kelompok Umum (C)</b></td>
          </tr>";
    $mapel3 = mysqli_query($conn, "SELECT * FROM tb_nilai_raport join tb_siswa on tb_siswa.id_siswa=tb_nilai_raport.id_siswa join tb_nilai_mapel on tb_nilai_mapel.id_nilai_mapel=tb_nilai_raport.id_nilai_mapel join tb_nilai_keterampilan on tb_nilai_keterampilan.id_nilai_keterampilan=tb_nilai_raport.id_nilai_keterampilan join tb_mapel on tb_mapel.kode_mapel = tb_nilai_keterampilan.kode_mapel AND tb_mapel.kode_mapel = tb_nilai_mapel.kode_mapel where tb_siswa.id_siswa='$_GET[id]' AND tb_nilai_raport.nama_kel_mapel='Kelompok Umum (C)'AND tb_nilai_raport.kode_tahun_akademik = '$_GET[tahun]'");
    $no = 1;
    while ($dm = mysqli_fetch_array($mapel3)) {
      echo "<tr>
                <td align=center>$no</td>
                <td>$dm[nama_mapel]</td>
                <td align=center>75</td>
                <td align=center>$dm[nilai_mapel]</td>
                <td align=center>$dm[grade_mapel]</td>
                <td align=center>$dm[deskripsi_mapel]</td>
                <td align=center>$dm[nilai_keterampilan]</td>
                <td align=center>$dm[grade_keterampilan]</td> 
                <td align=center>$dm[deskripsi_keterampilan]</td>
            </tr>";
      $no++;
    }
    echo "<tr>
            <td colspan='9'><b>Lintas Minat (D)</b></td>
          </tr>";
    $mapel4 = mysqli_query($conn, "SELECT * FROM tb_nilai_raport join tb_siswa on tb_siswa.id_siswa=tb_nilai_raport.id_siswa join tb_nilai_mapel on tb_nilai_mapel.id_nilai_mapel=tb_nilai_raport.id_nilai_mapel join tb_nilai_keterampilan on tb_nilai_keterampilan.id_nilai_keterampilan=tb_nilai_raport.id_nilai_keterampilan join tb_mapel on tb_mapel.kode_mapel = tb_nilai_keterampilan.kode_mapel AND tb_mapel.kode_mapel = tb_nilai_mapel.kode_mapel where tb_siswa.id_siswa='$_GET[id]' AND tb_nilai_raport.nama_kel_mapel='Lintas Minat (D)'AND tb_nilai_raport.kode_tahun_akademik = '$_GET[tahun]'");
    $no = 1;
    while ($fm = mysqli_fetch_array($mapel4)) {
      echo "<tr>
                <td align=center>$no</td>
                <td>$fm[nama_mapel]</td>
                <td align=center>75</td>
                <td align=center>$fm[nilai_mapel]</td>
                <td align=center>$fm[grade_mapel]</td>
                <td align=center>$fm[deskripsi_mapel]</td>
                <td align=center>$fm[nilai_keterampilan]</td>
                <td align=center>$fm[grade_keterampilan]</td> 
                <td align=center>$fm[deskripsi_keterampilan]</td>
            </tr>";
      $no++;
    } {
      $jumlahnilai = mysqli_query($conn, "SELECT SUM(nilai_mapel) from tb_nilai_mapel WHERE id_siswa = '$_GET[id]'AND kode_tahun_akademik='$_GET[tahun]'");
      $resultjm = mysqli_fetch_array($jumlahnilai);
      $jumlahnilaiketerampilan = mysqli_query($conn, "SELECT SUM(nilai_keterampilan) from tb_nilai_keterampilan WHERE id_siswa = '$_GET[id]'AND kode_tahun_akademik='$_GET[tahun]'");
      $resultkm = mysqli_fetch_array($jumlahnilaiketerampilan);
      echo "<tr>
      <td></td>
            <td align=center colspan='1'>Jumlah Nilai</td>
            <td align=center></td>
            <td align=center><b>$resultjm[0]</b></td>
            <td></td>
            <td></td>
            <td align=center><b>$resultkm[0]</b></td>
            <td></td>
            <td></td>
          </tr>";
    } {
      $jumlahratamapel = mysqli_query($conn, "SELECT Round(AVG(nilai_mapel)) from tb_nilai_mapel WHERE id_siswa = '$_GET[id]'AND kode_tahun_akademik='$_GET[tahun]'");
      $resultrm = mysqli_fetch_array($jumlahratamapel);
      // var_dump($resultrm);
      $jumlahrataketerampilan = mysqli_query($conn, "SELECT Round(AVG(nilai_keterampilan)) from tb_nilai_keterampilan WHERE id_siswa = '$_GET[id]'AND kode_tahun_akademik='$_GET[tahun]'");
      $resultkm = mysqli_fetch_array($jumlahrataketerampilan);
      // var_dump($resultkm);
      echo "<tr>
      <td></td>
            <td align=center colspan='1'>Rata-Rata</td>
            <td align=center></td>
            <td align=center><b>$resultrm[0]</b></td>
            <td></td>
            <td></td>
            <td align=center><b>$resultkm[0]</b></td>
            <td></td>
            <td></td>
          </tr>";
    }
  }
  echo "<center><table width='90%' border=1 id='tablemodul1'>
          </table></center><br>";
  echo "<b>C. Extrakulikuler</b>
      <table id='tablemodul1' width=100% border=1>
          <tr>
            <th width='40px'>No</th>
            <th width='30%'>Kegiatan Extrakulikuler</th>
            <th>Nilai</th>
            <th>Deskripsi</th>
          </tr>";


  $extra = mysqli_query($conn, "SELECT * FROM tb_extrakulikuler where id_siswa ='$_GET[id]' AND kode_tahun_akademik='$_GET[tahun]'");
  $no = 1;
  while ($ex = mysqli_fetch_array($extra)) {
    echo "<tr>
                    <td>$no</td>
                    <td>$ex[kegiatan_ekstrakulikuler]</td>
                    <td>$ex[predikat]</td>
                    <td>$ex[keterangan]</td>
                  </tr>";
    $no++;
  }
  echo "</table>";
  echo "<b>D. Prestasi</b>
      <table id='tablemodul1' width=100% border=1>
          <tr>
            <th width='40px'>No</th>
            <th width='30%'>Jenis Kegiatan</th>
            <th>Keterangan</th>
          </tr>";

  $prestasi = mysqli_query($conn, "SELECT * FROM tb_extrakulikuler where id_siswa ='$_GET[id]' AND kode_tahun_akademik='$_GET[tahun]'");
  $no = 1;
  while ($prestasi = mysqli_fetch_array($prestasi)) {
    echo "<tr>
                    <td>$no</td>
                    <td>$ex[kegiatan_ekstrakulikuler]</td>
                    <td>$ex[predikat]</td>
                  </tr>";
    $no++;
  }
  echo "</table>";
  echo "</table>";
  $absen = mysqli_query($conn, "SELECT * FROM tb_absen_total where id_siswa='$_GET[id]' AND kode_tahun_akademik = '$_GET[tahun]'");
  $result = mysqli_fetch_assoc($absen);
  echo "<b>E. Ketidakhadiran</b>
      <table id='tablemodul1' width=85% border=1>
        <tr><td width='70%'>Sakit</td>  <td width='10px'> : </td> <td align=center>$result[sakit]</td> </tr>
        <tr><td>Izin</td>               <td> : </td>              <td align=center>$result[izin]</td> </tr>
        <tr><td>Tanpa Keterangan</td>   <td> : </td>              <td align=center>$result[tanpa_keterangan]</td> </tr>
      </table>";
  echo "</table>";
  echo "<b>F. Catatan Wali Kelas</b>
      <table id='tablemodul1' width=100% height=80px border=1>
        <tr><td></td></tr>
      </table>";

  echo "<b>G. Tanggapan Orang tua / Wali</b>
      <table id='tablemodul1' width=100% height=80px border=1>
        <tr><td></td></tr>
      </table><br/>";
  if ($semester == 'Genap') {
    echo "<b>Keputusan : </b>
      <table id='tablemodul1' width=100% height=80px border=1>
        <tr><td><b>$keputusan[keputusan]</b></td></tr>
      </table><br/>";
  }
  ?>
  <table border=0 width=100%>
    <tr>
      <td width="260" align="center"><br><br>Orang Tua / Wali</td>
      <td width="520" align="center"><br>Mengetahui <br> Kepala SMA Mutiara Insan Nusantara</td>
      <td width="260" align="center"><br>Tangerang, <?php echo tgl_indo(date("Y-m-d")); ?> <br> Wali Kelas</td>
    </tr>
    <tr>
      <td align="center"><br /><br /><br /><br /><br>
        (...................................) <br /><br /></td>

      <td align="center" valign="top"><br /><br /><br /><br /><br />
        <b>Ricky Firmansyah<br>
      </td>

      <td align="center" valign="top"><br /><br /><br /><br /><br />
        <b><?php echo $walas['nama_guru']; ?><br />
      </td>
    </tr>
  </table>
  <!-- Footer -->
  <footer class="footer">
    <p align="left" valign="bottom">SMA Mutiara Insan Nusantara</p>
  </footer>
</body>

</html>