<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Kontakt_m extends CI_Model
{
    public function getKontakt(){
        $query = $this->db->get('Kontakt');
        if($query->num_rows() > 0){
            return $query->result();
        }else{
            return false;
        }
    }

    public function getKontaktById($id){
        $this->db->where('IDKontakt', $id);
        $query = $this->db->get('Kontakt');
        if($query->num_rows() > 0){
            return $query->row();
        }else{
            return false;
        }
    }

    public function potvrd(){
        $pole = array(
            'Tel_Cislo'=>$this->input->post('telc')
        );

        $this->db->insert('Kontakt', $pole);
        if($this->db->affected_rows() > 0){
            return true;
        }else{
            return false;
        }
    }

    public function aktualizuj(){
        $id = $this->input->post('txt_hidden');
        $field = array(
            'Tel_Cislo'=>$this->input->post('telc')
        );
        $this->db->where('IDKontakt', $id);
        $this->db->update('Kontakt', $field);
        echo $this->db->last_query();extit;
        if($this->db->affected_rows() > 0){
            return true;
        }else{
            return false;
        }
    }

    public function vymaz($id){
        $this->db->where('IDKontakt', $id);
        $this->db->delete('Kontakt');
        if($this->db->affected_rows() > 0){
            return true;
        }else{
            return false;
        }
    }
}