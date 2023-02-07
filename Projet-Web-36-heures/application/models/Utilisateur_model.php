<?php
     defined('BASEPATH') OR exit('No direct script access allowed');

     class Utilisateur_model extends CI_Model {
          public function get_profile_content($id_utilisateur) {
               $sql = 'select * from objet join photo on objet.id = photo.idobjet where objet.iduser=%d';
               $sql = sprintf($sql, $id_utilisateur);
               $query = $this->db->query($sql);
               $result = array();
               $i = 0;

               foreach($query->result_array() as $row) {
                    $result[$i]['nom_objet'] = $row['nom'];
                    $result[$i]['description'] = $row['descriptions'];
                    $result[$i]['estimation'] = $row['estimation'];
                    $result[$i]['image'] = $row['lien'];
                    $result[$i]['id_objet'] = $row['idObjet'];
                    $i++;
               }
               return $result;
          }
     }
?>