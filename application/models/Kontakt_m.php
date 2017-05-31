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
}