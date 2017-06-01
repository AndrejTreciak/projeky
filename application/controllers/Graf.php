<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Graf extends CI_Controller{

    function __construct(){
        parent:: __construct();
        $this->load->model('Graf_m', 'm');
    }

    function index(){
        $data['ceny'] = $this->m->get_ceny();
        $this->load->view('template/header');
        $this->load->view('template/body', $data);
        $this->load->view('template/footer');
    }
}