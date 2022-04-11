<?php
include '../koneksi.php';
if (isset($_POST['tambah'])) {
	$nama_guru = htmlspecialchars($_POST['nama_guru']);
	$nip = htmlspecialchars($_POST['nip']);
	$alamat_guru = htmlspecialchars($_POST['alamat_guru']);
	$telp_guru = htmlspecialchars($_POST['telp_guru']);
	// Upload gambar
	$foto_guru = upload();
	if (
		!$foto_guru
	) {
		return false;
	}


	$query = mysqli_query($conn, "INSERT into tb_guru (nama_guru, nip, alamat_guru, telp_guru, foto_guru) values('$nama_guru','$nip','$alamat_guru','$telp_guru','$foto_guru')");
	if ($query) {
		echo "<script> type='text/javascript'>alert('Data berhasil ditambahkan!'); location.href=\"dataguru.php\" ;</script>";
	}
}
function upload()
{

	$namaFile = $_FILES['foto_guru']['name'];
	$ukuranFile = $_FILES['foto_guru']['size'];
	$error = $_FILES['foto_guru']['error'];
	$tmpName = $_FILES['foto_guru']['tmp_name'];

	// cek apakah tidak ada gambar yg di upload

	if ($error === 4) {
		echo "<script>
			alert('plilh gambar terlebih dahulu gan');
		</script>";
		return false;
	}


	// cek apakah yang diupload adalah gambar
	$ekstensiGambarValid = ['jpg', 'jpeg', 'png'];
	$ekstensiGambar = explode('.', $namaFile);
	$ekstensiGambar = strtolower(end($ekstensiGambar));
	if (!in_array($ekstensiGambar, $ekstensiGambarValid)) {
		echo "<script>
			alert('yang anda upload bukanlah gambar!');
		</script>";
		return false;
	}

	// cek jika ukurannya terlalu besar
	if ($ukuranFile > 1000000) {
		echo "<script>
			alert('Ukuran gambar kegedean gan');
		</script>";
		return false;
	}

	// lolos pengecekan , gambar siap di upload
	// generate nama baru
	$namaFileBaru = uniqid();
	$namaFileBaru .= '.';
	$namaFileBaru .= "$ekstensiGambar";

	move_uploaded_file($tmpName, '../../img/' . $namaFileBaru);

	return $namaFileBaru;
}
