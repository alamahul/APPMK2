<?php

class LihatUser extends Controller 
{
    public function Masyarakat()
    {
        $data['judul'] = 'Lihat User Masyarakat';
        $data['masyarakat'] = $this->model('MasyarakatModel')->ambilSemuaDataMasyarakat();
        $tombol = $this->model('TombolModel')->__construct();
        $this->view('petugas');
        $this->view('templates/header', $data);
        $this->view($tombol);
        $this->view('lihatUser/index', $data);
        $this->view('templates/footer', $data);
    }
    public function EditMasyarakat($nik)
    {
        $data['judul'] = 'Edit Data Masyarakat';
        $data['masyarakat'] = $this->model('MasyarakatModel')->ambilDataMasyarakatNIK();
        $tombol = $this->model('TombolModel')->__construct();
        $this->view('petugas');
        $this->view('templates/header', $data);
        $this->view($tombol);
        $this->view('lihatUser/edit', $data);
        $this->view('templates/footer', $data);
    }
    public function HapusMasyarakat($nik)
    {
        $this->view('petugas');
        if ($this->model('MasyarakatModel')->hapusDataMasyarakatNIK($nik) > 0){
            Flasher::setFlash('berhasil', 'di Hapus', 'success', 'Data Masyrakat');
            header('Location:'. BASEURL .'/LihatUser/Masyarakat');
        }else{
            Flasher::setFlash('gagal', 'di Hapus', 'danger', 'Data Masyarakat');
            header('Location:'. BASEURL .'/LihatUser/Masyarakat');
        }
    }
    public function petugas()
    {
        $data['judul'] = 'Lihat User';
        $data['petugas'] = $this->model('PetugasModel')->ambilSemuaDataPetugas();
        $tombol = $this->model('TombolModel')->__construct();
        $this->view('SuperAdmin');
        $this->view('templates/header', $data);
        $this->view($tombol);
        $this->view('lihatUser/petugas', $data);
        $this->view('templates/footer', $data);
    }
    public function preview_petugas()
    {
        $data['judul'] = 'Lihat User';
        $data['petugas'] = $this->model('PetugasModel')->ambilSemuaDataPetugas();
        $tombol = $this->model('TombolModel')->__construct();
        $this->view('SuperAdmin');
        $this->view('templates/header', $data);
        $this->view($tombol);
        $this->view('lihatUser/preview_petugas', $data);
        $this->view('templates/footer', $data);
    }
    public function hapusPetugas($id)
    {
        $this->view('SuperAdmin');
        if ($this->model('PetugasModel')->hapusDataPetugasID($id) > 0){
            Flasher::setFlash('berhasil', 'di Hapus', 'success', 'Petugas');
            header('Location:'. BASEURL .'/LihatUser/petugas');
        }else{
            Flasher::setFlash('gagal', 'di Hapus', 'danger', 'Petugas');
            header('Location:'. BASEURL .'/LihatUser/petugas');
        }
    }
    public function prosesUbahPetugas()
    {
        echo json_encode($this->model('PetugasModel')->ambilDataPetugasID($_POST['id']));
    }
    public function TambahPetugas()
    {
        if ($this->model('PetugasModel')->tambahDataPetugas($_POST) > 0) {
        Flasher::setFlash('Berhasil', 'Ditambahkan <div class="text-center bg-danger text-light">PASSWORD :<br>'.$_SESSION['passUbah'].'</div>', 'success', 'Petugas');
        header('Location:'. BASEURL .'/LihatUser/Petugas');
        unset($_SESSION['passUbah']);
        }else{
            Flasher::setFlash('gagal', 'Ditambahkan', 'danger', 'Petugas');
            header('Location:'. BASEURL .'/LihatUser/Petugas');    
       }
    }
    public function UbahPetugas()
    {
        if ($this->model('PetugasModel')->EditDataPetugas($_POST) > 0) {
        Flasher::setFlash('Berhasil', 'Diubah <div class="text-center bg-danger text-light">PASSWORD :<br>'.$_SESSION['passUbah'].'</div>', 'success', 'Petugas');
        header('Location:'. BASEURL .'/LihatUser/Petugas');
        unset($_SESSION['passUbah']);
        }else{
            Flasher::setFlash('tidak', 'DiUbah', 'warning', 'Petugas');
            header('Location:'. BASEURL .'/LihatUser/Petugas');    
       }
    }
}
