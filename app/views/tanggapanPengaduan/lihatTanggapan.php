<div class="container-fluid">

          <!-- Page Heading -->
          <h1 class="h3 mb-2 text-gray-800">Lihat Tanggapan</h1>
          <p class="mb-4">Semua Tanggapan</p>

          <!-- DataTales Example -->
          <div class="card shadow mb-4">
            <div class="card-header py-3">
              <h6 class="m-0 font-weight-bold text-primary">Data Tanggapan</h6>
            </div>
            <div class="card-body">
              <div class="table-responsive">
                <table class="table table-bordered border border-dark" id="dataTable" width="100%" cellspacing="0">
                  <thead class="bg-info">
                    <tr class="text-light">
                      <th>No</th>
                      <th>Tanggal Tanggapan</th>
                      <th>Tanggapan</th>
                      <th>Judul Laporan</th>
                      <th>Nama Petugas</th>
                      <th>Level Petugas</th>
                  </thead>
                  <tfoot class="bg-info">
                    <tr class="text-light">
                      <th>No</th>
                      <th>Tanggal Tanggapan</th>
                      <th>Tanggapan</th>
                      <th>Judul Laporan</th>
                      <th>Nama Petugas</th>
                      <th>Level Petugas</th>
                    </tr>
                  </tfoot>
                  <tbody>
                    
                    <?php
                    $no = 1;
                    foreach ($data['tanggapan'] as $tanggapan) : ?>
                    <tr>
                      <td><?= $no++  ?></td>
                      <td><?= $tanggapan['tgl_tanggapan'] ?></td>
                      <td><?= $tanggapan['tanggapan'] ?></td>
                      <td><?= $tanggapan['judul_laporan'] ?></td>
                      <td><?= $tanggapan['nama_petugas'] ?></td>
                      <td><?= $tanggapan['level'] ?></td>
              
                      
            
                    </td>
                    </tr>
                    <?php endforeach; ?>
                   
                  </tbody>
                </table>
              </div>
            </div>
          </div>