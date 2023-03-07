<?php

class PetugasLogin extends Controller {
    public function index()
    {
        $data['judul'] = 'Login';
        $this->view('templates/SignInUp/header', $data);
        $this->view('petugasLogin/index', $data);
        $this->view('templates/SignInUp/footer', $data);
    }
    public function prosesLogin(){
        $class = $this->model('UserModel');
        if($class->masukPetugas($_POST) > 0){
            Flasher::setFlash("Datang ", $class->getUser().' Di Aplikasi Pelaporan Pengaduan Masyarakat Kabupaten', 'success', 'Selamat');
            // var_Dump($_SESSION);die;
            header('Location:'. BASEURL . '/Home');
        }else{
            Flasher::setFlash('memasukan',$_SESSION['warning'], 'warning', 'Anda');
            header('Location:'. BASEURL . '/PetugasLogin');
        }
    }
}