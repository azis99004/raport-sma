<a class="fas fa-pencil-alt" href="ubah-guru.php">
    <type="button" name="ubah">
</a>

<a class="fas fa-trash-alt" href="hapusguru.php?id=<?= $row["kode_guru"]; ?>" onclick="return confirm('Apakah anda yakin ingin menghapus data guru ini?');">
    <type="button" name="hapus">
</a>

<a class="fas fa-user-plus" href="add-siswa.php">
    <type="button" name="tambah">
</a>

<a class="fas fa-pencil-alt" href="ubahsiswa.php?id=<?= $row["id_siswa"]; ?>">
    <type="button" name="ubah">
</a>