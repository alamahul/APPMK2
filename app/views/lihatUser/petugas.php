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
              <a href="<?= BASEURL; ?>/LihatUser/hapusPetugas/<?= $petugas['id_petugas'] ?>"><i class="btn btn-danger fas fa-trash-alt"></i></a>
              <button type="button" class="btn btn-warning modalUbahData" id="modalubah" data-id-ubah="<?= $petugas['id_petugas'] ?>" data-toggle="modal" data-target="#ModalEditPetugas"><i class="fas fa-edit"></i></button>
          </td>
          </tr>
          <?php endforeach; ?>
         
        </tbody>
      </table>
    </div>
  </div>
  <div class="card-footer">
  <div class="copyright text-center my-auto">
            <span>DIBUAT OLEH <i class="fas fa-heart"></i> Alamahul Bayan &copy; 2023 </span>
            <a href="#">Hubungi Saya</a>
          </div>
  </div>
          </div>
          </div>
          </div>


<div class="modal fade" id="ModalEditPetugas" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Modal Edit Petugas</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form method="post" action="<?= BASEURL ?>/LihatUser/UbahPetugas">
          <input hidden type="text" name="id_petugas" id="id_ubah">
          <div class="form-group">
            <label for="recipient-name" class="col-form-label">Nama Petugas</label>
            <input type="text" class="form-control" id="name_ubah" name="nama_petugas">
          </div>
          <div class="form-group">
            <label for="message-text" class="col-form-label">Username</label>
            <input type="text" class="form-control" id="username_ubah" name="username_petugas">
          </div>
          <div class="form-group">
            <label for="message-text" class="col-form-label">Telepon</label>
            <input type="text" class="form-control" id="telp_ubah" name="telp">
          </div>
          <div class="form-group">
            <label for="message-text" class="col-form-label">Level</label>
            <select class="form-control" name="level" id="level_ubah">
              <option disabled>Pilih Salah Satu</option>
              <option value="admin">Admin</option>
              <option value="petugas">petugas</option>
            </select>
          </div>
          
       
      </div>
      <div class="modal-footer">
      <button type="submit" class="btn btn-primary">Ubah</button>
      </form>
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        
      </div>
    </div>
  </div>
</div>


