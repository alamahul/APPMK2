<div class="container-fluid">

<!-- Page Heading -->

<button class="btn btn-warning no-print mb-2" onclick="return window.print()">
   <span class="fas fa-print"></span> Cetak Laporan
  </button>

<!-- DataTales Example -->
<div class="card shadow mb-4">
  <div class="card-header py-3 text-center text-primary">
    
    <img class="mb-2" src="<?= BASEURL ?>/logoGarut.png" alt="logo garut" width="100">
        <h1 class="judul">PEMERINTAH KABUPATEN GARUT</h1>
    
  </div>
  
  <div class="card-body">
    <div class="table-responsive">
        <h3 class="text-center mb-4">Laporan Pengaduan</h3>
      <table class="table table-bordered border border-dark" id="dataTable" width="100%" cellspacing="0">
      <thead class="bg-light">
          <tr class="text-secondary">
          <th>No</th>
                      <th>Tanggal Pengaduan</th>
                      <th>NIK</th>
                      <th>Judul Laporan</th>
                      <th>Alamat Pengaduan</th>
                      <th>Status</th>
          </tr>
        </thead>
        <tfoot class="bg-light">
          <tr class="text-secondary">
          <th>No</th>
                      <th>Tanggal Pengaduan</th>
                      <th>NIK</th>
                      <th>Judul Laporan</th>
                      <th>Alamat Pengaduan</th>
                      <th>Status</th>
          </tr>
        </tfoot>
        <tbody>
          
          <?php
          $no = 1;
          foreach ($data['pengaduan'] as $pengaduan) : ?>
          <tr>
            


          <td><?= $no++  ?></td>
                      <td><?= $pengaduan['tgl_pengaduan'] ?></td>
                      <td><?= $pengaduan['nik'] ?></td>
                      <td><?= $pengaduan['judul_laporan'] ?></td>
                      <td><?= $pengaduan['alamat_pengaduan'] ?></td>
                      <td><?= $pengaduan['status'] ?></td>
          </tr>
          <?php endforeach; ?>
         
        </tbody>
      </table>
    </div>
  </div>
  <div class="card-footer">
            <div class="row text-primary">
                <div class="col-12 text-right">
                Garut, <?= date('d M Y') ?>
                </div>
                <div class="col-12 text-right mb-5">
                Pengaduan
                </div>
                <div class="col-12 text-right">
                Laporan dari <?= $_SESSION['username'] ?>
                </div>
            </div>
  </div>
          </div>
          </div>
          </div>

