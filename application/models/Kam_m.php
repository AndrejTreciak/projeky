<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Kam_m extends CI_Model
{
    public function getKam(){
        $query = $this->db->get('Kam');
        if($query->num_rows() > 0){
            return $query->result();
        }else{
            return false;
        }
    }

    public function potvrd(){
        $pole = array(
            'Obec'=>$this->input->post('obec'),
            'Ulica'=>$this->input->post('ulica')
        );

        $this->db->insert('Kam', $pole);
        if($this->db->affected_rows() > 0){
            return true;
        }else{
            return false;
        }
    }
}