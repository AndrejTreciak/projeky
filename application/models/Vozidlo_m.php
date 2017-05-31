<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Vozidlo_m extends CI_Model
{
    public function getVozidlo(){
        $query = $this->db->get('Vozidlo');
        if($query->num_rows() > 0){
            return $query->result();
        }else{
            return false;
        }
    }

    public function pridaj(){
        $pole = array(
            'Vodic_ID'=>$ID,
            'Znacka'=>$this->input->post('znacka'),
            'Typ'=>$this->input->post('typ'),
            'SPZ'=>$this->input->post('spz')
        );

        $this->db->insert('Vozidlo', $pole);
        if($this->db->affected_rows() > 0){
            return true;
        }else{
            return false;
        }
    }
}