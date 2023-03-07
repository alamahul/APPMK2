<?php

class VerifikasiAdmin extends Controller 
{
    public function index()
    {
    $data['judul'] = 'Verifikasi Admin';
    $data['petugas'] = $this->model('PetugasModel')->ambilSemuaDataPetugasStatus0();
    $tombol = $this->model('TombolModel')->__construct();
    $this->view('SuperAdmin');
    $this->view('templates/header', $data);
    $this->view($tombol);
    $this->view('verifikasiadmin/index', $data);
    $this->view('templates/footer');
    }
    public function Verifikasi($id)
    {
        $this->view('SuperAdmin');
        if ($this->model('PetugasModel')->ubah0KeTerverifikasi($id) > 0) {
            Flasher::setFlash('berhasil', 'di Verifikasi', 'success', 'Admin');
            header('Location:'. BASEURL .'/VerifikasiAdmin');
        }else{
            Flasher::setFlash('gagal', 'di Verifikasi', 'danger', 'Admin');
            header('Location:'. BASEURL .'/VerifikasiAdmin');
        }
    }
}
