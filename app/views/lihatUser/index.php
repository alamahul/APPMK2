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
            <th>NIK</th>
            <th>Nama</th>
            <th>Alamat</th>
            <th>Username</th>
            <th>Telepon</th>
            <th>Aksi</th>
          </tr>
        </thead>
        <tfoot class="bg-info">
          <tr class="text-light">
          <th>NO.</th>
          <th>NIK</th>
            <th>Nama</th>
            <th>Alamat</th>
            <th>Username</th>
            <th>Telepon</th>
            <th>Aksi</th>
          </tr>
        </tfoot>
        <tbody>
          
          <?php
          $no = 1;
          foreach ($data['masyarakat'] as $masyarakat) : ?>
          <tr>
              <td><?= $no++ ?></td>
              <td><?= $masyarakat['nik'] ?></td>
              <td><?= $masyarakat['nama'] ?></td>
              <td><?= $masyarakat['alamat'] ?></td>
              <td><?= $masyarakat['username'] ?></td>
              <td><?= $masyarakat['telp']  ?></td>
              <td>
              <a href="<?= BASEURL; ?>/LihatUser/HapusMasyarakat/<?= $masyarakat['nik'] ?>" class="btn btn-danger btn-block mb-2">Hapus</a>
             
            
              <!-- <a href="<?= BASEURL; ?>/LihatUser/CheckMasyarakat/<?= $masyarakat['nik'] ?>" class="btn btn-info btn-block mb-2">Check</a> -->
          </td>
          </tr>
          <?php endforeach; ?>
         
        </tbody>
      </table>
    </div>
  </div>
</div>

</div>
