<?php
 
class PetugasModel 
{
    private $table = 'petugas';
    private $db;
    public function __construct() {
        $this->db = new Database;
    }
    public function tambahDataPetugas($data)
    {
        $nama = $data['nama_petugas'];
        $username = $data['username_petugas'];
        $password = md5($data['nama_petugas']);
        $telp = $data['telp'];
        $level = $data['level'];
        $query = "INSERT INTO ". $this->table ."(nama_petugas,username_petugas,password,telp,level,status) VALUES(:nama,:username,:password,:telp,:level,:status)";
        $this->db->query($query);
        $this->db->bind('nama', $nama);
        $this->db->bind('username', $username);
        $this->db->bind('password', $password);
        $this->db->bind('telp', $telp);
        $this->db->bind('level', $level);
        $this->db->bind('status', 'terverifikasi');
        $this->db->execute();
        $_SESSION['passUbah'] = $password;
        return $this->db->rowCount();

    }
    public function EditDataPetugas($data)
    {
        $id = $data['id_petugas'];
        $nama = $data['nama_petugas'];
        $username = $data['username_petugas'];
        $password = md5($data['nama_petugas']);
        $telp = $data['telp'];
        $level = $data['level'];
        $query = "UPDATE ". $this->table ." set nama_petugas=:nama,username_petugas=:username,password=:password,telp=:telp,level=:level WHERE id_petugas = :id";
        $this->db->query($query);
        $this->db->bind('id', $id);
        $this->db->bind('nama', $nama);
        $this->db->bind('username', $username);
        $this->db->bind('password', $password);
        $this->db->bind('telp', $telp);
        $this->db->bind('level', $level);
        $this->db->execute();
        $_SESSION['passUbah'] = $password;
        return $this->db->rowCount();

    }
    public function ambilSemuaDataPetugas()
    {
        $query = 'SELECT * FROM '. $this->table ." WHERE level='admin' OR level='petugas'";
        $this->db->query($query);
        $this->db->execute();
        return $this->db->resultSet();
    }
    public function ambilDataPetugasID($id)
    {
        $query = 'SELECT * FROM '. $this->table .' WHERE id_petugas=:id';
        $this->db->query($query);
        $this->db->bind('id', $id);
        $this->db->execute();
        return $this->db->single();
    }
    public function ambilSemuaDataPetugasStatus0()
    {
        $query = 'SELECT * FROM '. $this->table .' WHERE status=:status';
        $this->db->query($query);
        $this->db->bind('status', '0');
        $this->db->execute();
        return $this->db->resultSet();
    }
    public function ubah0KeTerverifikasi($id)
    {
        $query = "UPDATE ". $this->table .' set status=:status WHERE id_petugas =:id';
        $this->db->query($query);
        $this->db->bind('status', 'terverifikasi');
        $this->db->bind('id', $id);
        $this->db->execute();
        return $this->db->rowCount();
    }
    public function hapusDataPetugasID($id)
    {
        $query = "DELETE FROM ". $this->table .' WHERE id_petugas =:id';
        $this->db->query($query);
        $this->db->bind('id', $id);
        $this->db->execute();
        return $this->db->rowCount();
    }
    public function ambilJumlahPetugas()
    {
        $data['petugas'] = $this->ambilSemuaDataPetugas();
        // var_dump($data['petugas']);die;
        $jumlahPetugas = count($data['petugas']);
        return $jumlahPetugas;
    }
    public function ambilDataLevelAdmin()
    {
        $query = 'SELECT * FROM '. $this->table .' WHERE level=:level';
        $this->db->query($query);
        $this->db->bind('level', 'admin');
        $this->db->execute();
        return $this->db->resultSet();
    }
    public function ambilDataLevelPetugas()
    {
        $query = 'SELECT * FROM '. $this->table .' WHERE level=:level';
        $this->db->query($query);
        $this->db->bind('level', 'petugas');
        $this->db->execute();
        return $this->db->resultSet();
    }
    public function ambilJumlahLevelAdmin()
    {
        $data['levelAdmin'] = $this->ambilDataLevelAdmin();
        $jumlahLevelAdmin = count($data['levelAdmin']);
        return $jumlahLevelAdmin;
    }
    public function ambilJumlahLevelPetugas()
    {
        $data['levelPetugas'] = $this->ambilDataLevelPetugas();
        $jumlahLevelPetugas = count($data['levelPetugas']);
        return $jumlahLevelPetugas;
    }
    public function ambilJumlahLevelAdminStatus0()
    {
        $data['levelAdminStatus0'] = $this->ambilSemuaDataPetugasStatus0();
        $jumlahlevelAdminStatus0 = count($data['levelAdminStatus0']);
        return $jumlahlevelAdminStatus0;
    }
}
