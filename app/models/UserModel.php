<?php


class UserModel {
     private $tableMasyarakat = 'masyarakat';
     private $tablePetugas = 'petugas';

     private $db;
     public function __construct()
     {
          $this->db = new Database;
     }
     public function getUser(){
      if ($_SESSION['level']=='admin' || $_SESSION['level']=='petugas') {
         return $_SESSION['nama_petugas'];
      }else{
         return $_SESSION['nama'];
      }
    }
     public function masuk($data){
        $nik = $data['nik'];
        $pass = $data['password'];
      //   if(strlen($nik) != 16){
      //      $_SESSION['warning'] = 'NIK tidak sama dengan 16 nomber';
      //      return 0;
      //   }elseif(strlen($pass) < 8){
      //       $_SESSION['warning'] = 'Password kurang dari 8 karakter';
      //       return 0;
      //   }else{
            $_SESSION['warning'] = 'nik atau Password yang Salah';
            $query = "SELECT * FROM ". $this->tableMasyarakat ." WHERE nik=:nik AND password =:password";
            $this->db->query($query);
            $this->db->bind('nik', $nik);
            $this->db->bind('password', $pass);
            $this->db->execute();
           $data = $this->db->single();
           $_SESSION['data'] = $data;
           return $this->db->rowCount();
          
           
      //   }
        
     }
     public function masukPetugas($data){
      $username = $data['username'];
      $pass = $data['password'];
      // var_dump($data);die;
      if(strlen($username) < 2){
      $_SESSION['warning'] = 'Username kurang dari 3 karakter';
      return 0;
      }elseif(strlen($pass) < 8){
      $_SESSION['warning'] = 'Password kurang dari 8 karakter';
      return 0;
      }else{
      $_SESSION['warning'] = 'Username atau Password yang Salah';
          $query = "SELECT * FROM ". $this->tablePetugas ." WHERE username_petugas=:username AND password =:password";
          $this->db->query($query);
          $this->db->bind('username', $username);
          $this->db->bind('password', $pass);
          $this->db->execute();
         $data = $this->db->single();
         // var_dump($data);die;
         $_SESSION['username'] = $username;
         $_SESSION['password'] = $pass;
         $_SESSION['id_petugas'] = $data['id_petugas'];
         $_SESSION['nama_petugas'] = $data['nama_petugas'];
         $_SESSION['level'] = $data['level'];
         $_SESSION['status'] = $data['status'];
         // var_dump($_SESSION);die;
         // var_dump($this->db->rowCount());die;
         return $this->db->rowCount();
         }
         
      }
      public function daftar($data){
      $nik = $data['nik'];
      $nama = $data['nama'];
      $alamat = $data['alamat'];
      $username = $data['username'];
      $pass = $data['password'];
      $telp = $data['telp'];
      if(strlen($nama) < 2){
         $_SESSION['warning'] = 'Nama yang Kurang dari 3 karakter';
         return 0;
      }elseif(strlen($pass) < 7){
          $_SESSION['warning'] = 'Password kurang dari 8 karakter';
          return 0;
      }elseif(strlen($nik) != 16){
         $_SESSION['warning'] = 'NIK tidak sama dengan dari 16 nomber';
         return 0;
      }elseif(strlen($username) < 2){
         $_SESSION['warning'] = 'Password kurang dari 8 karakter';
         return 0;
      }else{
          $_SESSION['warning'] = 'NIK sudah ada di Database';
          $query = "INSERT INTO ". $this->tableMasyarakat ."(nik, nama, alamat, username, password, telp) VALUES (:nik,:nama,:alamat,:username,:password,:telp)";
          $this->db->query($query);
          $this->db->bind('nik', $nik);
          $this->db->bind('nama', $nama);
          $this->db->bind('alamat', $alamat);
          $this->db->bind('username', $username);
          $this->db->bind('password', $pass);
          $this->db->bind('telp', $telp);
          $this->db->execute();
         return $this->db->rowCount();
      }
      
   }
     public function keluar(){
      session_unset();      
     }
    //  public function gantiPassModel($data)
    //  {
    //       $nik = '101024';
    //       $pass = $data['newPass'];
    //       $query = "UPDATE ". $this->table ." SET password = :pass WHERE nik=:nik";
    //       ($this->db->query($query));
    //       $this->db->bind('nik', $nik);
    //       $this->db->bind('pass', $pass);
    //       $this->db->execute();
          
    //       return $this->db->rowCount();
    //  }
    public function daftarPetugas($data){
      //var_dump($data);die;
      $nama_petugas = $data['nama_petugas'];
      $username_petugas = $data['username_petugas'];
      $password = $data['password'];
      $telp = $data['telp'];
      if(strlen($nama_petugas) < 2){
         $_SESSION['warning'] = ' karena Nama yang Kurang dari 3 karakter';
         return 0;
      }elseif(strlen($password) < 7){
          $_SESSION['warning'] = ' karena Password kurang dari 8 karakter';
          return 0;
      }elseif(strlen($username_petugas) < 2){
         $_SESSION['warning'] = ' karena Username kurang dari 3 karakter';
         return 0;
      }else{
          $query = "INSERT INTO ". $this->tablePetugas ."(nama_petugas,username_petugas,password,telp,status) VALUES (:nama_petugas,:username_petugas,:password,:telp,:status)";
          $this->db->query($query);
          $this->db->bind('nama_petugas', $nama_petugas);
          $this->db->bind('username_petugas', $username_petugas);
          $this->db->bind('password', $password);
          $this->db->bind('telp', $telp);
          $this->db->bind('status', '0');
          $this->db->execute();
         return $this->db->rowCount();
      }
   }
}