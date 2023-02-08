<?php
    defined('BASEPATH') OR exit('No direct script access allowed');

    class Echange_model extends CI_model {
        public function get_echanges($id_utilisateur) {
            $sql = "select * from echange join objet on echange.idobjet1 = objet.id join (select id as userid, nom as username, email from utilisateur) as utilisateur on objet.iduser = utilisateur.userid
            join (select id as objet_id, nom as objet_nom from objet where iduser=%d) as objet_concerne on echange.idobjet2 = objet_concerne.objet_id";
            $sql = sprintf($sql, $id_utilisateur);
            $query = $this->db->query($sql);
            $result = array();
            $i = 0;

            foreach($query->result_array() as $row) {
                $result[$i]['user2'] = $row['username'];
                $result[$i]['contact_user'] = $row['email'];
                $result[$i]['nom_produit'] = $row['nom'];
                $result[$i]['estimation_objet'] = $row['estimation'];
                $result[$i]['nom_objet_concerne'] = $row['objet_nom'];
            }

            return $result;
        }
    }
?>