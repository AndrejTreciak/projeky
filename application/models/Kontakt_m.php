<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Kontakt_m extends CI_Model
{
    public function getKontakt(){
        $query = $this->db->get('Kontakt');
        if($query->num_rows() > 0){
            return $query->result();
        }else{
            return false;
        }
    }

    public function potvrd(){
        $pole = array(
            'Tel_Cislo'=>$this->input->post('telc')
        );

        $this->db->insert('Kontakt', $pole);
        if($this->db->affected_rows() > 0){
            return true;
        }else{
            return false;
        }
    }
}