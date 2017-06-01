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

    public function zmen($id){
        $data['taxikar'] = $this->m->getTaxikarById($id);
        $data['kontakt'] = $this->m->getKid($id);
        $this->load->view('template/header');
        $this->load->view('Taxikar/zmen', $data);
        $this->load->view('template/footer');
    }

    public function aktualizuj(){
        $this->m->aktualizuj();
        redirect(base_url('index.php/Taxikar/index'));
    }

    public function vymaz($id){
        $this->m->vymaz($id);
        redirect(base_url('index.php/Taxikar/index'));
    }
}