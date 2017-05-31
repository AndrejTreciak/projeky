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
}