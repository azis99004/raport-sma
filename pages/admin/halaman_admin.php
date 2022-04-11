<?php
include "../koneksi.php";
session_start();
if (!isset($_SESSION['admin'])) {
    header("location: ../index.php");
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
    <link href="../../img/logoSMA.png" rel="shortcut icon">
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
                        <a class="collapse-item" href="pilihtahundankelas.php">Print Raport</a>
                    </div>
                </div>
            </li>
        </ul>
        <!-- End of Sidebar -->

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">

                <!-- Topbar -->
                <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

                    <!-- Sidebar Toggle (Topbar) -->
                    <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
                        <i class="fa fa-bars"></i>
                    </button>

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
                                <span class="mr-2 d-none d-lg-inline text-gray-600 small">Selamat Datang <?= "$_SESSION[username]" ?></span>
                                <img class="img-profile rounded-circle" src="../../img/fotosiswa.png">
                            </a>
                            <!-- Dropdown - User Information -->
                            <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="userDropdown">
                                <a class="dropdown-item" href="profil.php">
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

                    <!-- Content Row -->
                    <div class="row">

                        <!-- Earnings (Monthly) Card Example -->
                        <div class="col-xl-3 col-md-6 mb-4">
                            <div class="card border-left-primary shadow h-100 py-2">
                                <div class="card" style="width: 18rem;">
                                    <div class="card-body">
                                        <i class="fa fa-graduation-cap" aria-hidden="true"></i>
                                        <?php
                                        include "../koneksi.php";

                                        $siswa = mysqli_query($conn, "SELECT * FROM tb_siswa");
                                        $result = mysqli_num_rows($siswa);
                                        ?>
                                        <h5 class="card-title">Jumlah Siswa</h5>
                                        <div class="display-4"><b><?= $result; ?></b></div>
                                        <a href="datasiswa.php">
                                            <p class="card-text">Lihat Detail <i class="fas fa-angle-double-right ml-2"></i> </p>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Earnings (Monthly) Card Example -->
                        <div class="col-xl-3 col-md-6 mb-4">
                            <div class="card border-left-success shadow h-100 py-2">
                                <div class="card" style="width: 18rem;">
                                    <div class="card-body">
                                        <i class="fas fa-chalkboard-teacher"></i>
                                        <?php
                                        include "../koneksi.php";

                                        $guru = mysqli_query($conn, "SELECT * FROM tb_guru");
                                        $result = mysqli_num_rows($guru);
                                        ?>
                                        <h5 class="card-title">Jumlah Guru</h5>
                                        <div class="display-4"><b><?= $result; ?></b></div>
                                        <a href="dataguru.php">
                                            <p class="card-text">Lihat Detail <i class="fas fa-angle-double-right ml-2"></i> </p>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Earnings (Monthly) Card Example -->
                        <div class="col-xl-3 col-md-6 mb-4">
                            <div class="card border-left-info shadow h-100 py-2">
                                <div class="card" style="width: 18rem;">
                                    <div class="card-body">
                                        <i class="fas fa-school"></i>
                                        <?php
                                        include "../koneksi.php";

                                        $kelas = mysqli_query($conn, "SELECT * FROM tb_kelas");
                                        $result = mysqli_num_rows($kelas);
                                        ?>
                                        <h5 class="card-title">Jumlah Kelas</h5>
                                        <div class="display-4"><b><?= $result; ?></b></div>
                                        <a href="datakelas.php">
                                            <p class="card-text">Lihat Detail <i class="fas fa-angle-double-right ml-2"></i> </p>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Pending Requests Card Example -->
                        <div class="col-xl-3 col-md-6 mb-4">
                            <div class="card border-left-warning shadow h-100 py-2">
                                <div class="card" style="width: 18rem;">
                                    <div class="card-body">
                                        <i class="fas fa-book"></i>
                                        <?php
                                        include "../koneksi.php";

                                        $mapel = mysqli_query($conn, "SELECT * FROM tb_mapel");
                                        $result = mysqli_num_rows($mapel);
                                        ?>
                                        <h5 class="card-title">Jumlah Mata Pelajaran</h5>
                                        <div class="display-4"><b><?= $result; ?></b></div>
                                        <a href="datamapel.php">
                                            <p class="card-text">Lihat Detail <i class="fas fa-angle-double-right ml-2"></i> </p>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>

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
                                <h5 class="modal-title" id="exampleModalLabel">Yakin Ingin Keluar!?</h5>
                                <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">×</span>
                                </button>
                            </div>
                            <div class="modal-body">Silahkan Klik ok untuk logout!!</div>
                            <div class="modal-footer">
                                <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                                <a class="btn btn-primary" href="logout.php">Logout</a>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Bootstrap core JavaScript-->
                <script src="../../dist/vendor/jquery/jquery.min.js"></script>
                <script src="../../dist/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

                <!-- Core plugin JavaScript-->
                <script src="../../dist/vendor/jquery-easing/jquery.easing.min.js"></script>

                <!-- Custom scripts for all pages-->
                <script src="../../dist/js/sb-admin-2.min.js"></script>

                <!-- Page level plugins -->
                <script src="../../dist/vendor/chart.js/Chart.min.js"></script>

                <!-- Page level custom scripts -->
                <script src="../../dist/js/demo/chart-area-demo.js"></script>
                <script src="../../dist/js/demo/chart-pie-demo.js"></script>

</body>

</html>