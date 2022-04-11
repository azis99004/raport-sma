<?php
include "koneksi.php";

// $query = mysqli_query($conn, "SELECT * FROM tb_siswa");
// $result = mysqli_fetch_assoc($query);
// // var_dump($result);


// $fery = mysqli_query($conn, "SELECT nama_mapel, nama_guru,nip,alamat_guru,telp_guru FROM tb_guru INNER JOIN tb_mapel ON tb_guru.kode_guru = tb_mapel.kode_mapel");
// $result = mysqli_fetch_assoc($fery);
date_default_timezone_set("Asia/Jakarta");
$date = date('Y-m-d H:i:s');
echo "$date";

(query guru)
"SELECT * FROM tb_siswa inner join tb_jadwal_mapel on tb_siswa.kode_kelas=tb_jadwal_mapel.kode_kelas inner join tb_guru on tb_jadwal_mapel.kode_guru=tb_guru.kode_guru inner join tb_user on tb_user.kode_guru=tb_guru.kode_guru inner join tb_kelas on tb_siswa.kode_kelas = tb_kelas.kode_kelas where username = '$_SESSION[username]'"

"SELECT * FROM tb_jadwal_mapel inner join tb_guru on tb_jadwal_mapel.kode_guru=tb_guru.kode_guru inner join tb_mapel on tb_jadwal_mapel.kode_mapel=tb_mapel.kode_mapel join tb_user on tb_user.kode_guru=tb_guru.kode_guru WHERE username='$_SESSION[username]'"

SELECT * FROM tb_sikap inner join tb_tahun_akademik on tb_sikap.kode_tahun_akademik=tb_tahun_akademik.kode_tahun_akademik where id_siswa

SELECT * FROM tb_nilai_raport join tb_siswa on tb_siswa.id_siswa=tb_nilai_raport.id_siswa join tb_nilai_mapel on tb_nilai_mapel.id_nilai_mapel=tb_nilai_raport.id_nilai_mapel join tb_nilai_keterampilan on tb_nilai_keterampilan.id_nilai_keterampilan=tb_nilai_raport.id_nilai_keterampilan left join tb_mapel on tb_mapel.kode_mapel = tb_mapel.kode_mapel where tb_siswa.id_siswa