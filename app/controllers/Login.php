<?php

class Login extends Controller {
    public function index()
    {
        if (isset($_SESSION['level']) || isset($_SESSION['nik'])) {
                Flasher::setFlash('Sudah', 'Login', 'danger', 'Anda');
                header('Location:'. BASEURL .'/Home');
        }else{
        $data['judul'] = 'Login';
        $this->view('templates/SignInUp/header', $data);
        $this->view('login/index', $data);
        $this->view('templates/SignInUp/footer', $data);
        }
    }
    public function prosesLogin(){
        $class = $this->model('UserModel');
        if($class->masuk($_POST) > 0){
            $_SESSION['data'] = $data;
            $_SESSION['nik'] = $_POST['nik'];
             $_SESSION['password'] = $_POST['password'];
           $_SESSION['data']['nama'] = $data['nama'];
           unset($_SESSION['data']);
            Flasher::setFlash("Datang ", $class->getUser().' Di Aplikasi Pelaporan Pengaduan Masyarakat Kabupaten', 'success', 'Selamat');
            header('Location:'. BASEURL . '/Home');
        }else{
            unset($_SESSION['data']);
            Flasher::setFlash('memasukan',$_SESSION['warning'], 'warning', 'Anda');
            header('Location:'. BASEURL . '/Login');
        }
    }
}