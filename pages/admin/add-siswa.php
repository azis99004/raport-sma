<?php
session_start();
if (!isset($_SESSION["username"])) {
    header("Location: ../index.php");
}
include "../koneksi.php";

$siswa = mysqli_query($conn, "SELECT * FROM tb_siswa");
$result = mysqli_fetch_assoc($siswa);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <link href="../../img/logoSMA.png" rel="shortcut icon">
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>SMA Mutiara Insan Nusantara </title>

    <!-- Custom fonts for this template-->
    <link href="../../dist/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="../../dist/css/sb-admin-2.min.css" rel="stylesheet">

</head>

<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">

        <!-- Sidebar -->
        <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

            <!-- Sidebar - Brand -->
            <a class="sidebar-brand d-flex align-items-center justify-content-center" href="halaman_admin.php">
                <img class="img-profile rounded-circle" src="../../img/logoSMA.png" width="30" height="30">
                <div class="sidebar-brand-text mx-3">SMA Mutiara Insan Nusantara</div>
            </a>

            <!-- Divider -->
            <hr class="sidebar-divider my-0">

            <!-- Nav Item - Dashboard -->
            <li class="nav-item active">
                <a class="nav-link" href="halaman_admin.php">
                    <i class="fas fa-fw fa-tachometer-alt"></i>
                    <span>Dashboard</span></a>
            </li>

            <!-- Divider -->
            <hr class="sidebar-divider">

            <!-- Heading -->
            <div class="sidebar-heading">
                Menu
            </div>

            <!-- Nav Item - Pages Collapse Menu -->
            <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="true" aria-controls="collapseTwo">
                    <i class="fas fa-fw fa-cog"></i>
                    <span>Master Data</span>
                </a>
                <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <h6 class="collapse-header">Silahkan dipilih:</h6>
                        <a class="collapse-item" href="dataguru.php">Data Guru</a>
                        <a class="collapse-item" href="datasiswa.php">Data Siswa</a>
                        <a class="collapse-item" href="datawalikelas.php">Data Wali Kelas</a>
                        <a class="collapse-item" href="datakelas.php">Data Kelas</a>
                        <a class="collapse-item" href="datamapel.php">Data Mapel</a>
                        <a class="collapse-item" href="datauser.php">Data User</a>
                        <a class="collapse-item" href="jadwalmapel.php">Jadwal Mata Pelajaran</a>
                        <a class="collapse-item" href="datatahunakademik.php">Data Tahun Akademik</a>
                    </div>
                </div>
            </li>
            <!-- Sidebar Toggler (Sidebar) -->
            <div class="text-center d-none d-md-inline">
                <button class="rounded-circle border-0" id="sidebarToggle" onclick="self.history.back()"></button>
            </div>

        </ul>
        <!-- End of Sidebar -->

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">

                <!-- Topbar -->
                <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

                    <!-- Sidebar Toggle (Topbar) -->
                    <form class="form-inline">
                        <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
                            <i class="fa fa-bars"></i>
                        </button>
                    </form>

                    <!-- Topbar Navbar -->
                    <ul class="navbar-nav ml-auto">

                        <!-- Nav Item - Search Dropdown (Visible Only XS) -->
                        <li class="nav-item dropdown no-arrow d-sm-none">
                            <a class="nav-link dropdown-toggle" href="#" id="searchDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="fas fa-search fa-fw"></i>
                            </a>
                            <!-- Dropdown - Messages -->
                            <div class="dropdown-menu dropdown-menu-right p-3 shadow animated--grow-in" aria-labelledby="searchDropdown">
                                <form class="form-inline mr-auto w-100 navbar-search">
                                    <div class="input-group">
                                        <input type="text" class="form-control bg-light border-0 small" placeholder="Search for..." aria-label="Search" aria-describedby="basic-addon2">
                                        <div class="input-group-append">
                                            <button class="btn btn-primary" type="button">
                                                <i class="fas fa-search fa-sm"></i>
                                            </button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </li>

                        <!-- Nav Item - User Information -->
                        <li class="nav-item dropdown no-arrow">
                            <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <span class="mr-2 d-none d-lg-inline text-gray-600 small"><?= "$_SESSION[username]" ?></span></span>
                                <img class="img-profile rounded-circle" src="../../img/fotosiswa.png">
                            </a>
                            <!-- Dropdown - User Information -->
                            <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="userDropdown">
                                <a class="dropdown-item" href="#">
                                    <i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Profile
                                </a>
                                <a class="dropdown-item" href="#">
                                    <i class="fas fa-cogs fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Settings
                                </a>
                                <a class="dropdown-item" href="#">
                                    <i class="fas fa-list fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Activity Log
                                </a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="#" data-toggle="modal" data-target="#logoutModal">
                                    <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Logout
                                </a>
                            </div>
                        </li>

                    </ul>

                </nav>
                <!-- End of Topbar -->

                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Page Heading -->
                    <h1 class="h3 mb-2 text-gray-800">Data Siswa</h1>
                    <p class="mb-4">Silahkan melakukan penambahan siswanya kakak!

                        <!-- DataTales Example -->
                    <div class="card shadow mb-4">
                        <div class="card-header py-3">
                            <h6 class="m-0 font-weight-bold text-primary">Data Siswa</h6>
                        </div>
                        <div class="container">
                            <h2>Tambah Data</h2>
                            <p>Silahkan jika kalian ingin menambah data, lakukan dengan bijak!</p>
                            <form action="add-fungsisiswa.php" method="POST" class="needs-validation" novalidate enctype="multipart/form-data">
                                <div class="form-group">
                                    <label for="sel1">Kode Kelas:</label>
                                    <select class="form-control" id="sel1" name="kode_kelas" required>
                                        <option value="">--Pilih Kode Kelas:</option>
                                        <?php
                                        include "../koneksi.php";
                                        $tampilkls = mysqli_query($conn, "SELECT * FROM tb_kelas");
                                        while ($kls = mysqli_fetch_assoc($tampilkls)) {
                                            echo "<option value=$kls[kode_kelas]>$kls[nama_kelas]</option>";
                                        }
                                        ?>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label for="kode">NISN :</label>
                                    <input type="text" class="form-control" id="nisn" placeholder="Isikan NISN siswa" name="nisn" maxlength="12" minlength="12" autofocus>
                                    <div class="valid-feedback">Ok</div>
                                    <div class="invalid-feedback">silahkan input kode mapel</div>
                                </div>
                                <div class="form-group">
                                    <label for="sel1">Jurusan Siswa:</label>
                                    <select class="form-control" id="sel1" name="jurusan">
                                        <option>MIPA</option>
                                        <option>IIS</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label for="nip">Nama Siswa</label>
                                    <input type="text" class="form-control" id="nama_siswa" placeholder="isikan Nama Siswa" name="nama_siswa">
                                    <div class="valid-feedback">Ok</div>
                                    <div class="invalid-feedback">silahkan input NIP anda</div>
                                </div>
                                <div class="form-group">
                                    <label for="alamat">Tanggal Lahir</label>
                                    <input type="date" class="form-control" id="alamat" placeholder="Isikan Tanggal lahir Siswa" name="tgl_lahir" required>
                                    <div class="valid-feedback">Ok</div>
                                    <div class="invalid-feedback">Silahkan isi kan tanggal lahir siswa</div>
                                </div>
                                <label for="kelamin">Jenis Kelamin Siswa:</label>
                                <div class="form-check">
                                    <label class="form-check-label">
                                        <input type="radio" class="form-check-input" name="kelamin" value="laki-laki" checked>Laki-Laki
                                    </label>
                                </div>
                                <div class="form-check">
                                    <label class="form-check-label">
                                        <input type="radio" class="form-check-input" name="kelamin" value="perempuan">Perempuan
                                    </label>
                                </div>
                                <div class="form-group">
                                    <label for="telp">Tempat Lair:</label>
                                    <input type="text" class="form-control" id="kelamin" placeholder="Isikan tempat kelahiran siswa" name="tempat_lahir" required>
                                    <div class="valid-feedback">Ok</div>
                                    <div class="invalid-feedback">Silahkan masukkan tempat lahir siswa</div>
                                </div>
                                <label for="agama">Agama : </label>
                                <div class="form-check">
                                    <label class="form-check-label">
                                        <input type="radio" class="form-check-input" name="agama" value="islam" checked>Islam
                                    </label>
                                </div>
                                <div class="form-check">
                                    <label class="form-check-label">
                                        <input type="radio" class="form-check-input" name="agama" value="kristen">Kristen
                                    </label>
                                </div>
                                <div class="form-check">
                                    <label class="form-check-label">
                                        <input type="radio" class="form-check-input" name="agama" value="hindu">Hindu
                                </div>
                                <div class="form-check">
                                    <label class="form-check-label">
                                        <input type="radio" class="form-check-input" name="agama" value="buddha">Buddha
                                    </label>
                                </div>
                                <div class="form-check">
                                    <label class="form-check-label">
                                        <input type="radio" class="form-check-input" name="agama" value="konghucu">Konghucu
                                    </label>
                                </div>
                                </label>
                                <div class="form-group">
                                    <label for="telp">No Hp :</label>
                                    <input type="text" class="form-control" id="no_hp" placeholder="Isikan No. Telpon Siswa" name="no_hp" maxlength="12" minlength="12" required>
                                    <div class="valid-feedback">Ok</div>
                                    <div class="invalid-feedback">Silahkan input no. hp siswa</div>
                                </div>
                                <div class="form-group">
                                    <label for="telp">Email :</label>
                                    <input type="email" class="form-control" id="email" placeholder="Isikan email siswa" name="email" required>
                                    <div class="valid-feedback">Ok</div>
                                    <div class="invalid-feedback">Silahkan masukkan alamat email siswa</div>
                                </div>
                                <div class="form-group">
                                    <label for="foto_siswa">Foto Siswa :</label>
                                    <input type="file" <i class="fas fa-cloud-upload-alt" class="form-control" id="kelamin" placeholder="Isikan foto siswa" name="foto_siswa"></i>
                                    <div class="valid-feedback">Ok</div>
                                </div>
                                <button type="submit" class="btn btn-primary" name="tambah">Simpan</button>
                                <button type="button" class="btn btn-secondary" onclick="self.history.back()">Cancel</button>
                            </form>
                        </div>

                        <script>
                            // Disable form submissions if there are invalid fields
                            (function() {
                                'use strict';
                                window.addEventListener('load', function() {
                                    // Get the forms we want to add validation styles to
                                    var forms = document.getElementsByClassName('needs-validation');
                                    // Loop over them and prevent submission
                                    var validation = Array.prototype.filter.call(forms, function(form) {
                                        form.addEventListener('submit', function(event) {
                                            if (form.checkValidity() === false) {
                                                event.preventDefault();
                                                event.stopPropagation();
                                            }
                                            form.classList.add('was-validated');
                                        }, false);
                                    });
                                }, false);
                            })();
                        </script>
                        <!-- Bootstrap core JavaScript-->
                        <script src="../../dist/vendor/jquery/jquery.min.js"></script>
                        <script src="../../dist/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

                        <!-- Core plugin JavaScript-->
                        <script src="../../dist/vendor/jquery-easing/jquery.easing.min.js"></script>

                        <!-- Custom scripts for all pages-->
                        <script src="../../dist/js/sb-admin-2.min.js"></script>

                        <!-- Page level plugins -->
                        <script src="../../dist/vendor/datatables/jquery.dataTables.min.js"></script>
                        <script src="../../dist/vendor/datatables/dataTables.bootstrap4.min.js"></script>

                        <!-- Page level custom scripts -->
                        <script src="../../dist/js/demo/datatables-demo.js"></script>
                    </div>
                    <!-- /.container-fluid -->

                </div>
                <!-- End of Main Content -->

                <!-- Footer -->
                <footer class="sticky-footer bg-white">
                    <div class="container my-auto">
                        <div class="copyright text-center my-auto">
                            <span>Copyright &copy; SMA Mutiara Insan Nusantara 2021</span>
                        </div>
                    </div>
                </footer>
                <!-- End of Footer -->

            </div>
            <!-- End of Content Wrapper -->

        </div>
        <!-- End of Page Wrapper -->

        <!-- Scroll to Top Button-->
        <a class="scroll-to-top rounded" href="#page-top">
            <i class="fas fa-angle-up"></i>
        </a>

        <!-- Logout Modal-->
        <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
                        <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">×</span>
                        </button>
                    </div>
                    <div class="modal-body">Apakah anda yakin ingin keluar?.</div>
                    <div class="modal-footer">
                        <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                        <a class="btn btn-primary" href="logout.php">Logout</a>
                    </div>
                </div>
            </div>
        </div>
</body>

</html>