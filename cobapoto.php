<img class="img-profile rounded-circle" src="../../img/logoSMA.png" width="30" height="30">

SELECT * FROM tb_user inner join tb_siswa on tb_user.nisn = tb_siswa.id_siswa where username = 'azis01'

<?php
include "../koneksi.php";

$mapel = mysqli_query($conn, "SELECT * FROM tb_user inner join tb_siswa on tb_user.nisn = tb_siswa.id_siswa where username = '$_SESSION[username]'");
$result = mysqli_num_rows($mapel);
?>
<img class="img-profile rounded-circle" src="../../img/<?= $result["foto_siswa"]; ?>">