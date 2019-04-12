<?php

class Home extends CI_Controller
{

    function __construct(){
        parent::__construct();
    }

    function index(){
        $this->load->view('includes/header');
        $this->load->view('includes/menuizq');
        $this->load->view('home');
        $this->load->view('includes/footer');
        $this->load->view('includes/scripts');
    }

}


?>