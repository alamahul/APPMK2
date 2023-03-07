<?php foreach($data['pengaduan'] as $rows); ?>

<div class="container-fluid">

          <!-- Page Heading -->
          <h1 class="h3 mb-2 text-gray-800">Data Pengaduan</h1>
          <p class="mb-4">Ini Semua Pengaduan Masyarakat</p>

          <!-- DataTales Example -->
          <div class="card shadow mb-4">
            <div class="card-header py-3">
              <h6 class="m-0 font-weight-bold text-primary">Data Pengaduan</h6>

            </div>
            <div class="card-body">

            <!-- <?php if ($rows['status'] == '0') : ?>
                <a target="_blank" class="btn btn-warning mb-4" href="<?= BASEURL; ?>/cetakPengaduan/status0">Cetak Laporan Pengaduan</a>
                <?php elseif ($rows['status'] == 'proses') : ?>
                <a target="_blank" class="btn btn-warning mb-4" href="<?= BASEURL; ?>/cetakPengaduan/statusProses">Cetak Laporan Pengaduan</a>
                <?php elseif ($rows['status'] == 'selesai') : ?>
                <a target="_blank" class="btn btn-warning mb-4" href="<?= BASEURL; ?>/cetakPengaduan/statusSelesai">Cetak Laporan Pengaduan</a>
            <?php endif; ?> -->



              <div class="table-responsive">
                <table class="table table-bordered border border-dark" id="dataTable" width="100%" cellspacing="0">
                  <thead class="bg-info">
                    <tr class="text-light">
                      <th>No</th>
                      <th>Tanggal Pengaduan</th>
                      <th>NIK</th>
                      <th>Judul Laporan</th>
                      <th>Alamat Pengaduan</th>
                      <th>Status</th>
                      <th>Aksi</th>
                    </tr>
                  </thead>
                  <tfoot class="bg-info">
                    <tr class="text-light">
                      <th>No</th>
                      <th>Tanggal Pengaduan</th>
                      <th>NIK</th>
                      <th>Judul Laporan</th>
                      <th>Alamat Pengaduan</th>
                      <th>Status</th>
                      <th>Aksi</th>
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
                      <td>
                        <a href="<?= BASEURL; ?>/VerifikasiPengaduan/detail/<?= $pengaduan['id_pengaduan'] ?>" class="btn btn-light btn-block mb-2">Detail</a>
                        
                    </td>
                    </tr>
                    <?php endforeach; ?>
                   
                  </tbody>
                </table>
              </div>
            </div>
          </div>
        