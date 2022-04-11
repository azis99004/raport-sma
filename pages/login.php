<?php
include 'koneksi.php';
session_start();
if (isset($_POST['login'])) {
	$username = $_POST['username'];
	$password = mysqli_real_escape_string($conn, md5($_POST['password']));

	$result = mysqli_query($conn, "SELECT * FROM tb_user WHERE username='$username' AND password='$password'");
	$cek = mysqli_num_rows($result);

	if ($cek > 0) {
		$data = mysqli_fetch_assoc($result);

		if ($data['level'] == "admin") {
			$_SESSION['username'] = $username;
			$_SESSION['level'] = "admin";
			$_SESSION['admin'] = $username;
			header("Location: admin/halaman_admin.php");
		} elseif ($data['level'] == "walikelas") {
			$_SESSION['username'] = $username;
			$_SESSION['level'] = "walikelas";
			$_SESSION['walikelas'] = $username;
			header("Location: walikelas/halaman_walas.php");
		} elseif ($data['level'] == "guru") {
			$_SESSION['username'] = $username;
			$_SESSION['level'] = "guru";
			$_SESSION['guru'] = $username;
			header("Location: guru/halaman_guru.php");
		} elseif ($data['level'] == "siswa") {
			$_SESSION['username'] = $username;
			$_SESSION['level'] = "siswa";
			$_SESSION['siswa'] = $username;
			header("Location: siswa/halaman_siswa.php");
		}
	} else {
		echo "<script> type='text/javascript'>alert('Login gagal username atau password salah!'); location.href=\"index.php\" ;</script>";
	}
}
