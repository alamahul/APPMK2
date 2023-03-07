<?php


class PengaduanModel {
     private $tabelPengaduan = 'pengaduan';
     private $tabeltanggapan = 'tanggapan';
     private $tabelUser = 'masyarakat';
     private $tabelPetugas = 'petugas';
     private $db;
     public function __construct()
     {
          $this->db = new Database;
     }
     public function ambilSemuaPengaduan(){
        $nik = $_SESSION['nik'];
        $query = "SELECT * FROM ". $this->tabelPengaduan ." WHERE nik=:nik";
        $this->db->query($query);
        $this->db->bind('nik', $nik);
        return $this->db->resultSet();
     }
     public function ambilSemuaPengaduanYangStatusProses(){
      $nik = $_SESSION['nik'];
      $query = "SELECT * FROM ". $this->tabelPengaduan ." WHERE nik=:nik AND status='proses'";
      $this->db->query($query);
      $this->db->bind('nik', $nik);
      return $this->db->resultSet();
   }
   public function ambilSemuaPengaduanYangStatus0(){
      $nik = $_SESSION['nik'];
      $query = "SELECT * FROM ". $this->tabelPengaduan ." WHERE nik=:nik AND status = '0'";
      $this->db->query($query);
      $this->db->bind('nik', $nik);
      return $this->db->resultSet();
   }
   public function ambilSemuaPengaduanYangStatusSelesai(){
      $nik = $_SESSION['nik'];
      $query = "SELECT * FROM ". $this->tabelPengaduan ." WHERE nik=:nik AND status='selesai'";
      $this->db->query($query);
      $this->db->bind('nik', $nik);
      return $this->db->resultSet();
   }
     public function ambilPengaduanDenganID($id){
        $nik = $_SESSION['nik'];
        $query = "SELECT * FROM ". $this->tabelPengaduan ." WHERE nik=:nik AND id_pengaduan =:id";
        $this->db->query($query);
        $this->db->bind('nik', $nik);
        $this->db->bind('id', $id);
      //  var_dump($this->db->single());die;
        return $this->db->single();
     }
     public function tambah($data, $file){
        
        
        $tgl_pengaduan = $data['tgl_pengaduan'];
        $nik = $_SESSION['nik'];
        $judul_laporan = $data['judul_laporan'];
        $isi_laporan = $data['isi_laporan'];
        $alamat_pengaduan = $data['alamat_pengaduan'];
        $lokasi_foto = $file['foto']['tmp_name'];
        $nama_foto = $file['foto']['name'];
        $error_foto = $file['foto']['error'];
        $size_foto = $file['foto']['size'];
        $status = '0';

        $ekstensiFotoValid = ['jpg', 'jpeg', 'png', 'webp'];
        $ekstensiFoto = explode('.', $nama_foto);
        $ekstensiFoto = strtolower(end($ekstensiFoto));


        if(strlen($judul_laporan) > 25){
           $_SESSION['warning'] = 'Judul Laporan tidak boleh Lebih Dari 25 Karakter';
           return 0;
        }elseif ($error_foto === 4) {
            $_SESSION['warning'] = 'Belum memasukan Foto';
            return 0;
        }elseif ($size_foto > 1000000) {
            $_SESSION['warning'] = 'Foto yang lebih dari 1 Megabyte';
            return 0;
        }elseif( !in_array($ekstensiFoto, $ekstensiFotoValid)) {
            $_SESSION['warning'] = 'file yang bukan Foto(format = jpg / jpeg / png / webp )';
            return 0;
        }else{
            $nama_foto_baru = 'Foto_dari_'.$nik.'_'.uniqid().'_tanggal_'.date('d-m-Y');
            $nama_foto_baru .= '.';
            $nama_foto_baru .= $ekstensiFoto;
            move_uploaded_file($lokasi_foto, 'img/'. $nama_foto_baru);
            $query = "INSERT INTO ". $this->tabelPengaduan ."(tgl_pengaduan, nik, judul_laporan, isi_laporan, alamat_pengaduan, foto, status) VALUES (:tgl_pengaduan,:nik,:judul_laporan,:isi_laporan,:alamat_pengaduan,:nama_foto, :status)";
            $this->db->query($query);
            $this->db->bind('tgl_pengaduan', $tgl_pengaduan);
            $this->db->bind('nik', $nik);
            $this->db->bind('judul_laporan', $judul_laporan);
            $this->db->bind('isi_laporan', $isi_laporan);
            $this->db->bind('alamat_pengaduan', $alamat_pengaduan);
            $this->db->bind('nama_foto', $nama_foto_baru);
            $this->db->bind('status', $status);
            $this->db->execute();
           return $this->db->rowCount();
        }
        
     }
     public function ambilSemuaPengaduanDenganPetugas(){
      $query = "SELECT * FROM ". $this->tabelPengaduan;
      $this->db->query($query);
      // var_dump($this->db->resultSet());die;
      return $this->db->resultSet();     
     }
     public function ambilSemuaPengaduanDenganPetugasStatusProses(){
      $query = "SELECT * FROM ". $this->tabelPengaduan . " WHERE status='proses'";
      $this->db->query($query);
      // var_dump($this->db->resultSet());die;
      return $this->db->resultSet();     
     }
     public function ambilSemuaPengaduanDenganPetugasStatus0(){
      $query = "SELECT * FROM ". $this->tabelPengaduan . " WHERE status = '0'";
      $this->db->query($query);
      // var_dump($this->db->resultSet());die;
      return $this->db->resultSet();     
     }
     public function ambilSemuaPengaduanDenganPetugasStatusSelesai(){
      $query = "SELECT * FROM ". $this->tabelPengaduan . " WHERE status='selesai'";
      $this->db->query($query);
      // var_dump($this->db->resultSet());die;
      return $this->db->resultSet();     
     }
     public function ambilPengaduanDenganIDPetugas($id){
      $query = "SELECT * FROM ".
      // Memilih Tabel
       $this->tabelPengaduan.",". 
       $this->tabelUser .
       " WHERE ". $this->tabelPengaduan .".id_pengaduan =:id".
      // Meralasikan Tabel;
      " AND " .$this->tabelPengaduan. ".nik = ".$this->tabelUser. ".nik";
      $this->db->query($query);
      $this->db->bind('id', $id);
      // var_dump($this->db->single());die;
      return $this->db->single();
   }

   public function verifikasidenganId($id){
      $query = "UPDATE ". $this->tabelPengaduan ." SET status = 'proses' WHERE id_pengaduan =:id";
      $_SESSION['warning'] = 'diverifikasi karena Sistem dari Aplikasi';
      $this->db->query($query);
      $this->db->bind('id', $id);
      $this->db->execute();
      // var_dump($this->db->query($query));die;
      return $this->db->rowCount();  
   }
   public function tambahTanggapan($data)
   {
      //var_dump($data);die;
      $id_pengaduan = $data['id_pengaduan'];
      $tgl_tanggapan = $data['tgl_tanggapan'];
      $tanggapan = $data['tanggapan'];
      $id_petugas = $data['id_petugas'];
      // var_dump($id_pengaduan.$tgl_tanggapan.$tanggapan.$id_petugas);die;
      if (strlen($tanggapan) < 1){
         $_SESSION['warning'] = 'ditanggapi karena Anda tidak mengisi Tanggapan';
         return 0;
      }else{
         $_SESSION['warning'] = 'ditanggapi karena Sistem dari Aplikasi';
         $query = "INSERT INTO ". $this->tabeltanggapan ."(id_pengaduan, tgl_tanggapan, tanggapan, id_petugas) VALUES (:id_pengaduan, :tgl_tanggapan, :tanggapan, :id_petugas)";
         $this->db->query($query);
         $this->db->bind('id_pengaduan', $id_pengaduan);
         $this->db->bind('tgl_tanggapan', $tgl_tanggapan);
         $this->db->bind('id_petugas', $id_petugas);
         $this->db->bind('tanggapan', $tanggapan);
         $this->db->execute();
        return $this->db->rowCount();
      }
   }
   public function statusSelesai($data)
   {
      $query = "UPDATE " .$this->tabelPengaduan. " SET status = 'selesai' WHERE id_pengaduan =:id";
         $this->db->query($query);
         $this->db->bind('id', $data['id_pengaduan']);
         $this->db->execute();
         $this->db->rowCount();
   }
   public function ambilPengaduandanTanggapanDenganID($id)
   {
      $query = "SELECT * FROM ". 
      // pilih tabel
      $this->tabelPengaduan.",".
      $this->tabeltanggapan.",".
      $this->tabelPetugas.
      " WHERE ".
      // Relasi tabel
      $this->tabelPengaduan.".id_pengaduan = ". $this->tabeltanggapan. ".id_pengaduan AND ".
      $this->tabeltanggapan.".id_petugas = ". $this->tabelPetugas. ".id_petugas AND ".
      // Kondisi
      $this->tabelPengaduan.".id_pengaduan =:id";

      $this->db->query($query);
      $this->db->bind('id', $id);
      $this->db->execute();
      // var_dump($this->db->resultSet());die;
      return $this->db->single();
   }
   public function ambilJumlahPengaduan() 
    {  
        // var_dump($nik);die;
       if (isset($_SESSION['nik'])) {
         $jumlah = $this->ambilSemuaPengaduan();
         $jumlah = count($jumlah);
         return $jumlah;
       }else{
         $jumlah = $this->ambilSemuaPengaduanDenganPetugas();
         $jumlah = count($jumlah);
         return $jumlah;
       }
    }
    public function ambilJumlahPengaduanStatus0() 
    {
      if (isset($_SESSION['nik'])) {
         $jumlah = $this->ambilSemuaPengaduanYangStatus0();
         $jumlah = count($jumlah);
         return $jumlah;
       }else{
         $jumlah = $this->ambilSemuaPengaduanDenganPetugasStatus0();
         $jumlah = count($jumlah);
         return $jumlah;
       }
    }
    public function ambilJumlahPengaduanStatusProses() 
    {
      if (isset($_SESSION['nik'])) {
         $jumlah = $this->ambilSemuaPengaduanYangStatusProses();
         $jumlah = count($jumlah);//die;
         return $jumlah;
       }else{
         $jumlah = $this->ambilSemuaPengaduanDenganPetugasStatusProses();
         $jumlah = count($jumlah);
         return $jumlah;
       }
    }
    public function ambiljumlahPengaduanStatusSelesai() 
    {
      if (isset($_SESSION['nik'])) {
         $jumlah = $this->ambilSemuaPengaduanYangStatusSelesai();
         $jumlah = count($jumlah);//die;
         return $jumlah;
       }else{
         $jumlah = $this->ambilSemuaPengaduanDenganPetugasStatusSelesai();
         $jumlah = count($jumlah);
         return $jumlah;
       }
    }
}