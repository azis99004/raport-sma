<?php
include '../koneksi.php';
if (isset($_POST['ubah'])) {
    $kode_guru = htmlspecialchars($_POST['kode_guru']);
    $nama_guru = htmlspecialchars($_POST['nama_guru']);
    $nip = htmlspecialchars($_POST['nip']);
    $alamat_guru = htmlspecialchars($_POST['alamat_guru']);
    $telp_guru = htmlspecialchars($_POST['telp_guru']);
    $foto_guruLama = htmlspecialchars($_POST['foto_guruLama']);

    // cek apakah user pilih gambar baru atau tidak
    if (
        $_FILES['foto_guru']['error'] === 4
    ) {
        $foto_gur = $foto_guruLama;
    } else {
        $foto_guru = upload();
    }

    $query = "UPDATE tb_guru SET
				nama_guru = '$nama_guru',
				nip = '$nip',
				alamat_guru = '$alamat_guru',
                telp_guru = '$telp_guru',
                foto_guru = '$foto_guru'
                WHERE kode_guru = '$kode_guru'
				";
    mysqli_query($conn, $query);
    if ($query) {
        echo "<script> type='text/javascript'>alert('Data berhasil ditambahkan!'); location.href=\"halaman_guru.php\" ;</script>";
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
