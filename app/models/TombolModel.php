<?php

class TombolModel {
    private $tombol;
    public function __construct()
    {
      switch (true) {
        case isset($_SESSION['level']):
          if ($_SESSION['level']== 'petugas') {
            return $this->petugas();
          }elseif ($_SESSION['level']== 'SuperAdmin') {
            return $this->superAdmin();
          }else{
            return $this->admin();
          }
           break;
        default:
          return $this->masyarakat();
          break;
      }
    
    }
    public function masyarakat(){
      $this->tombol = 'tombol/masyarakat';
      return $this->tombol;
    } 
    public function petugas(){
      $this->tombol = 'tombol/petugas';
      return $this->tombol;
    }
    public function admin(){
        $this->tombol = 'tombol/admin';
        return $this->tombol;
        
    }
    public function superAdmin(){
      $this->tombol = 'tombol/SuperAdmin';
      return $this->tombol;
      
  }
}