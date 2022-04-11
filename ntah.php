<?php
include "pages/koneksi.php";
$sql = mysqli_query($conn, "SELECT SUM(nilai_mapel) from tb_nilai_mapel");
$stmt = $pdo->prepare($sql);
$stmt->execute();

echo '<table>
		<thead>
			<tr>
				<td>ID PELANGGAN</td>
				<td>ID PRODUK</td>
				<td>TOTAL</td>
			</tr>
		</thead>
		<tbody>';
$total = 0;
while ($row = $stmt->fetch()) {
    echo '<tr>
			<td>' . $row['id_pelanggan'] . '</td>
			<td>' . $row['id_produk'] . '</td>
			<td>' . number_format($row['total'], 0, ',', '.') . '</td>
		</tr>';
    $total += $row['total'];
}
echo '<tr>
		<td colspan="2">TOTAL</td>
		<td>' . number_format($total, 0, ',', '.') . '</td>
	 </tr>
	</tbody>
</table>';

$kelas = mysqli_query($conn, "SELECT * FROM tb_kelas");

$siswa = mysqli_query($conn, "SELECT * FROM tb_siswa where kode_kelas = '$_GET[kelas]'");

<!-- pencarian berdasar kelas -->
                            <form action="datasiswa.php" method="get">
                                <div class="col-md-3 mb-3">
                                    <div class="form-group">
                                        <label for="kelas">Kelas</label>
                                        <select name="kelas" id="" class="form-control">
                                            <option value="" readonly>Pilih</option>
                                            <?php foreach ($kelas as $row) : ?>
                                                <option value="<?= $row["kode_kelas"] ?>"><?= $row["nama_kelas"] ?></option>
                                            <?php endforeach; ?>
                                        </select>
                                    </div>
                                    <button type="submit" class="btn btn-primary">Search</button>
                                </div>
                            </form>

                            <div class="table-responsive">
                                <?php foreach ($siswa as $row) : ?>
								<?php endforeach;?>
folder guru (test 1);
SELECT * FROM tb_kelas inner join tb_guru on tb_guru.kode_guru = tb_guru.kode_guru inner join tb_user on tb_user.kode_guru=tb_guru.kode_guru where username = '$_SESSION[username]'"

SELECT * FROM tb_kelas inner join tb_jadwal_mapel on tb_jadwal_mapel.kode_kelas = tb_kelas.kode_kelas inner join tb_guru on tb_jadwal_mapel.kode_guru=tb_guru.kode_guru inner join tb_user on tb_user.kode_guru=tb_guru.kode_guru

SELECT * FROM tb_kelas inner join tb_jadwal_mapel on tb_jadwal_mapel.kode_kelas = tb_kelas.kode_kelas inner join tb_guru on tb_jadwal_mapel.kode_guru=tb_guru.kode_guru inner join tb_user on tb_user.kode_guru=tb_guru.kode_guru

$absen = mysqli_query($conn, "SELECT kehadiran, COUNT(kehadiran) AS jumlah FROM tb_absen WHERE id_siswa = '$_GET[id]' AND kode_tahun_akademik = '$_GET[tahun]' GROUP BY kehadiran");
  $result = mysqli_fetch_assoc($absen);
  var_dump($absen);
  echo "<b>D. Ketidakhadiran</b>
      <table id='tablemodul1' width=85% border=1>
        <tr><td width='70%'>Sakit</td>  <td width='10px'> : </td> <td align=center>$result[jumlah]</td> </tr>
        <tr><td>Izin</td>               <td> : </td>              <td align=center>0</td> </tr>
        <tr><td>Tanpa Keterangan</td>   <td> : </td>              <td align=center>0</td> </tr>
      </table>";
  echo "</table>";

  SELECT kehadiran, COUNT(kehadiran) AS jumlah FROM tb_absen WHERE id_siswa = '$_GET[id]' AND kode_tahun_akademik = '$_GET[tahun]' GROUP BY kehadiran ORDER BY 'Izin'

  echo "</table>";
  $sakit = mysqli_query($conn, "SELECT kehadiran, SUM(kehadiran) AS jumlah FROM tb_absen WHERE id_siswa = '$_GET[id]' AND kode_tahun_akademik = '$_GET[tahun]' GROUP BY kehadiran ORDER BY 'Sakit'");
  $resultsakit = mysqli_fetch_array($sakit);
  var_dump($absen);
  $izin = mysqli_query($conn, "SELECT kehadiran, SUM(kehadiran) AS jumlah FROM tb_absen WHERE id_siswa = '$_GET[id]' AND kode_tahun_akademik = '$_GET[tahun]' GROUP BY kehadiran ");
  $resultizin = mysqli_fetch_array($izin);
  var_dump($absen);
  echo "<b>D. Ketidakhadiran</b>
      <table id='tablemodul1' width=85% border=1>
        <tr><td width='70%'>Sakit</td>  <td width='10px'> : </td> <td align=center>$resultsakit[jumlah]</td> </tr>
        <tr><td>Izin</td>               <td> : </td>              <td align=center>$resultizin[jumlah]</td> </tr>
        <tr><td>Tanpa Keterangan</td>   <td> : </td>              <td align=center>$result[jumlah]$result[Sakit]</td> </tr>
      </table>";
  echo "</table>";

  $iden = mysqli_fetch_array(mysqli_query($conn, "SELECT * FROM tb_identitas_sekolah ORDER BY kode_identitas_sekolah DESC LIMIT 1"));
  echo "<table width=100%>
        <tr><td width=140px>Nama Sekolah</td> <td> : $iden[nama_sekolah] </td>       <td width=140px>Kelas </td>   <td>: $s[nama_kelas]</td></tr>
        <tr><td>Alamat</td>                   <td> : $iden[alamat_sekolah] </td>     <td>Semester </td> <td>: $semester</td></tr>
        <tr><td>Nama Peserta Didik</td>       <td> : <b>$s[nama_siswa]</b> </td>           <td>Tahun Pelajaran </td> <td>: $t[nama_tahun_akademik]</td></tr>
        <tr><td>No Induk/NISN</td>            <td> : $s[nisn]</td>        <td></td></tr>
      </table><br>";

      SELECT kehadiran, COUNT(kehadiran) AS jumlah FROM tb_absen WHERE tb_absen.kehadiran = 'Sakit' AND id_siswa = '1' AND kode_tahun_akademik = '1' GROUP BY kehadiran ORDER BY = 'Izin'

      echo "</table>";
  $absen = mysqli_query($conn, "SELECT * FROM tb_absen_total where id_siswa='$_GET[id]' AND kode_tahun_akademik = '$_GET[tahun]'");
  $result = mysqli_fetch_assoc($absen);
  echo "<b>D. Ketidakhadiran</b>
      <table id='tablemodul1' width=85% border=1>
        <tr><td width='70%'>Sakit</td>  <td width='10px'> : </td> <td align=center>$result[sakit]</td> </tr>
        <tr><td>Izin</td>               <td> : </td>              <td align=center>$result[izin]</td> </tr>
        <tr><td>Tanpa Keterangan</td>   <td> : </td>              <td align=center>$result[tanpa_keterangan]</td> </tr>
      </table>";
  echo "</table>";

  if ($resultsakit['jumlah'] == !false)
    if ($resultizin['jumlah'] == !false)
      if ($resulttpk['jumlah'] == false) {

      }

      if (empty($resultsakit)) {
    echo "0";
  }

  print raport walas
  SELECT * FROM tb_siswa inner join tb_walas on tb_siswa.kode_kelas=tb_walas.kode_kelas inner join tb_user on tb_user.kode_walas=tb_walas.kode_walas inner join tb_kelas on tb_siswa.kode_kelas = tb_kelas.kode_kelas where username = '$_SESSION[username]'

  dashboard admin
  <!-- Nav Item - Utilities Collapse Menu -->
            <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseUtilities" aria-expanded="true" aria-controls="collapseUtilities">
                    <i class="fas fa-fw fa-wrench"></i>
                    <span>Data Akademik</span>
                </a>
                <div id="collapseUtilities" class="collapse" aria-labelledby="headingUtilities" data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <h6 class="collapse-header">Data Raport:</h6>
                        <a class="collapse-item" href="penilaianmapel.php">Penilaian Pengetahuan</a>
                        <a class="collapse-item" href="penilaianmapelketerampilan.php">Penilaian Keterampilan</a>
                        <a class="collapse-item" href="dataextrakulikuler.php">Penilaian Extrakulikuler</a>
                        <a class="collapse-item" href="datanilaisikap.php">Penilaian Sikap Spiritual</a>
                        <a class="collapse-item" href="datanilaisikapsosial.php">Penilaian Sikap Sosial</a>
                        <a class="collapse-item" href="datanilaiharian.php">Penilaian Ujian Harian</a>
                        <a class="collapse-item" href="datanilaiuts.php">Penilaian UTS</a>
                        <a class="collapse-item" href="datanilaiuas.php">Penilaian UAS</a>
                    </div>
                </div>
            </li>

            <!-- Nav Item - Pages Collapse Menu -->
            <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapsePages" aria-expanded="true" aria-controls="collapsePages">
                    <i class="fas fa-fw fa-book"></i>
                    <span>Absensi</span>
                </a>
                <div id="collapsePages" class="collapse" aria-labelledby="headingPages" data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <h6 class="collapse-header">Absensi:</h6>
                        <a class="collapse-item" href="absensiswa.php">Absensi Siswa</a>
                    </div>
                </div>
            </li>
        </ul>