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

    public function get_odkial(){
        $query = $this->db->query("SELECT o.Obec, COUNT(o.idOdkial) AS pocet FROM Cesta c
                                INNER JOIN Odkial o ON o.idOdkial = c.Odkial_idOdkial
                                GROUP BY Obec");

        if($query->num_rows() > 0){
            return $query->result();
        }else{
            return false;
        }
    }

    public function get_kam(){
        $query = $this->db->query("SELECT k.Obec, COUNT(k.idKam) AS pocet FROM Cesta c
                                INNER JOIN Kam k ON k.idKam = c.Kam_idKam
                                GROUP BY Obec");

        if($query->num_rows() > 0){
            return $query->result();
        }else{
            return false;
        }
    }

    public function get_mesiac(){
        $query = $this->db->query("SELECT MONTH(Datum) AS datum, COUNT(idCesta) AS pocet FROM Cesta
                                  GROUP BY MONTH(Datum)");

        if($query->num_rows() > 0){
            return $query->result();
        }else{
            return false;
        }
    }
}





