<?php
  $pengaduan = $data['pengaduan'];
?>
<div style="" class="card shadow">

  <div class="card-header py-3">
    <h6 class="m-0 font-weight-bold text-primary">Detail Pengaduan</h6>
  </div>
  
  <div class="card-body">
  <?php
    if($_SESSION['level'] == 'admin') : ?>
  <a target="__blank" href="<?= BASEURL ?>/cetakLaporan/detail/<?= $pengaduan['id_pengaduan'] ?>" class="btn btn-warning"><i class="fas fa-print">  Cetak Laporan</i></a>
  <?php endif; ?>
  <a href="<?= BASEURL; ?>/TanggapiPengaduan" class="btn btn-secondary">
      <i class="fas fa-chevron-circle-left"></i> Kembali ke Tanggapan Pengaduan
    </a>

    <?php if ($pengaduan['status'] == 'proses'): ?>
      <a href="<?= BASEURL ?>/TanggapiPengaduan/buatTanggapan/<?=$pengaduan['id_pengaduan']; ?>" class="btn btn-light">
      <i class="fas fa-smile"></i> Tanggapi Pengaduan</i>
      </a>
    <?php elseif ($pengaduan['status'] == '0'): ?>
    <button readonly class="btn btn-danger"><i class="fas fa-frown"></i> Belum bisa diverifikasis</button>
    <?php else : ?>
    
    <?php endif; ?>
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
    <div class="table-responsive">
      <table class="table table-bordered mt-0" id="dataTable" width="100%" cellspacing="0">
        <thead class="thead-light">
          <tr>
            <th colspan="3">Pengirim Laporan</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td colspan="1"> NIK </td>
            <td colspan="2"><?= $pengaduan['nik']; ?></td>
          </tr>
          <tr>
            <td colspan="1"> Nama </td>
            <td colspan="2"><?= $pengaduan['nama']; ?></td>
          </tr>
          <tr>
            <td colspan="1"> Nomor Telepon </td>
            <td colspan="2"><?= $pengaduan['telp']; ?></td>
          </tr>
          <?php ?>
        </tbody>
      </table>
    </div>
    </div>
    
    <div class="card-footer">
    
    </div>
</div>


<!-- Modal -->
<div class="modal fade" id="modalVerifikasi" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle">Pesan</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        Apakah Anda yakin ingin memverifikasi pengaduan ini?
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <a href="<?= BASEURL; ?>/verifikasiLaporan/verifikasi/<?= $pengaduan['id_pengaduan'] ?>" class="btn btn-primary">Yakin!!!</a>
      </div>
    </div>
  </div>
</div>
