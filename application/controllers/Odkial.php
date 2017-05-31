<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Odkial extends CI_Controller
{
    function __construct()
    {
        parent:: __construct();
        $this->load->model('Odkial_m', 'm');
    }

    public function index(){
        $data['odkial'] = $this->m->getOdkial();
        $this->load->view('template/header');
        $this->load->view('Odkial/index', $data);
        $this->load->view('template/footer');
    }
}