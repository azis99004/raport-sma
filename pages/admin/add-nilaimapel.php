<?php
session_start();
if (!isset($_SESSION["username"])) {
    header("Location: ../index.php");
}
include "../koneksi.php";

$nilai = mysqli_query($conn, "SELECT * FROM tb_nilai_mapel");
$result = mysqli_fetch_assoc($nilai);

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
                        <a class="collapse-item" href="datakelassiswa.php">Data Kelas Siswa</a>
                    </div>
                </div>
            </li>

            <!-- Nav Item - Utilities Collapse Menu -->
            <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseUtilities" aria-expanded="true" aria-controls="collapseUtilities">
                    <i class="fas fa-fw fa-wrench"></i>
                    <span>Data Akademik</span>
                </a>
                <div id="collapseUtilities" class="collapse" aria-labelledby="headingUtilities" data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <h6 class="collapse-header">Data Raport:</h6>
                        <a class="collapse-item" href="penilaianmapel.php">Penilaian Pengetahuan</a>
                        <a class="collapse-item" href="penilaianmapelketerampilan.php">Penilaian Keterampilan</a>
                        <a class="collapse-item" href="dataextrakulikuler.php">Penilaian Extrakulikuler</a>
                        <a class="collapse-item" href="datanilaisikap.php">Penilaian Sikap</a>
                        <a class="collapse-item" href="datanilaiharian.php">Penilaian Ujian Harian</a>
                        <a class="collapse-item" href="datanilaiuts.php">Penilaian UTS</a>
                        <a class="collapse-item" href="datanilaiuas.php">Penilaian UAS</a>
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

                    <!-- Topbar Search -->
                    <form class="d-none d-sm-inline-block form-inline mr-auto ml-md-3 my-2 my-md-0 mw-100 navbar-search">
                        <div class="input-group">
                            <input type="text" class="form-control bg-light border-0 small" placeholder="Search for..." aria-label="Search" aria-describedby="basic-addon2">
                            <div class="input-group-append">
                                <button class="btn btn-primary" type="button">
                                    <i class="fas fa-search fa-sm"></i>
                                </button>
                            </div>
                        </div>
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

                        <!-- Nav Item - Alerts -->
                        <li class="nav-item dropdown no-arrow mx-1">
                            <a class="nav-link dropdown-toggle" href="#" id="alertsDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="fas fa-bell fa-fw"></i>
                                <!-- Counter - Alerts -->
                                <span class="badge badge-danger badge-counter">3+</span>
                            </a>
                            <!-- Dropdown - Alerts -->
                            <div class="dropdown-list dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="alertsDropdown">
                                <h6 class="dropdown-header">
                                    Alerts Center
                                </h6>
                                <a class="dropdown-item d-flex align-items-center" href="#">
                                    <div class="mr-3">
                                        <div class="icon-circle bg-primary">
                                            <i class="fas fa-file-alt text-white"></i>
                                        </div>
                                    </div>
                                    <div>
                                        <div class="small text-gray-500">December 12, 2019</div>
                                        <span class="font-weight-bold">A new monthly report is ready to download!</span>
                                    </div>
                                </a>
                                <a class="dropdown-item d-flex align-items-center" href="#">
                                    <div class="mr-3">
                                        <div class="icon-circle bg-success">
                                            <i class="fas fa-donate text-white"></i>
                                        </div>
                                    </div>
                                    <div>
                                        <div class="small text-gray-500">December 7, 2019</div>
                                        $290.29 has been deposited into your account!
                                    </div>
                                </a>
                                <a class="dropdown-item d-flex align-items-center" href="#">
                                    <div class="mr-3">
                                        <div class="icon-circle bg-warning">
                                            <i class="fas fa-exclamation-triangle text-white"></i>
                                        </div>
                                    </div>
                                    <div>
                                        <div class="small text-gray-500">December 2, 2019</div>
                                        Spending Alert: We've noticed unusually high spending for your account.
                                    </div>
                                </a>
                                <a class="dropdown-item text-center small text-gray-500" href="#">Show All Alerts</a>
                            </div>
                        </li>

                        <!-- Nav Item - Messages -->
                        <li class="nav-item dropdown no-arrow mx-1">
                            <a class="nav-link dropdown-toggle" href="#" id="messagesDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="fas fa-envelope fa-fw"></i>
                                <!-- Counter - Messages -->
                                <span class="badge badge-danger badge-counter">7</span>
                            </a>
                            <!-- Dropdown - Messages -->
                            <div class="dropdown-list dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="messagesDropdown">
                                <h6 class="dropdown-header">
                                    Message Center
                                </h6>
                                <a class="dropdown-item d-flex align-items-center" href="#">
                                    <div class="dropdown-list-image mr-3">
                                        <img class="rounded-circle" src="img/undraw_profile_1.svg" alt="">
                                        <div class="status-indicator bg-success"></div>
                                    </div>
                                    <div class="font-weight-bold">
                                        <div class="text-truncate">Hi there! I am wondering if you can help me with a
                                            problem I've been having.</div>
                                        <div class="small text-gray-500">Emily Fowler · 58m</div>
                                    </div>
                                </a>
                                <a class="dropdown-item d-flex align-items-center" href="#">
                                    <div class="dropdown-list-image mr-3">
                                        <img class="rounded-circle" src="img/undraw_profile_2.svg" alt="">
                                        <div class="status-indicator"></div>
                                    </div>
                                    <div>
                                        <div class="text-truncate">I have the photos that you ordered last month, how
                                            would you like them sent to you?</div>
                                        <div class="small text-gray-500">Jae Chun · 1d</div>
                                    </div>
                                </a>
                                <a class="dropdown-item d-flex align-items-center" href="#">
                                    <div class="dropdown-list-image mr-3">
                                        <img class="rounded-circle" src="img/undraw_profile_3.svg" alt="">
                                        <div class="status-indicator bg-warning"></div>
                                    </div>
                                    <div>
                                        <div class="text-truncate">Last month's report looks great, I am very happy with
                                            the progress so far, keep up the good work!</div>
                                        <div class="small text-gray-500">Morgan Alvarez · 2d</div>
                                    </div>
                                </a>
                                <a class="dropdown-item d-flex align-items-center" href="#">
                                    <div class="dropdown-list-image mr-3">
                                        <img class="rounded-circle" src="https://source.unsplash.com/Mv9hjnEUHR4/60x60" alt="">
                                        <div class="status-indicator bg-success"></div>
                                    </div>
                                    <div>
                                        <div class="text-truncate">Am I a good boy? The reason I ask is because someone
                                            told me that people say this to all dogs, even if they aren't good...</div>
                                        <div class="small text-gray-500">Chicken the Dog · 2w</div>
                                    </div>
                                </a>
                                <a class="dropdown-item text-center small text-gray-500" href="#">Read More Messages</a>
                            </div>
                        </li>

                        <div class="topbar-divider d-none d-sm-block"></div>

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
                    <h1 class="h3 mb-2 text-gray-800">Data Nilai Siswa</h1>
                    <p class="mb-4">Nilai Siswa

                        <!-- DataTales Example -->
                    <div class="card shadow mb-4">
                        <div class="card-header py-3">
                            <h6 class="m-0 font-weight-bold text-primary">Data Pengetahuan Siswa</h6>
                        </div>
                        <div class="container">
                            <h2>Tambah Data Pengetahuan Siswa</h2>
                            <p>Silahkan jika kalian ingin menambah data, lakukan dengan bijak!</p>
                            <form action="add-fungsinilaimapel.php" method="POST" class="needs-validation" novalidate>
                                <div class="form-group">
                                    <label for="sel1">Nama Guru:</label>
                                    <select class="form-control" id="sel1" name="kode_guru" required>
                                        <option value="">--Pilih Nama Guru:</option>
                                        <?php
                                        include "../koneksi.php";
                                        $tampilnilaimapel = mysqli_query($conn, "SELECT * FROM tb_guru");
                                        while ($nilaimapel = mysqli_fetch_assoc($tampilnilaimapel)) {
                                            echo "<option value=$nilaimapel[kode_guru]>$nilaimapel[nama_guru]</option>";
                                        }
                                        ?>
                                    </select>
                                    <div class="form-group">
                                        <label for="sel1">Nama Siswa:</label>
                                        <select class="form-control" id="sel1" name="id_siswa" required>
                                            <option value="">--Pilih Nama Siswa: </option>
                                            <?php
                                            include "../koneksi.php";
                                            $tampilnilaimapel = mysqli_query($conn, "SELECT * FROM tb_siswa");
                                            while ($nilaimapel = mysqli_fetch_assoc($tampilnilaimapel)) {
                                                echo "<option value=$nilaimapel[id_siswa]>$nilaimapel[nama_siswa]</option>";
                                            }
                                            ?>
                                        </select>
                                        <div class="form-group">
                                            <label for="sel1">Nama Mapel:</label>
                                            <select class="form-control" id="sel1" name="kode_mapel" required>
                                                <option value="">--Pilih Nama Mapel:</option>
                                                <?php
                                                include "../koneksi.php";
                                                $tampilnilaimapel = mysqli_query($conn, "SELECT * FROM tb_mapel");
                                                while ($nilaimapel = mysqli_fetch_assoc($tampilnilaimapel)) {
                                                    echo "<option value=$nilaimapel[kode_mapel]>$nilaimapel[nama_mapel]</option>";
                                                }
                                                ?>
                                            </select>
                                            <div class="form-group">
                                                <label>Nilai</label>
                                                <input class="form-control" id=pilih name="nilai_mapel" onchange="pilih1();" PLACEHOLDER="ISI NILAI">
                                            </div>
                                            <div class="form-group">
                                                <input type=hidden class="form-control" id=n name="grade_mapel"> </input>
                                            </div>
                                            <div class="form-group">
                                                <label for="deskripsi">Deskripsi :</label>
                                                <input type="text" class="form-control" id="deskripsi" placeholder="Isikan deskripsi" name="deskripsi_mapel" required>
                                                <div class="valid-feedback">Ok</div>
                                                <div class="invalid-feedback">Silahkan Isi Alamat Anda</div>
                                            </div>
                                            <div class="form-group">
                                                <label for="sel1">Tahun Akademik:</label>
                                                <select class="form-control" id="sel1" name="kode_tahun_akademik" required>
                                                    <option value="">--Pilih Tahun Akademik:</option>
                                                    <?php
                                                    include "../koneksi.php";
                                                    $tampilnilaimapel = mysqli_query($conn, "SELECT * FROM tb_tahun_akademik");
                                                    while ($nilaimapel = mysqli_fetch_assoc($tampilnilaimapel)) {
                                                        echo "<option value=$nilaimapel[kode_tahun_akademik]>$nilaimapel[nama_tahun_akademik]</option>";
                                                    }
                                                    ?>
                                                </select>
                                                <button type="submit" class="btn btn-primary" name="tambah">Simpan</button>
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