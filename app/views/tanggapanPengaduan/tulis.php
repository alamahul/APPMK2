<div class="row">
  <div class="col-lg-6">
    <?= Flasher::flash(); ?>
  
  </div>
</div>
<div class="container-fluid" style="height:90%">


<form class="user" method="post" enctype="multipart/form-data" action="<?= BASEURL; ?>/TanggapiPengaduan/tulis">
    <div class="form-group">
    <h5>ID Petugas</h5>
        <input readonly class="form-control" type="text" name="id_petugas" id="alamat_pengaduan" required value="<?= $_SESSION['id_petugas'] ?>">
    </div>
    <div class="form-group">
    <h5>ID Pengaduan</h5>
        <input readonly class="form-control" type="text" name="id_pengaduan" id="alamat_pengaduan" required value="<?= $data['id'] ?>">
    </div>
    <div class="form-group">
      <h5>Tanggapan</h5>
      <input class="form-control" id="x" type="hidden" name="tanggapan" id="isi_laporan" cols="300" rows="10">
      <trix-editor input="x"></trix-editor>
    </div>
    <div class="form-group">
      <h5>Tanggal tanggapan</h5>
      <input type="text" class="form-control tgl_pengaduan" name="tgl_tanggapan" id="tanggal" readonly value="<?= date('Y-m-d'); ?>">
    </div>
    <div class="form-group">
    </div>
    <button class="btn btn-success" type="submit">
      <i class="fas fa-upload"></i>
      Kirim Tanggapan
    </button>

    <a href="<?= BASEURL; ?>/TanggapiPengaduan" class="btn btn-secondary">
      <i class="fas fa-chevron-circle-left"></i> Kembali ke Tanggapan Pengaduan
    </a>
    <?php // var_dump($_POST); var_dump($_FILES); ?>
  </form>
</div>