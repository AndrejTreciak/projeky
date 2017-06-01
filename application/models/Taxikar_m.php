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

    public function potvrd(){
        $pole = array(
            'Meno'=>$this->input->post('meno'),
            'Priezvisko'=>$this->input->post('priezvisko'),
            'vek'=>$this->input->post('vek'),
            'Kontakt_idKontakt'=>$this->input->post('K_ID')
        );

        $this->db->insert('Taxikár', $pole);
        if($this->db->affected_rows() > 0){
            return true;
        }else{
            return false;
        }
    }

    public function getKid(){
        $query = $this->db->query("SELECT Kontakt_idKontakt FROM Taxikár");

        if($query->num_rows() > 0){
            return $query->result();
        }else{
            return false;
        }
    }
}