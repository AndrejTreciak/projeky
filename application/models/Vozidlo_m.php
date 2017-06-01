<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Vozidlo_m extends CI_Model
{
    public function getVozidlo($limit = 0, $offset = 0){
        $query = $this->db->get('Vozidlo', $limit, $offset);
        if($query->num_rows() > 0){
            return $query->result();
        }else{
            return false;
        }
    }

    public function getVozidloById($id){
        $this->db->where('idVozidlo', $id);
        $query = $this->db->get('Vozidlo');
        if($query->num_rows() > 0){
            return $query->row();
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
        $query = $this->db->query("SELECT idTaxikár FROM `Taxikár` ORDER BY idTaxikár");

        if($query->num_rows() > 0){
            return $query->result();
        }else{
            return false;
        }
    }

    public function aktualizuj(){
        $id = $this->input->post('txt_hidden');
        $field = array(
            'Znacka'=>$this->input->post('znacka'),
            'Evidencne_cislo'=>$this->input->post('evc'),
            'Taxikár_idTaxikár'=>$this->input->post('T_ID')
        );
        $this->db->where('IDVozidlo', $id);
        $this->db->update('Vozidlo', $field);
        echo $this->db->last_query();extit;
        if($this->db->affected_rows() > 0){
            return true;
        }else{
            return false;
        }
    }

    public function vymaz($id){
        $this->db->where('IDVozidlo', $id);
        $this->db->delete('Vozidlo');
        if($this->db->affected_rows() > 0){
            return true;
        }else{
            return false;
        }
    }
}