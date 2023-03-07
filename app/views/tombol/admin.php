
<div id="wrapper">

<!-- Sidebar -->
<ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion no-print" id="accordionSidebar">

  <!-- Sidebar - Brand -->
  <a class="sidebar-brand d-flex align-items-center justify-content-center" href="<?= BASEURL; ?>/Home">
    <div class="sidebar-brand-icon">
      <i class="fas fa-archive"></i>
    </div>
    <div class="sidebar-brand-text mx-3">APPMK <sup>Garut</sup></div>
  </a>

  <!-- Divider -->
  <hr class="sidebar-divider my-0">

  <!-- Nav Item - Dashboard -->
  <li class="nav-item">
    <a class="nav-link" href="<?= BASEURL; ?>/Home">
      <i class="fas fa-fw fa-tachometer-alt"></i>
      <span>Dashboard</span></a>
  </li>

  <!-- Divider -->
  <hr class="sidebar-divider">

  <!-- Heading -->
  <div class="sidebar-heading">
    Interaksi
  </div>

  <!-- Nav Item - Pages Collapse Menu -->
  <li class="nav-item mb-n2">
    <a class="nav-link collapsed" data-toggle="collapse" data-target="#collapseTwo">
      <i class="fas fa-file-alt"></i>
      <span class="pengaduan">Pengaduan</span>
    </a>
    <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
      <div class="bg-white py-2 collapse-inner rounded bg-gradient-primary">
        <a class="collapse-item bg-light mb-2" href="<?= BASEURL; ?>/VerifikasiPengaduan/proses">Verifikasi Pengaduan <i class="fas fa-file-contract text-primary"></i></a>

        <a class="collapse-item bg-light" href="<?= BASEURL; ?>/tanggapiPengaduan/proses">Tanggapi Pengaduan <i class="fa fa-smile text-primary "></i></a>
        <a class="collapse-item bg-light mt-2" href="<?= BASEURL; ?>/KelolaTanggapan">Kelola Tanggapan<i class="fas fa-table text-primary"></i></a>
      </div>
    </div>
  </li>
 

  <li class="nav-item mt-n2">
    <a class="nav-link collapsed" data-toggle="collapse" data-target="#collapseFourth">
      <i class="fas fa-users ml-n1"></i>
      <span class="pengaduan">Data User</span>
    </a>
    <div id="collapseFourth" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
      <div class="bg-white py-2 collapse-inner rounded bg-gradient-primary">
        <a class="collapse-item bg-light mb-2" href="<?= BASEURL; ?>/LihatUser/Masyarakat">Masyarakat <i class="fas fa-user-friends text-primary ml-2"></i>  </a>
      </div>
    </div>
  </li>

  <li class="nav-item mt-n3">
    <a class="nav-link collapsed" data-toggle="collapse" data-target="#collapseFive">
      <i class="fas fa-copy"></i>
      <span class="pengaduan">Data Pengaduan</span>
    </a>
    <div id="collapseFive" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
      <div class="bg-white py-2 collapse-inner rounded bg-gradient-primary">
      <a class="collapse-item bg-light mb-2" href="<?= BASEURL; ?>/VerifikasiPengaduan/DataPengaduan">Semua</a>
      <h6 class="collapse-header ml-n2">Dengan status Pengaduan</h6>       
        <a class="collapse-item bg-light mb-2" href="<?= BASEURL; ?>/VerifikasiPengaduan/proses">0</a>
        <a class="collapse-item bg-light mb-2" href="<?= BASEURL; ?>/VerifikasiPengaduan/statusProses">Proses </a>
        <a class="collapse-item bg-light mb-2" href="<?= BASEURL; ?>/VerifikasiPengaduan/statusSelesai">Selesai</a>
      </div>
    </div>
  </li>
  <li class="nav-item pengaturan">
    <a href="<?= BASEURL; ?>/TanggapiPengaduan/LihatTanggapan" class="nav-link collapsed">
      <i class="fas fa-smile"></i>
      <span>Data Tanggapan</span>
    </a>
  </li>
  <hr class="sidebar-divider">
  <!-- Nav Item - Utilities Collapse Menu -->
  <li class="nav-item pengaturan">
    <a href="<?= BASEURL; ?>/pengaturan" class="nav-link collapsed">
      <i class="fas fa-fw fa-wrench"></i>
      <span>Pengaturan</span>
    </a>
  </li>

  <!-- Divider -->
  <hr class="sidebar-divider">

  <!-- Heading -->
  <div class="sidebar-heading">
    Laporan
  </div>

  
  <!-- Nav Item - Charts -->
  <li class="nav-item">
    <a class="nav-link collapsed"href="<?= BASEURL; ?>/cetakPengaduan">
      <i class="fas fa-print"></i>
      <span class="pengaduan">Cetak Pengaduan</span>
    </a>
  </li>
  <li class="nav-item">
    <a href="<?= BASEURL; ?>/cetakMasyarakat" class="nav-link collapsed" >
      <i class="fas fa-print"></i>
      <span class="pengaduan">Cetak Masyarakat</span>
    </a>
  </li>
  <li class="nav-item">
    <a href="<?= BASEURL; ?>/cetakTanggapan" class="nav-link collapsed" >
      <i class="fas fa-print"></i>
      <span class="pengaduan">Cetak Tanggapan</span>
    </a>
  </li>
  <!-- Divider -->
  <hr class="sidebar-divider">

  <!-- Heading -->
  <div class="sidebar-heading">
    Akun
  </div>

  
  <!-- Nav Item - Charts -->
  <li class="nav-item">
    <a class="nav-link" href="<?= BASEURL; ?>/logout">
      <i class="fas fa-sign-out-alt"></i>
      <span>Logout</span></a>
  </li>


  <!-- Divider -->
  <hr class="sidebar-divider d-none d-md-block">

  <!-- Sidebar Toggler (Sidebar) -->
  <div class="text-center d-none d-md-inline">
    <button class="rounded-circle border-0" id="sidebarToggle"></button>
  </div>

</ul>
<!-- End of Sidebar -->

<!-- Content Wrapper -->
<div id="content-wrapper" class="d-flex flex-column">

  <!-- Main Content -->
  <div id="content">

    <!-- Topbar -->
    <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">
    <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
        <i class="fa fa-bars"></i>
    </button>
      <h1 class="judul">Aplikasi Pelaporan Pengaduan Masyarakat Kabupaten</h1>

    </nav>