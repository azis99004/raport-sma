<?php
include '../koneksi.php';
if (isset($_POST['ubah'])) {
    $id = htmlspecialchars($_POST['id_siswa']);
    $nisn = htmlspecialchars($_POST['nisn']);
    $jurusan = htmlspecialchars($_POST['jurusan']);
    $nama_siswa = htmlspecialchars($_POST['nama_siswa']);
    $tgl_lahir = htmlspecialchars($_POST['tgl_lahir']);
    $kelamin = htmlspecialchars($_POST['kelamin']);
    $tempat_lahir = htmlspecialchars($_POST['tempat_lahir']);
    $agama = htmlspecialchars($_POST['agama']);
    $no_hp = htmlspecialchars($_POST['no_hp']);
    $email = htmlspecialchars($_POST['email']);
    $foto_siswaLama = htmlspecialchars($_POST['foto_siswaLama']);

    // cek apakah user pilih gambar baru atau tidak
    if (
        $_FILES['foto_siswa']['error'] === 4
    ) {
        $foto_siswa = $foto_siswaLama;
    } else {
        $foto_siswa = upload();
    }

    $query = "UPDATE tb_siswa SET
				nisn = '$nisn',
				jurusan = '$jurusan',
				nama_siswa = '$nama_siswa',
				tgl_lahir = '$tgl_lahir',
                kelamin = '$kelamin',
                tempat_lahir = '$tempat_lahir',
                agama = '$agama',
                no_hp = '$no_hp',
                email = '$email',
                foto_siswa = '$foto_siswa'
                WHERE id_siswa = '$id'
				";
    mysqli_query($conn, $query);
    if ($query) {
        echo "<script> type='text/javascript'>alert('Data berhasil ditambahkan!'); location.href=\"datasiswa.php\" ;</script>";
    }
}

function upload()
{

    $namaFile = $_FILES['foto_siswa']['name'];
    $ukuranFile = $_FILES['foto_siswa']['size'];
    $error = $_FILES['foto_siswa']['error'];
    $tmpName = $_FILES['foto_siswa']['tmp_name'];

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
