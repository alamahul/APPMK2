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


  <li class="nav-item mt-n2">
    <a class="nav-link collapsed" data-toggle="collapse" data-target="#collapseFourth">
      <i class="fas fa-users"></i>
      <span class="pengaduan">Data User</span>
    </a>
    <div id="collapseFourth" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
      <div class="bg-white py-2 collapse-inner rounded bg-gradient-primary">
        <a class="collapse-item bg-light mb-2" href="<?= BASEURL; ?>/LihatUser/Petugas" data-toggle="modal" data-target="#ModalBuatPetugas"> Buat Petugas <i class="fas fa-user-plus ml-1   text-primary"></i></a>
        <a class="collapse-item bg-light mb-2" href="<?= BASEURL; ?>/LihatUser/Petugas"> Lihat Petugas <i class="fas fa-user-cog ml-1 text-primary"></i></a>
        <a class="collapse-item bg-light mb-2" href="<?= BASEURL; ?>/VerifikasiAdmin"> Verifikasi Admin  <i class="fas fa-user-tag text-primary ml-2"></i>  </a>
      </div>
    </div>
  </li>
  <li class="nav-item mt-n2">
    <a class="nav-link collapsed" data-toggle="collapse" data-target="#collapseFive">
      <i class="fas fa-file"></i>
      <span class="pengaduan">Laporan</span>
    </a>
    <div id="collapseFive" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
      <div class="bg-white py-2 collapse-inner rounded bg-gradient-primary">
        <a class="collapse-item bg-light mb-2" href="<?= BASEURL; ?>/LihatUser/preview_petugas"> Laporan Petugas  <i class="fas fa-user-tag text-primary ml-2"></i>  </a>
      </div>
    </div>
  </li>

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

    <div class="modal fade" id="ModalBuatPetugas" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Modal Edit Petugas</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form method="post" action="<?= BASEURL ?>/LihatUser/TambahPetugas">
          <input hidden type="text" name="id_petugas" id="id" value=" ">
          <div class="form-group">
            <label for="recipient-name" class="col-form-label">Nama Petugas</label>
            <input type="text" class="form-control" id="name" name="nama_petugas" value=" ">
          </div>
          <div class="form-group">
            <label for="message-text" class="col-form-label">Username</label>
            <input type="text" class="form-control" id="username" name="username_petugas" value=" ">
          </div>
          <div class="form-group">
            <label for="message-text" class="col-form-label">Telepon</label>
            <input type="text" class="form-control" id="telp" name="telp" value=" ">
          </div>
          <div class="form-group">
            <label for="message-text" class="col-form-label">Level</label>
            <select class="form-control" name="level" id="level">
              <option disabled>Pilih Salah Satu</option>
              <option value="admin">Admin</option>
              <option value="petugas">petugas</option>
            </select>
          </div>
          
       
      </div>
      <div class="modal-footer">
      <button type="submit" class="btn btn-primary">Tambah</button>
      </form>
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        
      </div>
    </div>
  </div>
</div>
