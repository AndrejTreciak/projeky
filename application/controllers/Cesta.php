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

    public function pridaj(){
        $data['odkial'] = $this->m->getOdkial();
        $data['kam'] = $this->m->getKam();
        $data['vozidlo'] = $this->m->getVozidlo();
        $this->load->view('template/header');
        $this->load->view('Cesta/pridaj', $data);
        $this->load->view('template/footer');
    }

    public function potvrd(){
        $this->m->potvrd();
        redirect(base_url('index.php/Cesta/index'));
    }
}