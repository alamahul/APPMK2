<?php

class LihatPengaduan extends Controller {
    public function index()
    {
        $data['judul'] = 'Lihat Pengaduan';
        $data['pengaduan'] = $this->model('PengaduanModel')->ambilSemuaPengaduan();
        
        $tombol = $this->model('TombolModel')->__construct();
        $this->view('masyarakat');
        $this->view('templates/header', $data);
        $this->view($tombol);
        $this->view('lihatPengaduan/index', $data);
        $this->view('templates/footer', $data);
    }
    public function proses()
    {
        $data['judul'] = 'Lihat Pengaduan';
        $data['pengaduan'] = $this->model('PengaduanModel')->ambilSemuaPengaduanYangStatusProses();
        
        $tombol = $this->model('TombolModel')->__construct();
        $this->view('masyarakat');
        $this->view('templates/header', $data);
        $this->view($tombol);
        $this->view('lihatPengaduan/index', $data);
        $this->view('templates/footer', $data);
    }
    public function selesai()
    {
        $data['judul'] = 'Lihat Pengaduan';
        $data['pengaduan'] = $this->model('PengaduanModel')->ambilSemuaPengaduanYangStatusSelesai();
        
        $tombol = $this->model('TombolModel')->__construct();
        $this->view('masyarakat');
        $this->view('templates/header', $data);
        $this->view($tombol);
        $this->view('lihatPengaduan/index', $data);
        $this->view('templates/footer', $data);
    }
    public function detail($id)
    {
        $data['judul'] = 'Detail Pengaduan';
        $data['pengaduan'] = $this->model('PengaduanModel')->ambilPengaduanDenganID($id);
        $tombol = $this->model('TombolModel')->__construct();
        $this->view('templates/header', $data);
        $this->view($tombol);
        $this->view('lihatPengaduan/detail', $data);
        $this->view('templates/footer', $data);
    }
    public function lihatTanggapan($id)
    {
        $data['judul'] = 'Lihat Tanggapan';
        $data['pengaduan'] = $this->model('PengaduanModel')->ambilPengaduandanTanggapanDenganID($id);
        $tombol = $this->model('TombolModel')->__construct();
        $this->view('templates/header', $data);
        $this->view($tombol);
        $this->view('lihatPengaduan/tanggapan', $data);
        $this->view('templates/footer', $data);
    }
    
}