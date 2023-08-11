<?php
class Auth extends Controller{
    public function index()
    {
        $this->view('auth/login');
    }

    public function loginData()
    {
        $this->model('Auth_model')->loginAdmin($_POST);
    }

    public function logout()
    {
        session_start();
        session_destroy();
        header('Location:'. BASEURL.'/auth');
    }

    
}