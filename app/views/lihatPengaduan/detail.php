<?php
  $pengaduan = $data['pengaduan'];
?>
<div style="" class="card shadow">

  <div class="card-header py-3">
    <h6 class="m-0 font-weight-bold text-primary">Detail Pengaduan</h6>
  </div>
  
  <div class="card-body">
  <a href="<?= BASEURL; ?>/LihatPengaduan" class="btn btn-secondary mb-3">
      <i class="fas fa-chevron-circle-left"></i> Kembali ke lihat Pengaduan
    </a>
    <div class="table-responsive text-center">
      <table class="table table-bordered mt-0" id="dataTable" width="100%" cellspacing="0">
        <thead class="thead-light">
          <tr>
            <th>ID Pengaduan</th>
            <th>Tanggal Pengaduan</th>
            <th>Status</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td><?= $pengaduan['id_pengaduan']; ?></td>
            <td><?= $pengaduan['tgl_pengaduan']; ?></td>
            <td><?= $pengaduan['status']; ?></td>
          </tr>
          <?php ?>
        </tbody>
      </table>
    </div>
    <div class="table-responsive text-center">
      <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
        <thead class="thead-light">
          <tr><th>Judul Laporan</th></tr>
        </thead>
        <tbody>
          <tr><td><p>
            <?= $pengaduan['judul_laporan']; ?>
          </p>
          </td></tr>
        </tbody>
      </table>
    </div>
    <div class="table-responsive text-center">
      <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
        <thead class="thead-light">
          <tr><th>Isi Laporan</th></tr>
        </thead>
        <tbody>
          <tr><td><p>
            <?= $pengaduan['isi_laporan']; ?>
          </p>
          </td></tr>
        </tbody>
      </table>
    </div>
    <div class="table-responsive text-center">
      <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
        <thead class="thead-light">
          <tr><th>Alamat Pengaduan</th></tr>
        </thead>
        <tbody>
          <tr><td><p>
            <?= $pengaduan['alamat_pengaduan']; ?>
          </p>
          </td></tr>
        </tbody>
      </table>
    </div>
    <div class="table-responsive text-center">
      <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
        <thead class="thead-light">
          <tr><th>Foto Laporan</th></tr>
        </thead>
        <tbody>
          <tr><td><img style="width:500px;" src="<?= BASEURL; ?>/img/<?= $pengaduan['foto'] ?> " class="img-fluid rounded" alt="Foto Laporan">
          </td></tr>
        </tbody>
      </table>
    </div>
    </div>
    <div class="card-footer">
    <?php if ($pengaduan['status'] == '0'): ?>
    <button readonly class="btn btn-light btn-lg btn-block"><i class="fas fa-clipboard-check"></i> Belum di Verifikasi dan di Validasi laporan <i class="fas fa-times"></i></button>
    <?php elseif ($pengaduan['status'] == 'proses'): ?>
    <button readonly class="btn btn-success btn-lg btn-block"><i class="fas fa-clipboard-check"></i> Sudah di Verifikasi dan di Validasi laporan <i class="fas fa-check"></i></button>
    <?php else : ?>
    <button readonly class="btn btn-success btn-lg btn-block"><i class="fas fa-clipboard-check"></i> Sudah di Verifikasi dan di Validasi laporan <i class="fas fa-check"></i></button>
    <!-- Button trigger modal -->
    <?php endif; ?>
    </div>
</div>