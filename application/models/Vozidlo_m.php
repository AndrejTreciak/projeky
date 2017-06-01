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

    public function potvrd(){
        $pole = array(
            'Znacka'=>$this->input->post('znacka'),
            'Evidencne_cislo'=>$this->input->post('evc'),
            'Taxikár_idTaxikár'=>$this->input->post('T_ID')
        );

        $this->db->insert('Vozidlo', $pole);
        if($this->db->affected_rows() > 0){
            return true;
        }else{
            return false;
        }
    }

    public function getTid(){
        $query = $this->db->query("SELECT Taxikár_idTaxikár FROM Vozidlo");

        if($query->num_rows() > 0){
            return $query->result();
        }else{
            return false;
        }
    }
}