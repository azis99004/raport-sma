<div class="card-body">
    <div class="table-responsive">
        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Foto</th>
                    <th>NISN</th>
                    <th>Kelas</th>
                    <th>Jurusan</th>
                    <th>Nama Siswa</th>
                    <th>Tanggal lahir</th>
                    <th>Kelamin </th>
                    <th>Tempat Lahir</th>
                    <th>Agama</th>
                    <th>No HP</th>
                    <th>Email</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tfoot>
                <tr>
                    <th>No</th>
                    <th>Foto</th>
                    <th>NISN</th>
                    <th>Kelas</th>
                    <th>Jurusan</th>
                    <th>Nama Siswa</th>
                    <th>Tanggal lahir</th>
                    <th>Kelamin </th>
                    <th>Tempat Lahir</th>
                    <th>Agama</th>
                    <th>No HP</th>
                    <th>Email</th>
                    <th>Aksi</th>
                </tr>
            </tfoot>
            <tbody>
                <?php $i = 1; ?>
                <?php foreach ($guru as $row) : ?>
                    <tr>
                        <td><?= $i; ?></td>
                        <td><img src="../../img/<?= $row["foto_siswa"]; ?>" width="80"></td>
                        <td><?= $row["nisn"]; ?></td>
                        <td><?= $row["nama_kelas"]; ?></td>
                        <td><?= $row["jurusan"]; ?></td>
                        <td><?= $row["nama_siswa"]; ?></td>
                        <td><?= $row["tgl_lahir"]; ?></td>
                        <td><?= $row["kelamin"]; ?></td>
                        <td><?= $row["tempat_lahir"]; ?></td>
                        <td><?= $row["agama"]; ?></td>
                        <td><?= $row["no_hp"]; ?></td>
                        <td><?= $row["email"]; ?></td>
                        <td>
                            <button type="button" name="ubah"><a href="ubahsiswa.php?id=<?= $row["id_siswa"] ?>"><i class="fas fa-pencil-alt"></i></a></button>
                        </td>
                    </tr>
                    <?php $i++; ?>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
</div>
</div>