<?php

class CetakTanggapan extends Controller 
{
    public function index()
    {
        $data['tanggapan'] = $this->model('tanggapanModel')->ambilSemuaTanggapanPetugasDanPengaduan();
        $data['judul'] = 'Laporan Tanggapan Tanggal '. date('d M Y') . ' dari ' .$_SESSION['username'];
        $tombol = $this->model('TombolModel')->__construct();
        $this->view('petugas');
        $this->view('templates/header', $data);
        $this->view($tombol);
        $this->view('lihatUser/preview_tanggapan', $data);
        $this->view('templates/footer', $data);
    }

}
