<?php

class Logout extends Controller {
    public function index(){
        $this->model('UserModel')->keluar();
        Flasher::setFlash('Berhasil', 'Keluar', 'success', 'Anda');
        header('Location:'. BASEURL .'/Login');
    }
}