<?php
class Pemasukan extends Controller{
    public function index()
    {
        $data=[
            'title'=>'halaman pemasukan', 
            'pemasukan'=> $this->model('Pemasukan_model')->getAllPemasukan(),
            'total'=>$this->model('Pemasukan_model')->getTotalPemasukan()
        ];
        $this->view('templates/head', $data);
        $this->view('pemasukan/tampilpemasukan', $data);
        $this->view('templates/footer');
    }

    public function tambah_pemasukan()
    {
        $data=[
            'title'=>'tambah pemasukan', 
        ];
        // 'pemasukan'=> $this->model('Pemasukan_model')->TambahDataPemasukan();
        $this->view('templates/head', $data);
        $this->view('pemasukan/tambahpemasukan', $data);
        $this->view('templates/footer');   
    }

    public function tambah()
    {
        if($this->model('Pemasukan_model')->TambahDataPemasukan($_POST) > 0) {
            Flasher::setFlash('berhasil', 'ditambahkan', 'success');
            header('Location:' .BASEURL. '/pemasukan');
        } else {
            echo "<script>alert('Data Gagal Ditambahakan')</script>";
        }
    }

    public function edit_pemasukan($id)
    {
        $data=[
            'title'=>'edit pemasukan',
            'rows'=>$this->model('Pemasukan_model')->getPemasukanById($id) 
        ];
        // 'pemasukan'=> $this->model('Pemasukan_model')->TambahDataPemasukan();
        $this->view('templates/head', $data);
        $this->view('pemasukan/halpemasukan', $data);
        $this->view('templates/footer');   
    
    }

    public function edit()
    {
        if($this->model('Pemasukan_model')->UbahDataPemasukan($_POST) > 0) {
            Flasher::setFlash('berhasil', 'diedit', 'success');
            header('Location:' .BASEURL. '/pemasukan');
        } else {
            echo "<script>alert('Data Gagal Diedit')</script>";
        }
    }

    public function hapus($id)
    {
        if($this->model('Pemasukan_model')->HapusDataPemasukan($id) > 0) {
            Flasher::setFlash('berhasil', 'dihapus', 'danger');
            header('Location:' .BASEURL. '/pemasukan');
        } else {
            echo "<script>alert('Data Gagal Diedit')</script>";
        }
    }
}