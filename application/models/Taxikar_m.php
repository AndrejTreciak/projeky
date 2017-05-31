<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Taxikar_m extends CI_Model
{
    public function getTaxikar(){
        $query = $this->db->get('Taxikár');
        if($query->num_rows() > 0){
            return $query->result();
        }else{
            return false;
        }
    }
}