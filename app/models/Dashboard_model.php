<?php
class Dashboard_model {
    private $table = 'tb_kas',
            $db;
    
    public function __construct()
    {
        $this->db = new Database;
    }

    public function getTotalPemasukan()
    {
        // $this->db->query('SELECT * FROM ' . $this->table.' WHERE id_kategori = 2');
        $this->db->query('SELECT SUM(vol_barang * harga_satuan) As "totalpemasukan" FROM ' . $this->table.' WHERE id_kategori = 1');
        return $this->db->resultSet();
    }

    public function getTotalPengeluaran()
    {
        // $this->db->query('SELECT * FROM ' . $this->table.' WHERE id_kategori = 2');
        $this->db->query('SELECT SUM(vol_barang * harga_satuan) As "totalpengeluaran" FROM ' . $this->table.' WHERE id_kategori = 2');
        return $this->db->resultSet();
    }

    public function getAllAdmin()
    {
        $this->db->query('SELECT COUNT(*) AS total FROM tb_user');
        return $this->db->resultSet();
    }

}