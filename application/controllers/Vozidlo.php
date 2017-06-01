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
        $this->load->library('pagination');
        $query = $this->db->query("SELECT COUNT(*) AS count FROM Vozidlo");
        $result = $query->result();
        $count = $result[0]->count;

        $config = array(
            'base_url'   => base_url().'index.php/Vozidlo/index/',
            'total_rows' => $count,
            'per_page'   => 2,
            'num_links'  => 1,

            'first_link' => "<< ",
            'last_link' => " >>",
        );

        $config['full_tag_open'] = "<ul class='pagination'>";
        $config['full_tag_close'] ="</ul>";
        $config['num_tag_open'] = '<li>';
        $config['num_tag_close'] = '</li>';
        $config['cur_tag_open'] = "<li class='disabled'><li class='active'><a href='#'>";
        $config['cur_tag_close'] = "<span class='sr-only'></span></a></li>";
        $config['next_tag_open'] = "<li>";
        $config['next_tagl_close'] = "</li>";
        $config['prev_tag_open'] = "<li>";
        $config['prev_tagl_close'] = "</li>";
        $config['first_tag_open'] = "<li>";
        $config['first_tagl_close'] = "</li>";
        $config['last_tag_open'] = "<li>";
        $config['last_tagl_close'] = "</li>";

        $this->pagination->initialize($config);

        $data['vozidlo'] = $this->m->getVozidlo($config['per_page'], $this->uri->segment(3));
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

    public function zmen($id){
        $data['vozidlo'] = $this->m->getVozidloById($id);
        $data['taxikar'] = $this->m->getTid();
        $this->load->view('template/header');
        $this->load->view('Vozidlo/zmen', $data);
        $this->load->view('template/footer');
    }

    public function aktualizuj(){
        $this->m->aktualizuj();
        redirect(base_url('index.php/Vozidlo/index'));
    }

    public function vymaz($id){
        $this->m->vymaz($id);
        redirect(base_url('index.php/Vozidlo/index'));
    }
}