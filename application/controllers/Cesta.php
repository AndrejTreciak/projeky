<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Cesta extends CI_Controller
{
    function __construct()
    {
        parent:: __construct();
        $this->load->model('Cesta_m', 'm');
    }

    public function index(){
        $data['cesta'] = $this->m->getCesta();
        $this->load->view('template/header');
        $this->load->view('Cesta/index', $data);
        $this->load->view('template/footer');
    }
}