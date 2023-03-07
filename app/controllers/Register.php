<?php

class Register extends Controller {
    public function index()
    {
        $data['judul'] = 'Register';
        $this->view('templates/SignInUp/header', $data);
        $this->view('Register/index', $data);
        $this->view('templates/SignInUp/footer', $data);
    }
    public function prosesRegister(){
        if($this->model('UserModel')->daftar($_POST) > 0){
            Flasher::setFlash("Berhasil", 'Register', 'success', 'Anda');
            header('Location:'. BASEURL . '/Login');
        }else{
            Flasher::setFlash('memasukan',$_SESSION['warning'], 'warning', 'Anda');
            header('Location:'. BASEURL . '/register');
        }
    }
}