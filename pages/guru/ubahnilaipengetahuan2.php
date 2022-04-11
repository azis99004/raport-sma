<?php
session_start();
if (!isset($_SESSION["guru"])) {
    header("Location: ../index.php");
}
include "../koneksi.php";
if (isset($_GET['id'])) {
    $tampilnilaimapel = mysqli_query($conn, "SELECT * FROM tb_nilai_mapel 
    LEFT JOIN tb_mapel on tb_mapel.kode_mapel=tb_nilai_mapel.kode_mapel 
    LEFT JOIN tb_guru on tb_guru.kode_guru=tb_nilai_mapel.kode_guru
    WHERE id_nilai_mapel = '$_GET[id]'");
    $nilaimapel = mysqli_fetch_assoc($tampilnilaimapel);
}
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
                <div class="sidebar-brand-icon rotate-n-15">
                </div>
                <img class="img-profile rounded-circle" src="../../img/logoSMA.png" width="30" height="30">
                <div class="sidebar-brand-text mx-3">SMA Mutiara Insan Nusantara</div>
            </a>

            <!-- Divider -->
            <hr class="sidebar-divider my-0">

            <!-- Nav Item - Dashboard -->
            <li class="nav-item active">
                <a class="nav-link" href="halaman_guru.php">
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
                    <i class="fas fa-pen fa-cog"></i>
                    <span>Input Nilai Siswa</span>
                </a>
                <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <h6 class="collapse-header">Silahkan dipilih:</h6>
                        <a class="collapse-item" href="datasiswa.php">Data Penilaian Siswa</a>
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
                                <span class="mr-2 d-none d-lg-inline text-gray-600 small"><?= "$_SESSION[username]" ?></span>
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
                    <h1 class="h3 mb-2 text-gray-800">Ubah Data Guru</h1>
                    <p class="mb-4">Silahkan ubah data-data guru yang ingin diubah!

                        <!-- DataTales Example -->
                    <div class="card shadow mb-4">
                        <div class="card-header py-3">
                            <h6 class="m-0 font-weight-bold text-primary">Data Guru</h6>
                        </div>
                        <div class="container">
                            <h2>Ubah Data Nilai</h2>
                            <p>Silahkan jika ingin mengubah data, lakukan dengan bijak!</p>
                            <form action="ubah-fungsinilaipengetahuan2.php" method="POST" class="needs-validation" novalidate>
                                <div class="form-group">
                                    <input type="hidden" name="id_nilai_mapel" value="<?= $nilaimapel["id_nilai_mapel"]; ?>">
                                </div>
                                <div class="form-group">
                                    <label for="sel1" readonly>Nama Mapel:</label>
                                    <select class="form-control" id="sel1" name="kode_mapel" required>
                                        <?php
                                        $tampil = mysqli_query($conn, "SELECT * FROM tb_jadwal_mapel inner join tb_guru on tb_jadwal_mapel.kode_guru=tb_guru.kode_guru inner join tb_mapel on tb_jadwal_mapel.kode_mapel=tb_mapel.kode_mapel join tb_user on tb_user.kode_guru=tb_guru.kode_guru WHERE username='$_SESSION[username]'");
                                        while ($w = mysqli_fetch_array($tampil)) {
                                            if ($nilaimapel['kode_mapel'] == $w['kode_mapel']) {
                                                echo "<option value=$w[kode_mapel] selected>$w[nama_mapel]</option>";
                                            } else {
                                                echo "<option value=$w[kode_mapel]>$w[nama_mapel]</option>";
                                            }
                                        }
                                        ?>
                                    </select>
                                    <div class="form-group">
                                        <label for="sel1" readonly>Nama Guru:</label>
                                        <select class="form-control" id="sel1" name="kode_guru" required>
                                            <?php
                                            $tampil = mysqli_query($conn, "SELECT * FROM tb_guru inner join tb_user on tb_user.kode_guru=tb_guru.kode_guru WHERE username='$_SESSION[username]'");
                                            while ($w = mysqli_fetch_array($tampil)) {
                                                if ($nilaimapel['kode_guru'] == $w['kode_guru']) {
                                                    echo "<option value=$w[kode_guru] selected>$w[nama_guru]</option>";
                                                } else {
                                                    echo "<option value=$w[kode_guru]>$w[nama_guru]</option>";
                                                }
                                            }
                                            ?>
                                        </select>
                                        <div class="form-group">
                                            <input type="hidden" name="id_siswa" value="<?= $nilaimapel["id_siswa"]; ?>">
                                        </div>
                                        <div class="form-group">
                                            <label>Nilai</label>
                                            <input class="form-control" minlength="0" maxlength="3" id=pilih name="nilai_mapel" onchange="pilih1();" PLACEHOLDER="ISI NILAI">
                                        </div>
                                        <div class="form-group">
                                            <input type=hidden class="form-control" id=n name="grade_mapel"> </input>
                                        </div>
                                        <div class="form-group">
                                            <label for="deskripsi"> Deskripsi:</label>
                                            <input type="text" class="form-control" id="deskripsi" placeholder="Isikan Nilai" name="deskripsi_mapel" value="<?= $nilaimapel["deskripsi_mapel"]; ?>">
                                            <div class="valid-feedback">Ok</div>
                                            <div class="invalid-feedback">silahkan input nomor telpon anda</div>
                                        </div>
                                        <div class="form-group">
                                            <label for="sel1">Tahun Akademik:</label>
                                            <select class="form-control" id="sel1" name="kode_tahun_akademik" required>
                                                <option value="">--Pilih Tahun Akademik:</option>
                                                <?php
                                                include "../koneksi.php";
                                                $tampilnilaimapel = mysqli_query($conn, "SELECT * FROM tb_tahun_akademik");
                                                while ($nilaimapel = mysqli_fetch_assoc($tampilnilaimapel)) {
                                                    echo "<option value=$nilaimapel[kode_tahun_akademik]>$nilaimapel[nama_tahun_akademik]|$nilaimapel[semester]</option>";
                                                }
                                                ?>
                                            </select>
                                            <button type="submit" class="btn btn-primary" name="ubah">Ubah</button>
                                            <button type="button" class="btn btn-secondary" onclick="self.history.back()">Cancel</button>
                            </form>
                        </div>
                        <script>
                            function pilih1() {
                                if (pilih.value == 100) n.value = "A";
                                if (pilih.value < 100) n.value = "A";
                                if (pilih.value < 91) n.value = "B";
                                if (pilih.value < 83) n.value = "C";
                                if (pilih.value < 75) n.value = "D";
                                if (pilih.value < 60) n.value = "E";
                            }
                        </script>

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