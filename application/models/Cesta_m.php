<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Cesta_m extends CI_Model
{
    public function getCesta($limit = 0, $offset = 0){
        $query = $this->db->get('Cesta', $limit, $offset);
        if($query->num_rows() > 0){
            return $query->result();
        }else{
            return false;
        }
    }

    public function getCestaById($id){
        $this->db->where('idCesta', $id);
        $query = $this->db->get('Cesta');
        if($query->num_rows() > 0){
            return $query->row();
        }else{
            return false;
        }
    }

    public function potvrd(){
        $pole = array(
            'Cena'=>$this->input->post('cena'),
            'Datum'=>$this->input->post('datum'),
            'Odkial_idOdkial'=>$this->input->post('odkial'),
            'Kam_idKam'=>$this->input->post('kam'),
            'Vozidlo_idVozidlo'=>$this->input->post('vozidlo')
        );

        $this->db->insert('Cesta', $pole);
        if($this->db->affected_rows() > 0){
            return true;
        }else{
            return false;
        }
    }

    public function getOdkial(){
        $query = $this->db->query("SELECT Odkial_idOdkial FROM Cesta");

        if($query->num_rows() > 0){
            return $query->result();
        }else{
            return false;
        }
    }

    public function getKam(){
        $query = $this->db->query("SELECT Kam_idKam FROM Cesta");

        if($query->num_rows() > 0){
            return $query->result();
        }else{
            return false;
        }
    }

    public function getVozidlo(){
        $query = $this->db->query("SELECT Vozidlo_idVozidlo FROM Cesta");

        if($query->num_rows() > 0){
            return $query->result();
        }else{
            return false;
        }
    }




    public function aktualizuj($id){
        $id = $this->input->post('txt_hidden');
        $field = array(
            'Cena'=>$this->input->post('cena'),
            'Datum'=>$this->input->post('datum'),
            'Odkial_idOdkial'=>$this->input->post('odkial'),
            'Kam_idKam'=>$this->input->post('kam'),
            'Vozidlo_idVozidlo'=>$this->input->post('vozidlo')
        );
        $this->db->where('idCesta', $id);
        $this->db->update('Cesta', $field);
        echo $this->db->last_query();extit;
        if($this->db->affected_rows() > 0){
            return true;
        }else{
            return false;
        }
    }

    public function vymaz($id){
        $this->db->where('idCesta', $id);
        $this->db->delete('Cesta');
        if($this->db->affected_rows() > 0){
            return true;
        }else{
            return false;
        }
    }
}