<?php

class Dashboard extends Controller{

    public function index()
    {
        $data = ['title'=>'dashboard',
                'pemasukan'=>$this->model('Dashboard_model')->getTotalPemasukan(),
                'pengeluaran'=>$this->model('Dashboard_model')->getTotalPengeluaran(),
                'admin'=>$this->model('Dashboard_model')->getAllAdmin()

    ];
        $this->view('templates/head', $data);
        $this->view('dashboard/dashboard', $data);
        $this->view('templates/footer');
    }
}