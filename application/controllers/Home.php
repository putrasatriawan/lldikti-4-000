<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Home extends CI_Controller
{

    public function index()
    {
        $this->load->helper('url');
        $this->load->view('templates/header');
        $this->load->view('templates/navbar');
        $this->load->view('templates/main');
        $this->load->view('templates/footer');
    }
}