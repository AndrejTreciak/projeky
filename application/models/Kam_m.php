<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Kam_m extends CI_Model
{
    public function getKam($limit = 0, $offset = 0){
        $query = $this->db->get('Kam', $limit, $offset);
        if($query->num_rows() > 0){
            return $query->result();
        }else{
            return false;
        }
    }

    public function getKamById($id){
        $this->db->where('IDKam', $id);
        $query = $this->db->get('Kam');
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

        $this->db->insert('Kam', $pole);
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
        $this->db->where('IDKam', $id);
        $this->db->update('Kam', $field);
        echo $this->db->last_query();extit;
        if($this->db->affected_rows() > 0){
            return true;
        }else{
            return false;
        }
    }

    public function vymaz($id){
        $this->db->where('IDKam', $id);
        $this->db->delete('Kam');
        if($this->db->affected_rows() > 0){
            return true;
        }else{
            return false;
        }
    }
}