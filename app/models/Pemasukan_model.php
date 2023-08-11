<?php


class Pemasukan_model {
    private $table = 'tb_kas',
            $db;
    
    public function __construct()
    {
        $this->db = new Database;
    }

    public function getAllPemasukan()
    {
        $this->db->query('SELECT * FROM ' . $this->table.' WHERE id_kategori = 1');
        return $this->db->resultSet();
    }

    public function getTotalPemasukan()
    {
        // $this->db->query('SELECT * FROM ' . $this->table.' WHERE id_kategori = 2');
        $this->db->query('SELECT SUM(vol_barang * harga_satuan) As "totalpemasukan" FROM ' . $this->table.' WHERE id_kategori = 1');
        return $this->db->resultSet();
    }

    public function getPemasukanById($id)
    {
        $this->db->query('SELECT * FROM ' . $this->table . ' WHERE id_kas=:id_kas');
        $this->db->bind('id_kas', $id);
        return $this->db->single();
    }

    public function TambahDataPemasukan($data)
    {
        $query = "INSERT INTO tb_kas 
                    VALUES
                    ('', :id_admin, :id_kategori, :tanggal, :vol_barang, :harga_satuan, :uraian)";
        $this->db->query($query);
        $this->db->bind('id_admin', $data['id_admin']);
        $this->db->bind('id_kategori', $data['id_kategori']);
        $this->db->bind('tanggal', $data['tanggal']);
        $this->db->bind('vol_barang', $data['volume_barang']);
        $this->db->bind('harga_satuan', $data['harga_satuan']);
        $this->db->bind('uraian', $data['uraian']);

        $this->db->execute();

        return $this->db->rowCount();
    }

    public function HapusDataPemasukan($id)
    {
        $query = "DELETE FROM tb_kas WHERE id_kas = :id_kas";
        $this->db->query($query);
        $this->db->bind('id_kas', $id);
        $this->db->execute();
        return $this->db->rowCount();
    }

    public function UbahDataPemasukan($data)
    {
        $query = "UPDATE tb_kas SET 
                    id_admin = :id_admin, 
                    id_kategori = :id_kategori,
                    tanggal = :tanggal,
                    vol_barang= :vol_barang,
                    harga_satuan = :harga_satuan,
                    uraian = :uraian
                WHERE id_kas = :id_kas";
        $this->db->query($query);
        $this->db->bind('id_kas', $data['id']);
        $this->db->bind('id_admin', $data['id_admin']);
        $this->db->bind('id_kategori', $data['id_kategori']);
        $this->db->bind('tanggal', $data['tgl_km']);
        $this->db->bind('vol_barang', $data['jumlah']);
        $this->db->bind('harga_satuan', $data['nominal']);
        $this->db->bind('uraian', $data['uraian_km']);

        $this->db->execute();

        return $this->db->rowCount();
    }

    public function cariDataMahasiswa()

    {
        $keyword = $_POST['keyword'];
        $query = "SELECT * FROM mahasiswa WHERE nama LIKE :keyword";
        $this->db->query($query);
        $this->db->bind('keyword', "%$keyword%");
        return $this->db->resultSet();
    }

}