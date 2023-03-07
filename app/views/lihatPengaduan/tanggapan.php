<?php
   $pengaduan = $data['pengaduan'];
  // var_dump($pengaduan);die;
?>
<div style="" class="card shadow">

  <div class="card-header py-3">
    <h6 class="m-0 font-weight-bold text-primary">Tanggapan Pengaduan</h6>
  </div>
  
  <div class="card-body">
    
  <?php if (isset($_SESSION['level'])) :  ?>
    <a href="<?= BASEURL; ?>/VerifikasiPengaduan/DataPengaduan" class="btn btn-secondary mb-3">
    <?php else: ?>
      <a href="<?= BASEURL; ?>/LihatPengaduan" class="btn btn-secondary mb-3">
    <?php endif ?>
      <i class="fas fa-chevron-circle-left"></i> Kembali ke lihat Pengaduan
    </a>
    <div class="table-responsive text-center">
      <table class="table table-bordered mt-0" id="dataTable" width="100%" cellspacing="0">
        <thead class="thead-light">
          <tr>
            <th>ID Tanggapan</th>
            <th>Tanggal Tanggapan</th>
            <th>ID Petugas</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td><?= $pengaduan['id_tanggapan']; ?></td>
            <td><?= $pengaduan['tgl_tanggapan']; ?></td>
            <td><?= $pengaduan['id_petugas']; ?></td>
          </tr>
          <?php ?>
        </tbody>
      </table>
    </div>
    <div class="table-responsive text-center">
      <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
        <thead class="thead-light">
          <tr><th>Tanggapan</th></tr>
        </thead>
        <tbody>
          <tr><td><p>
            <?= $pengaduan['tanggapan']; ?>
          </p>
          </td></tr>
        </tbody>
      </table>
    </div>
    <div class="table-responsive">
      <table class="table table-bordered mt-0" id="dataTable" width="100%" cellspacing="0">
        <thead class="thead-light">
          <tr>
            <th colspan="3">Petugas yang Menanggapi</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td colspan="1"> Nama Petugas </td>
            <td colspan="2"><?= $pengaduan['nama_petugas']; ?></td>
          </tr>
          <tr>
            <td colspan="1">  Nomor Telepon </td>
            <td colspan="2"><?= $pengaduan['telp']; ?></td>
          </tr>
          <tr>
            <td colspan="1"> Level</td>
            <td colspan="2"><?= $pengaduan['level']; ?></td>
          </tr>
          <?php ?>
        </tbody>
      </table>
    </div>
    </div>
</div>
