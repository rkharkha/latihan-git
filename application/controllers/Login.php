<?php

class Login extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
    }
    public function index()
    {
      $this->load->view('layouts/header');
      $this->load->view('home/index');
      $this->load->view('layouts/footer');

       
    }
}
