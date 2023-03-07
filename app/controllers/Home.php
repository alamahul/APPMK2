<?php

class Home extends Controller {
    public function index()
    {
       $data['judul'] = 'Home';;
        $class = $this->model('PengaduanModel');
        $data['jumlahPengaduan'] = $class->ambilJumlahPengaduan();
        $data['jumlahStatus0'] = $class->ambilJumlahPengaduanStatus0();
        $data['jumlahStatusProses'] = $class->ambilJumlahPengaduanStatusProses();
        $data['jumlahStatusSelesai'] = $class->ambiljumlahPengaduanStatusSelesai();

        $classPetugas = $this->model('PetugasModel');
        $data['jumlahpetugas'] = $classPetugas->ambilJumlahPetugas();
        $data['jumlahlevelAdmin'] = $classPetugas->ambilJumlahLevelAdmin();
        $data['jumlahlevelPetugas'] = $classPetugas->ambilJumlahLevelPetugas();
        $data['jumlahlevelAdminstatus0'] = $classPetugas->ambilJumlahLevelAdminStatus0();


        $tombol = $this->model('TombolModel')->__construct();
        $info = $this->model('InformationModel')->__construct();
        // var_dump($tombol);die;
       $this->view('templates/header', $data);
       $this->view($tombol);
       $this->view('home/index', $data);
       $this->view($info, $data);
       $this->view('templates/footer');
    }
}