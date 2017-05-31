<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Taxikar extends CI_Controller
{
    function __construct()
    {
        parent:: __construct();
        $this->load->model('Taxikar_m', 'm');
    }

    public function index(){
        $data['taxikar'] = $this->m->getTaxikar();
        $this->load->view('template/header');
        $this->load->view('Taxikar/index', $data);
        $this->load->view('template/footer');
    }
}