<div id="wrapper">

<!-- Sidebar -->
<ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

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
  <li class="nav-item">
    <a class="nav-link collapsed" data-toggle="collapse" data-target="#collapseTwo">
      <i class="fas fa-file-alt"></i>
      <span class="pengaduan">Pengaduan</span>
    </a>
    <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
      <div class="bg-white py-2 collapse-inner rounded bg-gradient-primary">
        <h6 class="collapse-header">Opsi</h6>
        <a class="collapse-item bg-light mb-2" href="<?= BASEURL; ?>/tulisPengaduan">Tulis Pengaduan    <i class="fa fa-edit text-primary"></i></a>
        <a class="collapse-item bg-light" href="<?= BASEURL; ?>/lihatPengaduan">Lihat Pengaduan    <i class="fa fa-eye text-primary"></i></a>
      </div>
    </div>
  </li>

  <!-- Nav Item - Utilities Collapse Menu -->
  <li class="nav-item pengaturan">
    <a href="<?= BASEURL; ?>/pengaturan" class="nav-link">
      <i class="fas fa-fw fa-wrench"></i>
      <span>Pengaturan</span>
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