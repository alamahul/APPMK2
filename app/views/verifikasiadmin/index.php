<div class="container-fluid">

<!-- Page Heading -->
<h1 class="h3 mb-2 text-gray-800">Lihat User</h1>
<p class="mb-4">Ini Semua User <?= $data['judul'] ?></p>

<!-- DataTales Example -->
<div class="card shadow mb-4">
  <div class="card-header py-3">
    <h6 class="m-0 font-weight-bold text-primary">Data User</h6>
  </div>
  <div class="card-body">
    <div class="table-responsive">
      <table class="table table-bordered border border-dark" id="dataTable" width="100%" cellspacing="0">
        <thead class="bg-info">
          <tr class="text-light">
          <th>NO.</th>
            <th>Nama</th>
            <th>Username</th>
            <th>Telepon</th>
            <th>Level</th>
            <th>Status</th>
            <th>Aksi</th>
          </tr>
        </thead>
        <tfoot class="bg-info">
          <tr class="text-light">
          <th>NO.</th>
            <th>Nama</th>
            <th>Username</th>
            <th>Telepon</th>
            <th>Level</th>
            <th>Status</th>
            <th>Aksi</th>
          </tr>
        </tfoot>
        <tbody>
          
          <?php
        //var_dump($data['petugas']);die;
          $no = 1;
          foreach ($data['petugas'] as $petugas) : ?>
          <tr>
              <td><?= $no++ ?></td>
              <td><?= $petugas['nama_petugas'] ?></td>
              <td><?= $petugas['username_petugas'] ?></td>
              <td><?= $petugas['telp'] ?></td>
              <td><?= $petugas['level'] ?></td>
              <td><?= $petugas['status'] ?></td>
              <td>
              <a href="<?= BASEURL; ?>/VerifikasiAdmin/Verifikasi/<?= $petugas['id_petugas'] ?>" class="btn btn-danger btn-block mb-2">Verifikasi</a>
          </td>
          </tr>
         
          <?php endforeach; ?>
          <?php if (count($data['petugas']) == 0)  : ?>
            <tr>
                <td colspan="7" class="text-center">Data tidak ditemukan</td>
            </tr>
            <?php endif; ?>
        </tbody>
      </table>
    </div>
  </div>
</div>

</div>
          </div>