<?php
    defined('BASEPATH') OR exit('No direct script access allowed');

    class Actualites_f extends CI_Model
    {
        public function getActualites(){

            $sql = "SELECT  * FROM actualites ORDER BY date_actu DESC limit 8";
            $query = $this->db->query($sql);
            $actus = array();
            $i = 0;

            foreach($query->result_array() as $row)
            {   
                $actus[$i]['id_actu']=$row['id_actu'];
                $actus[$i]['type_actu']=$row['type_actu'];
                $actus[$i]['titre_actu']=$row['titre_actu'];
                $actus[$i]['preview_actu']=$row['preview_actu'];
                $actus[$i]['paragraphe']=$row['paragraphe'];
                $actus[$i]['auteur']=$row['auteur'];
                $actus[$i]['date_actu']=$row['date_actu'];
                $i++;
            }

            return $actus;
        }

        public function getActualitesById($id){

            $sql = "SELECT  * FROM actualites WHERE id_actu = ".$id;
            $query = $this->db->query($sql);
            $actus = array();
            $i = 0;

            foreach($query->result_array() as $row)
            {   
                $actus['id_actu']=$row['id_actu'];
                $actus['type_actu']=$row['type_actu'];
                $actus['titre_actu']=$row['titre_actu'];
                $actus['preview_actu']=$row['preview_actu'];
                $actus['paragraphe']=$row['paragraphe'];
                $actus['auteur']=$row['auteur'];
                $actus['date_actu']=$row['date_actu'];
                $i++;
            }

            return $actus;
        }
    }
?>