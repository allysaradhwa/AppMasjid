<?php
class Pengeluaran extends Controller{
    public function index()
    {
        $data=[
            'title'=>'halaman pengeluaran', 
            'pengeluaran'=> $this->model('Pengeluaran_model')->getAllPengeluaran(),
            'total'=>$this->model('Pengeluaran_model')->getTotalPengeluaran()
        ];
        $this->view('templates/head', $data);
        $this->view('pengeluaran/tampilpengeluaran', $data);
        $this->view('templates/footer');
    }

    public function tambah_pengeluaran()
    {
        $data=[
            'title'=>'tambah pengeluaran', 
        ];
        // 'pengeluaran'=> $this->model('Pengeluaran_model')->TambahDataPengeluaran();
        $this->view('templates/head', $data);
        $this->view('pengeluaran/tambahpengeluaran', $data);
        $this->view('templates/footer');   
    }

    public function tambah()
    {
        if($this->model('Pengeluaran_model')->TambahDataPengeluaran($_POST) > 0) {
            Flasher::setFlash('berhasil', 'ditambahkan', 'success');
            header('Location:' .BASEURL. '/pengeluaran');
        } else {
            echo "<script>alert('Data Gagal Ditambahakan')</script>";
        }
    }

    public function edit_pengeluaran($id)
    {
        $data=[
            'title'=>'edit pengeluaran',
            'rows'=>$this->model('Pengeluaran_model')->getPengeluaranById($id) 
        ];
        // 'pemasukan'=> $this->model('Pengeluaran_model')->TambahDataPengeluaran();
        $this->view('templates/head', $data);
        $this->view('pengeluaran/halpengeluaran', $data);
        $this->view('templates/footer');   
    
    }

    public function edit()
    {
        if($this->model('Pengeluaran_model')->UbahDataPengeluaran($_POST) > 0) {
            Flasher::setFlash('berhasil', 'diedit', 'success');
            header('Location:' .BASEURL. '/pengeluaran');
        } else {
            echo "<script>alert('Data Gagal Diedit')</script>";
        }
    }

    public function hapus($id)
    {
        if($this->model('Pengeluaran_model')->HapusDataPengeluaran($id) > 0) {
            Flasher::setFlash('berhasil', 'dihapus', 'danger');
            header('Location:' .BASEURL. '/pengeluaran');
        } else {
            echo "<script>alert('Data Gagal Diedit')</script>";
        }
    }
}