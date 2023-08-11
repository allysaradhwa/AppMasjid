<?php
class Admin extends Controller{
    public function index()
    {
        $data=[
            'title'=>'halaman admin', 
            'admin'=> $this->model('Admin_model')->getAllAdmin()
        ];
        $this->view('templates/head', $data);
        $this->view('admin/tampiladmin', $data);
        $this->view('templates/footer');
    }


    public function edit_admin($id)
    {
        $data=[
            'title'=>'edit admin',
            'rows'=>$this->model('Admin_model')->getAdminById($id) 
        ];
        $this->view('templates/head', $data);
        $this->view('admin/editadmin', $data);
        $this->view('templates/footer');   
    }

    public function edit()
    {
        if($this->model('Admin_model')->UbahDataAdmin($_POST) > 0){
            Flasher::setFlash('berhasil', 'diedit', 'success');
            header('Location: ' . BASEURL. '/admin');
        } else{
            echo "<script>alert('Data Gagal Diubah')</script>";
        }
        
    }

}