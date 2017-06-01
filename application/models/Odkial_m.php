<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Odkial_m extends CI_Model
{
    public function getOdkial($limit = 0, $offset = 0){
        $query = $this->db->get('Odkial', $limit, $offset);
        if($query->num_rows() > 0){
            return $query->result();
        }else{
            return false;
        }
    }

    public function getOdkialById($id){
        $this->db->where('IDOdkial', $id);
        $query = $this->db->get('Odkial');
        if($query->num_rows() > 0){
            return $query->row();
        }else{
            return false;
        }
    }

    public function potvrd(){
        $pole = array(
            'Obec'=>$this->input->post('obec'),
            'Ulica'=>$this->input->post('ulica')
        );

        $this->db->insert('Odkial', $pole);
        if($this->db->affected_rows() > 0){
            return true;
        }else{
            return false;
        }
    }

    public function aktualizuj(){
        $id = $this->input->post('txt_hidden');
        $field = array(
            'Obec'=>$this->input->post('obec'),
            'Ulica'=>$this->input->post('ulica')
        );
        $this->db->where('IDOdkial', $id);
        $this->db->update('Odkial', $field);
        echo $this->db->last_query();extit;
        if($this->db->affected_rows() > 0){
            return true;
        }else{
            return false;
        }
    }

    public function vymaz($id){
        $this->db->where('IDOdkial', $id);
        $this->db->delete('Odkial');
        if($this->db->affected_rows() > 0){
            return true;
        }else{
            return false;
        }
    }
}