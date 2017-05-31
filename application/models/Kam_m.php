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
}