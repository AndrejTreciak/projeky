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

    public function pridaj(){
        $data['taxikar'] = $this->m->getKid();
        $this->load->view('template/header');
        $this->load->view('Taxikar/pridaj', $data);
        $this->load->view('template/footer');
    }

    public function potvrd(){
        $this->m->potvrd();
        redirect(base_url('index.php/Taxikar/index'));
    }
}