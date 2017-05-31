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
}