<?php

class Blank extends Controller {
    public function index()
    {
        $data['judul'] = 'Blank';
        $tombol = $this->model('TombolModel')->__construct();
       $this->view('templates/header', $data);
       $this->view($tombol);
        $this->view('blank/index');
        $this->view('templates/footer');
    }
}