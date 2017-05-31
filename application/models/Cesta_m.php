<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Cesta_m extends CI_Model
{
    public function getCesta(){
        $query = $this->db->get('Cesta');
        if($query->num_rows() > 0){
            return $query->result();
        }else{
            return false;
        }
    }
}