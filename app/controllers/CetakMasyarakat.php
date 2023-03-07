<?php

class CetakMasyarakat extends Controller 
{
    public function index()
    {
        $data['judul'] = 'Lihat User';
        $data['masyarakat'] = $this->model('MasyarakatModel')->ambilSemuaDataMasyarakat();
        $tombol = $this->model('TombolModel')->__construct();
        $this->view('petugas');
        $this->view('templates/header', $data);
        $this->view($tombol);
        $this->view('lihatUser/preview_masyarakat', $data);
        $this->view('templates/footer', $data);
    }
}
