// $user = mysqli_query($conn, "SELECT * FROM tb_siswa inner join tb_walas on tb_siswa.kode_kelas=tb_walas.kode_kelas inner join tb_user on tb_user.kode_walas=tb_walas.kode_walas WHERE username = '$_SESSION[username]'");
// $result = mysqli_fetch_assoc($user);
// var_dump($user);

$guru = mysqli_query($conn, "SELECT * FROM tb_siswa where kode_kelas = 36");
$result = mysqli_fetch_assoc($guru);

"SELECT * FROM tb_siswa inner join tb_walas on tb_siswa.kode_kelas=tb_walas.kode_kelas inner join tb_user on tb_user.kode_walas=tb_walas.kode_walas WHERE username = '$_SESSION[username]'"

"SELECT * FROM tb_walas inner join tb_user on tb_user.kode_walas=tb_user.kode_walas right join tb_siswa on tb_siswa.kode_kelas=tb_siswa.id_siswa WHERE username = '$_SESSION[username]'"

add nilai mapel untuk walas
SELECT * FROM tb_user JOIN tb_walas ON tb_walas.kode_walas = tb_user.kode_walas join tb_guru on tb_walas.kode_guru = tb_guru.kode_guru where username = '$_SESSION[username]'"

SELECT * FROM tb_siswa inner join tb_walas on tb_siswa.kode_kelas=tb_walas.kode_kelas inner join tb_user on tb_user.kode_walas=tb_walas.kode_walas inner join tb_kelas on tb_siswa.kode_kelas = tb_kelas.kode_kelas where username = '$_SESSION[username]'"