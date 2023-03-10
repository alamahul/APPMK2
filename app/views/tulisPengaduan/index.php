<div class="row">
  <div class="col-lg-6">
    <?= Flasher::flash(); ?>
  
  </div>
</div>
<div class="container-fluid" style="height:90%">


  <form class="user" method="post" enctype="multipart/form-data" action="<?= BASEURL; ?>/TulisPengaduan/tulis">
  <div class="form-group">
      <h5>Judul Laporan</h5>
      <input class="form-control" type="text" name="judul_laporan" id="judul_laporan" required>
    </div>
    <div class="form-group">
      <h5>Isi Laporan</h5>
      <input class="form-control" id="x" type="hidden" name="isi_laporan" id="isi_laporan" cols="300" rows="10">
      <trix-editor input="x"></trix-editor>
    </div>
    <div class="form-group">
    <h5>Alamat Pengaduan</h5>
        <input class="form-control" type="text" name="alamat_pengaduan" id="alamat_pengaduan" required>
    </div>
    <div class="text-center">
     <label for="img">Foto</label>
    </div>
    <div class="form-group text-center">

      <img style="width:300px; height:300px;" src="<?= BASEURL; ?>/img/default.jpeg" class="img-thumbnail rounded" alt="preview" id="target" name="img">
    </div>
    <div style="font-size:3rem;" class="text-center">

      <i class="fas fa-file-upload"></i>
    </div>
    <div class="form-group text-center">


      <input style="height:50px" type="file" class="fas fa-file-upload dorm-control btn btn-info" name="foto" id="src">


    </div>
    <div class="form-group text-center">
      <label for="tgl_pengaduan">Tanggal Pengaduan</label>
      <input type="text" class="form-control tgl_pengaduan" name="tgl_pengaduan" id="tanggal" readonly value="<?= date('Y-m-d'); ?>">
    </div>
    <div class="form-group">
    </div>
    <button class="btn btn-success" type="submit">
      <i class="fas fa-upload"></i>
      Kirim Pengaduan
    </button>

    <a href="<?= BASEURL; ?>" class="btn btn-secondary">
      <i class="fas fa-chevron-circle-left"></i> Kembali ke Home
    </a>
    <?php // var_dump($_POST); var_dump($_FILES); ?>
  </form>
</div>
<script src="<?= BASEURL ?>/js/scriptPreviewImage.js"></script>