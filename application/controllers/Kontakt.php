<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Kontakt extends CI_Controller
{
    function __construct()
    {
        parent:: __construct();
        $this->load->model('Kontakt_m', 'm');
    }

    public function index(){
        $data['kontakt'] = $this->m->getKontakt();
        $this->load->view('template/header');
        $this->load->view('Kontakt/index', $data);
        $this->load->view('template/footer');
    }
}