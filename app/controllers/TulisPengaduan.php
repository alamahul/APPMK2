<?php

class TulisPengaduan extends Controller {
    public function index()
    {
        $data['judul'] = 'Tulis Pengaduan';
        $tombol = $this->model('TombolModel')->__construct();
        $this->view('templates/header', $data);
        $this->view($tombol);
        $this->view('tulisPengaduan/index');
        $this->view('templates/footer');
    }
    public function Tulis()
    {
        if($this->model('PengaduanModel')->tambah($_POST, $_FILES) > 0){
            Flasher::setFlash("Berhasil", 'Dilaporkan', 'success', 'Pengaduan');
            header('Location:'. BASEURL . '/LihatPengaduan');
        }else{
            Flasher::setFlash('memasukan',$_SESSION['warning'], 'warning', 'Anda');
            header('Location:'. BASEURL . '/TulisPengaduan');
        }
    }
}