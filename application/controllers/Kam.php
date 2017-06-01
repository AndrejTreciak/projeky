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

    public function pridaj(){
        $this->load->view('template/header');
        $this->load->view('Kam/pridaj');
        $this->load->view('template/footer');
    }

    public function zmen($id){
        $data['kam'] = $this->m->getKamById($id);
        $this->load->view('template/header');
        $this->load->view('Kam/zmen', $data);
        $this->load->view('template/footer');
    }

    public function potvrd(){
        $this->m->potvrd();
        redirect(base_url('index.php/Kam/index'));
    }

    public function aktualizuj(){
        $this->m->aktualizuj();
        redirect(base_url('index.php/Kam/index'));
    }

    public function vymaz($id){
        $this->m->vymaz($id);
        redirect(base_url('index.php/Kam/index'));
    }
}