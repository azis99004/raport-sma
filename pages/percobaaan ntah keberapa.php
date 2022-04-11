  <?php
    $t = mysqli_fetch_array(mysqli_query($conn, "SELECT * FROM tb_nilai_mapel inner join tb_tahun_akademik on tb_nilai_mapel.kode_tahun_akademik=tb_tahun_akademik.kode_tahun_akademik where id_siswa ='$_GET[id]'"));
    $s = mysqli_fetch_array(mysqli_query($conn, "SELECT * FROM tb_siswa inner join tb_kelas on tb_siswa.kode_kelas=tb_kelas.kode_kelas WHERE id_siswa='$_GET[id]'"));
    if (substr($_GET['tahun'], 4, 5) == '1') {
        $semester = 'Ganjil';
    } else {
        $semester = 'Genap';
    }
    $iden = mysqli_fetch_array(mysqli_query($conn, "SELECT * FROM tb_identitas_sekolah ORDER BY kode_identitas_sekolah DESC LIMIT 1"));
    echo "<table width=100%>
        <tr><td width=140px>Nama Sekolah</td> <td> : $iden[nama_sekolah] </td>       <td width=140px>Kelas </td>   <td>: $s[nama_kelas]</td></tr>
        <tr><td>Alamat</td>                   <td> : $iden[alamat_sekolah] </td>     <td>Semester </td> <td>: $semester</td></tr>
        <tr><td>Nama Peserta Didik</td>       <td> : <b>$s[nama_siswa]</b> </td>           <td>Tahun Pelajaran </td> <td>: $t[nama_tahun_akademik]</td></tr>
        <tr><td>No Induk/NISN</td>            <td> : $s[nisn]</td>        <td></td></tr>
      </table><br>";

      SELECT * FROM tb_nilai_raport join tb_siswa on tb_siswa.id_siswa=tb_nilai_raport.id_siswa join tb_kelompok_mata_pelajaran on tb_kelompok_mata_pelajaran.id_kel_mapel = tb_nilai_raport.id_kel_mapel join tb_nilai_mapel on tb_nilai_mapel.id_nilai_mapel=tb_nilai_raport.id_nilai_mapel join tb_nilai_keterampilan on tb_nilai_keterampilan.id_nilai_keterampilan=tb_nilai_raport.id_nilai_keterampilan join tb_mapel on tb_mapel.kode_mapel = tb_nilai_keterampilan.kode_mapel AND tb_mapel.kode_mapel = tb_nilai_mapel.kode_mapel where tb_siswa.id_siswa='$_GET[id]' GROUP BY tb_kelompok_mata_pelajaran.id_kel_mapel


      SELECT * FROM tb_nilai_raport join tb_siswa on tb_siswa.id_siswa=tb_nilai_raport.id_siswa join tb_nilai_mapel on tb_nilai_mapel.id_nilai_mapel=tb_nilai_raport.id_nilai_mapel join tb_nilai_keterampilan on tb_nilai_keterampilan.id_nilai_keterampilan=tb_nilai_raport.id_nilai_keterampilan join tb_mapel on tb_mapel.kode_mapel = tb_nilai_keterampilan.kode_mapel AND tb_mapel.kode_mapel = tb_nilai_mapel.kode_mapel where tb_siswa.id_siswa='$_GET[id]' AND tb_nilai_raport.id_kel_mapel='1' GROUP BY tb_nilai_raport.id_kel_mapel

      SELECT * FROM tb_nilai_mapel 
LEFT JOIN tb_mapel on tb_mapel.kode_mapel=tb_nilai_mapel.kode_mapel 
join tb_siswa on tb_siswa.id_siswa=tb_nilai_mapel.id_siswa WHERE tb_siswa.id_siswa = '$_GET[id]'