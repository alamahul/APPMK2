<?php

class MasyarakatModel 
{
    private $table = 'masyarakat';
    private $db;
    public function __construct() {
        $this->db = new Database;
    }
    public function ambilSemuaDataMasyarakat()
    {
        $query = 'SELECT * FROM '. $this->table;
        $this->db->query($query);
        $this->db->execute();
        return $this->db->resultSet();
    }
    public function ambilDataMasyarakatNIK($nik)
    {
        $query = 'SELECT * FROM '. $this->table .' WHERE nik=:nik';
        $this->db->query($query);
        $this->db->bind('nik', $nik);
        $this->db->execute();
        return $this->db->single();
    }
    public function editDataMasyarakatNIK($nik)
    {
        $query = '';
        $this->db->query($query);
        $this->db->bind('nik', $nik);
        $this->db->execute();
        return $this->db->single();
    }
    public function hapusDataMasyarakatNIK($nik)
    {
        $query = 'DELETE FROM '. $this->table .' WHERE nik=:nik';
        $this->db->query($query);
        $this->db->bind('nik', $nik);
        $this->db->execute();
        return $this->db->rowCount();
    }
}
