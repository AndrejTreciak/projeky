<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Vozidlo extends CI_Controller
{
    function __construct()
    {
        parent:: __construct();
        $this->load->model('Vozidlo_m', 'm');
    }

    public function index(){
        $data['vozidlo'] = $this->m->getVozidlo();
        $this->load->view('template/header');
        $this->load->view('Vozidlo/index', $data);
        $this->load->view('template/footer');
    }

    public function pridaj(){
        $data['vozidlo'] = $this->m->getTid();
        $this->load->view('template/header');
        $this->load->view('Vozidlo/pridaj', $data);
        $this->load->view('template/footer');
    }

    public function potvrd(){
        $this->m->potvrd();
        redirect(base_url('index.php/Vozidlo/index'));
    }
}