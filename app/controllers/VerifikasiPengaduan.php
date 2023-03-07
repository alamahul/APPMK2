<?php

class VerifikasiPengaduan extends Controller {
    public function index()
    {
        $data['judul'] = 'Verifikasi Pengaduan';
        $data['pengaduan'] = $this->model('PengaduanModel')->ambilSemuaPengaduanDenganPetugas();
        $tombol = $this->model('TombolModel')->__construct();
        $this->view('petugas');
        $this->view('templates/header', $data);
        $this->view($tombol);
        $this->view('verifikasiPengaduan/index', $data);
        $this->view('templates/footer', $data);
    }
    public function proses()
    {
        $data['judul'] = 'Verifikasi Pengaduan';
        $data['pengaduan'] = $this->model('PengaduanModel')->ambilSemuaPengaduanDenganPetugasStatus0();
        $tombol = $this->model('TombolModel')->__construct();
        $this->view('petugas');
        $this->view('templates/header', $data);
        $this->view($tombol);
        $this->view('verifikasiPengaduan/index', $data);
        $this->view('templates/footer', $data);
    }
    public function statusProses()
    {
        $data['judul'] = 'Verifikasi Pengaduan';
        $data['pengaduan'] = $this->model('PengaduanModel')->ambilSemuaPengaduanDenganPetugasStatusProses();
        $tombol = $this->model('TombolModel')->__construct();
        $this->view('petugas');
        $this->view('templates/header', $data);
        $this->view($tombol);
        $this->view('verifikasiPengaduan/index', $data);
        $this->view('templates/footer', $data);
    }
    public function statusSelesai()
    {
        $data['judul'] = 'Verifikasi Pengaduan';
        $data['pengaduan'] = $this->model('PengaduanModel')->ambilSemuaPengaduanDenganPetugasStatusSelesai();
        $tombol = $this->model('TombolModel')->__construct();
        $this->view('petugas');
        $this->view('templates/header', $data);
        $this->view($tombol);
        $this->view('verifikasiPengaduan/index', $data);
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
        $this->view('VerifikasiPengaduan/detail', $data);
        $this->view('templates/footer', $data);
    }
    public function verifikasi($id)
    {
        $this->view('petugas');
       if( $this->model('PengaduanModel')->verifikasidenganId($id) > 0){
       Flasher::setFlash('Berhasil', 'Diverifikasi', 'success', 'Pengaduan');
       header('Location:'. BASEURL .'/VerifikasiPengaduan/proses');
       }else{
       Flasher::setFlash('gagal', $_SESSION['warning'], 'danger', 'Pengaduan');
       header('Location:'. BASEURL .'/VerifikasiPengaduan/proses');
       }
    }
    public function DataPengaduan()
    {
        $data['judul'] = 'Data Pengaduan';
        $data['pengaduan'] = $this->model('PengaduanModel')->ambilSemuaPengaduanDenganPetugas();
        
        $tombol = $this->model('TombolModel')->__construct();
        $this->view('petugas');
        $this->view('templates/header', $data);
        $this->view($tombol);
        $this->view('verifikasiPengaduan/DataPengaduan', $data);
        $this->view('templates/footer', $data);
    }
    public function lihatTanggapan($id)
    {
        $data['judul'] = 'Detail Pengaduan';
        $data['pengaduan'] = $this->model('PengaduanModel')->ambilPengaduandanTanggapanDenganID($id);
        $tombol = $this->model('TombolModel')->__construct();
        $this->view('petugas');
        $this->view('templates/header', $data);
        $this->view($tombol);
        $this->view('lihatPengaduan/tanggapan', $data);
        $this->view('templates/footer', $data);
    }
}
