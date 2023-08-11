<?php
class Rekap_model {
    private $table = 'tb_kategori',
            $db;
    
    public function __construct()
    {
        $this->db = new Database;
    }

    public function getAllRekap()
    {
        $this->db->query('SELECT tb_kategori.nama_kategori,tb_kas.tanggal,tb_kas.vol_barang,tb_kas.harga_satuan,tb_kas.uraian, tb_kas.id_admin,(tb_kas.vol_barang*tb_kas.harga_satuan) As "Total" FROM tb_kategori RIGHT JOIN tb_kas ON tb_kategori.id_kategori = tb_kas.id_kategori ORDER BY tb_kas.id_kas');
        return $this->db->resultSet();
    }
}