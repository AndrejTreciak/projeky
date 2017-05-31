<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Odkial_m extends CI_Model
{
    public function getOdkial(){
        $query = $this->db->get('Odkial');
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

        $this->db->insert('Odkial', $pole);
        if($this->db->affected_rows() > 0){
            return true;
        }else{
            return false;
        }
    }
}