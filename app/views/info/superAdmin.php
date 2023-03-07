<div class="row">

            <!-- Earnings (Monthly) Card Example -->
            <div class="col-xl-3 col-md-6 mb-4">
                <a class="nav-link" href="<?= BASEURL; ?>/LihatUser/petugas">
              <div class="card border-left-primary shadow h-100 py-2">
                <div class="card-body">
                  <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                      <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">Jumlah Petugas</div>
                      <div class="h5 mb-0 font-weight-bold text-gray-800"><?= $data['jumlahpetugas']; ?></div>
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
            <div class="col-xl-3 col-md-6 mb-4">
                <a class="nav-link" href="<?= BASEURL; ?>/verifikasiLaporan/proses">
              <div class="card border-left-success shadow h-100 py-2">
                <div class="card-body">
                  <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                      <div class="text-xs font-weight-bold text-success text-uppercase mb-1">Jumlah Petugas Level Admin</div>
                      <div class="h5 mb-0 font-weight-bold text-gray-800"><?= $data['jumlahlevelAdmin'] ?></div>
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
            <div class="col-xl-3 col-md-6 mb-4">
                <a class="nav-link" href="<?= BASEURL; ?>/TanggapiLaporan/selesai">
              <div class="card border-left-info shadow h-100 py-2">
                <div class="card-body">
                  <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                      <div class="text-xs font-weight-bold text-info text-uppercase mb-1">Jumlah Petugas Level Petugas</div>
                      <div class="row no-gutters align-items-center">
                        <div class="col-auto">
                          <div class="h5 mb-0 mr-3 font-weight-bold text-gray-800"><?= $data['jumlahlevelPetugas'] ?></div>
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
            <div class="col-xl-3 col-md-6 mb-4">
                <a class="nav-link" href="<?= BASEURL; ?>/TanggapiLaporan/selesai">
              <div class="card border-left-info shadow h-100 py-2">
                <div class="card-body">
                  <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                      <div class="text-xs font-weight-bold text-info text-uppercase mb-1">Admin Yang Belum di Verifikasi</div>
                      <div class="row no-gutters align-items-center">
                        <div class="col-auto">
                          <div class="h5 mb-0 mr-3 font-weight-bold text-gray-800"><?= $data['jumlahlevelAdminstatus0'] ?></div>
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
<div class="row">

</div>


           
        </main>