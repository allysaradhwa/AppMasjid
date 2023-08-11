<?php
class Laporan extends Controller{
    public function index()
    {
        $data = [
            'title'=> 'cetak kas masjid'
        ];
        $this->view('templates/head', $data);
        $this->view('laporan/laporankas');
        $this->view('templates/footer');
    }

    public function cetak()
    {
        $data=[
            'title'=> 'cetak laporan',
            'rekap'=>$this->model('Laporan_model')->getAllRekap($_POST),
            'dari'=>$_POST['dari'],
            'sampai'=>$_POST['sampai'],
        ];
        $this->view('laporan/cetak', $data);
    }

    public function cetak_semua()
    {
        $data=[
            'title'=> 'cetak laporan',
            'rekap'=>$this->model('Laporan_model')->getAllPriode(),
            'pemasukan'=>$this->model('Dashboard_model')->getTotalPemasukan(),
            'pengeluaran'=>$this->model('Dashboard_model')->getTotalPengeluaran(),
        ];
        $this->view('laporan/cetak_semua', $data);
    }

}