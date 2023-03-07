<?php


class InformationModel{
    private $info;
    public function __construct()
    {
      switch (true) {
        case isset($_SESSION['level']):
          if ($_SESSION['level']== 'petugas') {
            return $this->petugas();
          }if ($_SESSION['level']== 'SuperAdmin') {
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
      $this->info = 'info/masyarakat';
      return $this->info;
    } 
    public function petugas(){
      $this->info = 'info/petugas';
      return $this->info;
    }
    public function admin(){
        $this->info = 'info/admin';
        return $this->info;       
    }
    public function superAdmin(){
      $this->info = 'info/superAdmin';
      return $this->info;
    }
}