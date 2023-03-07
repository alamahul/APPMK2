<div class="row">

            <!-- Earnings (Monthly) Card Example -->
            <div class="col-xl-4 col-md-6 mb-4">
                <a class="nav-link" href="<?= BASEURL; ?>/verifikasiPengaduan">
              <div class="card border-left-primary shadow h-100 py-2">
                <div class="card-body">
                  <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                      <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">Jumlah Pengaduan</div>
                      <div class="h5 mb-0 font-weight-bold text-gray-800"><?= $data['jumlahPengaduan']; ?></div>
                    </div>
                    <div class="col-auto">
                      <i class="fas fa-file-alt fa-2x text-gray-300"></i>
                    </div>
                  </div>
                </div>
                </a>
              </div>
            </div>

            <!-- Earnings (Monthly) Card Example -->
            <div class="col-xl-4 col-md-6 mb-4">
                <a class="nav-link" href="<?= BASEURL; ?>/verifikasiPengaduan/proses">
              <div class="card border-left-success shadow h-100 py-2">
                <div class="card-body">
                  <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                      <div class="text-xs font-weight-bold text-success text-uppercase mb-1">Pengaduan Belum Diverifikasi</div>
                      <div class="h5 mb-0 font-weight-bold text-gray-800"><?= $data['jumlahStatus0'] ?></div>
                    </div>
                    <div class="col-auto">
                      <i class="fas fa-file-export fa-2x text-gray-300"></i>
                    </div>
                  </div>
                </div>
                </a>
              </div>
            </div>

            <!-- Earnings (Monthly) Card Example -->
            <div class="col-xl-4 col-md-6 mb-4">
                <a class="nav-link" href="<?= BASEURL; ?>/TanggapiPengaduan/proses">
              <div class="card border-left-info shadow h-100 py-2">
                <div class="card-body">
                  <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                      <div class="text-xs font-weight-bold text-info text-uppercase mb-1">Pengaduan Belum Ditanggapi</div>
                      <div class="row no-gutters align-items-center">
                        <div class="col-auto">
                          <div class="h5 mb-0 mr-3 font-weight-bold text-gray-800"><?= $data['jumlahStatusSelesai'] ?></div>
                        </div>
                      </div>
                    </div>
                    <div class="col-auto">
                      <i class="fas fa-file-signature fa-2x text-gray-300"></i>
                    </div>
                  </div>
                </div>
                </a>
              </div>
              
            </div>
            
        </div>


           
        </main>