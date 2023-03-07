<?php

class PetugasRegister extends Controller 
{
    public function index()
    {
       $data['judul'] = 'Register Petugas';
        $this->view('templates/SignInUp/header', $data);
        $this->view('petugasRegister/index', $data);
        $this->view('templates/SignInUp/footer', $data);
    }
    public function prosesRegister()
    {
        if($this->model('UserModel')->daftarPetugas($_POST) > 0){
            Flasher::setFlash("Berhasil", 'Register', 'success', 'Anda');
            header('Location:'. BASEURL . '/PetugasLogin');
        }else{
            Flasher::setFlash("gagal", 'Register'.$_SESSION['warning'], 'danger', 'Anda');
            unset($_SESSION['warning']);
            header('Location:'. BASEURL . '/PetugasRegister');
        }
    }
}
