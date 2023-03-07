<?php

class CetakPengaduan  extends Controller
{
    public function index()
    {
        $data['pengaduan'] = $this->model('PengaduanModel')->ambilSemuaPengaduanDenganPetugas();
        $data['judul'] = 'Lihat User';
        $tombol = $this->model('TombolModel')->__construct();
        $this->view('petugas');
        $this->view('templates/header', $data);
        $this->view($tombol);
        $this->view('lihatUser/preview_pengaduan', $data);
        $this->view('templates/footer', $data);
    }
}


