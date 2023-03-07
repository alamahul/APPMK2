<?php

class TanggapiPengaduan extends Controller {
    public function index()
    {
        $data['judul'] = 'Tanggapi Laporan';
        $data['pengaduan'] = $this->model('PengaduanModel')->ambilSemuaPengaduanDenganPetugas();
        
        $tombol = $this->model('TombolModel')->__construct();
        $this->view('petugas');
        $this->view('templates/header', $data);
        $this->view($tombol);
        $this->view('tanggapanPengaduan/index', $data);
        $this->view('templates/footer', $data);
    }
    public function proses()
    {
        $data['judul'] = 'Tanggapi Pengaduan';
        $data['pengaduan'] = $this->model('PengaduanModel')->ambilSemuaPengaduanDenganPetugasStatusProses();
        
        $tombol = $this->model('TombolModel')->__construct();
        $this->view('petugas');
        $this->view('templates/header', $data);
        $this->view($tombol);
        $this->view('tanggapanPengaduan/index', $data);
        $this->view('templates/footer', $data);
    }
    public function detail($id)
    {
        $data['judul'] = 'Detail Pengaduan';
        $data['pengaduan'] = $this->model('PengaduanModel')->ambilPengaduanDenganIdPetugas($id);
        $tombol = $this->model('TombolModel')->__construct();
        $this->view('petugas');
        $this->view('templates/header', $data);
        $this->view($tombol);
        $this->view('tanggapanPengaduan/detail', $data);
        $this->view('templates/footer', $data);
    }
    public function buatTanggapan($id){
        $data['judul'] = 'Tanggapi Pengaduan';
        $tombol = $this->model('TombolModel')->__construct();
           $data['id'] = $id;
           $this->view('petugas');
           $this->view('templates/header', $data);
           $this->view($tombol);
           $this->view('petugas');
        $this->view('tanggapanPengaduan/tulis', $data);
        $this->view('templates/footer');
    }
    public function tulis()
    {
        $this->view('petugas');
        $class = $this->model('PengaduanModel');
       if ($class->tambahTanggapan($_POST) > 0) {
        $class->statusSelesai($_POST);
        Flasher::setFlash('Berhasil', 'ditanggapi', 'success', 'Pengaduan');
        header('Location:'. BASEURL .'/tanggapiPengaduan/proses');
       }else{
        Flasher::setFlash('gagal', $_SESSION['warning'], 'success', 'Pengaduan');
        header('Location:'. BASEURL .'/tanggapiPengaduan/proses');
       }
    }
    public function LihatTanggapan()
    {
        $this->view('petugas');
        $className = $this->model('TanggapanModel');
        $data['judul'] = 'Lihat Tanggapan';
        $data['tanggapan'] = $className->ambilSemuaTanggapanPetugasDanPengaduan();
        $tombol = $this->model('TombolModel')->__construct();
        $this->view('petugas');
        $this->view('templates/header', $data);
        $this->view($tombol);
        $this->view('tanggapanPengaduan/lihatTanggapan', $data);
        $this->view('templates/footer', $data);
    }
    public function HapusTanggapan($id)
    {
        $this->view('petugas');
        $class = $this->model('TanggapanModel');
       if ($class->HapusTanggapan($id) > 0) {
        Flasher::setFlash('Berhasil', 'ditanggapi', 'success', 'Tanggapan');
        header('Location:'. BASEURL .'/tanggapiPengaduan/lihatTanggapan');
       }else{
        Flasher::setFlash('gagal', $_SESSION['warning'], 'success', 'Tanggapan');
        header('Location:'. BASEURL .'/tanggapiPengaduan/lihatTanggapan');
       }
    }
}