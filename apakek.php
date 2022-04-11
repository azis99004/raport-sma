<link href="../../img/logoSMA.png" rel="shortcut icon">

<img class="img-profile rounded-circle" src="../../img/logoSMA.png" width="30" height="30">

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

<span class="mr-2 d-none d-lg-inline text-gray-600 small">Selamat Datang <?= "$_SESSION[username]" ?></span>
<img class="img-profile rounded-circle" src="../../img/fotosiswa.png">

<span class="mr-2 d-none d-lg-inline text-gray-600 small"><?= "$_SESSION[username]" ?></span></span>
<img class="img-profile rounded-circle" src="../../img/fotosiswa.png">

<!-- data tables -->
<link href="../../dist/vendor/datatables/dataTables.bootstrap4.css" rel="stylesheet">