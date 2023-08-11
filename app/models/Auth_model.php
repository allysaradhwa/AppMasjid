<?php


class Auth_model {
    private $table = 'tb_user',
            $db;
    
    public function __construct()
    {
        $this->db = new Database;
    }
    
    public function loginAdmin($data)
    {
        if (isset($_SESSION['username'])) {
            header('Location:' .BASEURL.'dashboard');
        }
        error_reporting(0);
        session_start();
        $query = 'SELECT * FROM' . $this->table . ' WHERE username=:username AND password=:password';
        $this->db->query($query);
        $username = $data['username'];
        $password = md5($data['password']);
        $this->db->bind('username', $username);
        $this->db->bind('password', $password);
        $result = $this->db->resultSet();
        if(mysqli_num_rows($result) > 0){
            $row = $result;
            $_SESSION['username'] = $row['username'];
            Flasher::setFlash('Selamat', 'anda', 'berhasil login' );
            header('Location:'.BASEURL.'dashboard');
        }else {
            echo "<script>alert('username atau kata sandi salah')</script>";
            header('Location:'.BASEURL. 'Auth');
        }
            
            // if ($result->num_rows > 0) {
            //     $row = mysqli_fetch_assoc($result);
            //     $_SESSION['username'] = $row['username'];
            //     $this->db->execute();
            // }else {
            //     header('Location:'.BASEURL.'dashboard');
            // }
    }
}

    // public function tambahDataMahasiswa($data)
    // {
    //     $query = "INSERT INTO mahasiswa 
    //                 VALUES
    //                 ('', :nama, :nrp, :email, :jurusan)";
    //     $this->db->query($query);
    //     $this->db->bind('nama', $data['nama']);
    //     $this->db->bind('nrp', $data['nrp']);
    //     $this->db->bind('email', $data['email']);
    //     $this->db->bind('jurusan', $data['jurusan']);

    //     $this->db->execute();

    //     return $this->db->rowCount();
    // }

    // public function hapusDataMahasiswa($id)
    // {
    //     $query = "DELETE FROM mahasiswa WHERE id = :id";
    //     $this->db->query($query);
    //     $this->db->bind('id', $id);

    //     $this->db->execute();

    //     return $this->db->rowCount();
    // }

    // public function ubahDataMahasiswa($data)
    // {
    //     $query = "UPDATE mahasiswa SET 
    //                 nama = :nama,
    //                 nrp = :nrp,
    //                 email = :email,
    //                 jurusan = :jurusan,
    //               WHERE id = :id";
    //     $this->db->query($query);
    //     $this->db->bind('nama', $data['nama']);
    //     $this->db->bind('nrp', $data['nrp']);
    //     $this->db->bind('email', $data['email']);
    //     $this->db->bind('jurusan', $data['jurusan']);
    //     $this->db->bind('id', $data['id']);

    //     $this->db->execute();

    //     return $this->db->rowCount();
    // }

    // public function cariDataMahasiswa()

    // {
    //     $keyword = $_POST['keyword'];
    //     $query = "SELECT * FROM mahasiswa WHERE nama LIKE :keyword";
    //     $this->db->query($query);
    //     $this->db->bind('keyword', "%$keyword%");
    //     return $this->db->resultSet();
    // }
