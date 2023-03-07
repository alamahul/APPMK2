<?php

class TanggapanModel extends Controller 
{
    private $table = 'tanggapan';
    private $tabelPengaduan = 'pengaduan';
    private $tabelPetugas = 'petugas';
    private $db;
    public function __construct() {
        $this->db = new Database;
    }
    public function ambilSemuaTanggapan()
    {
        $this->db->query("SELECT * FROM ". $this->table);
        $this->db->execute();
        return $this->db->resultSet();
    }
    public function ambilSemuaTanggapanDanPetugasnya()
    {

        $query = "SELECT * FROM 
        `".$this->table."`,
        `".$this->tabelPetugas."`
         WHERE
          `".$this->table."`.`id_petugas` = `".$this->tabelPetugas."`.`id_petugas`";
        $this->db->query($query);
        $this->db->execute();
        return $this->db->resultSet();
    }
    public function ambilSemuaTanggapanPetugasDanPengaduan()
    {

        $query = "SELECT * FROM 
        `".$this->table."`,
        `".$this->tabelPetugas."`,
        `". $this->tabelPengaduan ."`
         WHERE
         `".$this->table."`.`id_petugas` = `".$this->tabelPetugas."`.`id_petugas`
          AND `".$this->tabelPengaduan."`.`id_pengaduan` = `". $this->table."`.`id_pengaduan`";
        $this->db->query($query);
        $this->db->execute();
        return $this->db->resultSet();
    }
}
