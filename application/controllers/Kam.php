<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Kam extends CI_Controller
{
    function __construct()
    {
        parent:: __construct();
        $this->load->model('Kam_m', 'm');
    }

    public function index(){
        $data['kam'] = $this->m->getKam();
        $this->load->view('template/header');
        $this->load->view('Kam/index', $data);
        $this->load->view('template/footer');
    }
}