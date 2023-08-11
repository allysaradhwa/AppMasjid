<?php
class Rekap extends Controller{
    public function index()
    {
        $data=[
            'title'=>'halaman rekap', 
            'rekap'=>$this->model('Rekap_model')->getAllRekap()
        ];
        $this->view('templates/head', $data);
        $this->view('rekap/tampilrekap', $data);
        $this->view('templates/footer');
    }


}