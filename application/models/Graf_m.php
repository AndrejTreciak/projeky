<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Graf_m extends CI_Model{

    public function get_ceny(){
        $query = $this->db->query("SELECT c.Cena, o.Obec AS odkial, k.Obec AS kam FROM Cesta c
                                INNER JOIN Odkial o ON o.idOdkial = c.Odkial_idOdkial
                                INNER JOIN Kam k ON k.idKam = c.Kam_idKam");

        if($query->num_rows() > 0){
            return $query->result();
        }else{
            return false;
        }
    }
}