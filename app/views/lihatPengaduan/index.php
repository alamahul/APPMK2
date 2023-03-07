<div class="container-fluid">

          <!-- Page Heading -->
          <h1 class="h3 mb-2 text-gray-800">Lihat Pengaduan</h1>
          <p class="mb-4">Ini Semua Pengaduan Anda</p>

          <!-- DataTales Example -->
          <div class="card shadow mb-4">
            <div class="card-header py-3">
              <h6 class="m-0 font-weight-bold text-primary">Data Pengaduan</h6>
            </div>
            <div class="card-body">
              <div class="table-responsive">
                <table class="table table-bordered border border-dark" id="dataTable" width="100%" cellspacing="0">
                  <thead class="bg-info">
                    <tr class="text-light">
                      <th>No</th>
                      <th>Tanggal Pengaduan</th>
                      <th>Judul Pengaduan</th>
                      <th>Alamat Pengaduan</th>
                      <th>Status</th>
                      <th>Aksi</th>
                    </tr>
                  </thead>
                  <tfoot class="bg-info">
                    <tr class="text-light">
                      <th>No</th>
                      <th>Tanggal Pengaduan</th>
                      <th>Judul Pengaduan</th>
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
                      <td><?= $pengaduan['judul_laporan'] ?></td>
                      <td><?= $pengaduan['alamat_pengaduan'] ?></td>
                      <td><?= $pengaduan['status'] ?></td>
                      <td>
                        <a href="<?= BASEURL; ?>/LihatPengaduan/detail/<?= $pengaduan['id_pengaduan'] ?>" class="btn btn-info"><span class="fas fa-info"></span></a>
                        <?php if ($pengaduan['status'] == '0' || $pengaduan['status'] == 'proses') : ?>
                          <a class="btn btn-danger"><span class=" fas fa-sad-cry"></span></a>
                          <?php else : ?>
                          <a href="<?= BASEURL; ?>/LihatPengaduan/lihatTanggapan/<?= $pengaduan['id_pengaduan'] ?>" class="btn btn-primary"><span class=" fas fa-smile"></span></a>
                          <?php endif; ?>
                    </td>
                    </tr>
                    <?php endforeach; ?>
                   
                  </tbody>
                </table>
              </div>
            </div>
          </div>

        </div>