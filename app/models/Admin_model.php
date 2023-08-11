<?php


class Admin_model {
    private $table = 'tb_user',
            $db;
    
    public function __construct()
    {
        $this->db = new Database;
    }

    public function getAllAdmin()
    {
        $this->db->query('SELECT * FROM ' . $this->table);
        return $this->db->resultSet();
    }

    public function getAdminById($id)
    {
        $this->db->query('SELECT * FROM ' . $this->table . ' WHERE id_user=:id_user');
        $this->db->bind('id_user', $id);
        return $this->db->single();
    }

    public function UbahDataAdmin($data)
    {
        $query = "UPDATE tb_user SET nama_admin = :nama_admin, username = :username, password = :password WHERE id_user = :id_user";
        $this->db->query($query);
        $this->db->bind('id_user', $data['id']);
        $this->db->bind('nama_admin', $data['nama1']);
        $this->db->bind('username', $data['username1']);
        $this->db->bind('password', md5($data['password1']));

        $this->db->execute();

        return $this->db->rowCount();
    }


}