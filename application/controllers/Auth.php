<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Auth extends CI_Controller 
{
    public function index(){
        $this->load->view('templates/header_auth');
        $this->load->view('auth/login');
        $this->load->view('templates/footer_auth');
    }
    public function register()
    {
        $this->load->view('templates/header_auth');
        $this->load->view('auth/register');
        $this->load->view('templates/footer_auth');
    }

    public function logout()
}
