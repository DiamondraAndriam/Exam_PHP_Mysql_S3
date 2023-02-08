<?
defined('BASEPATH') OR exit('No direct script access allowed');

class Mirenty_Model extends CI_Model
{
    function ficheobjet($identifiant)
    {
        $req = $this->db->query('select * from objet where id=' . $identifiant);
        $row = $req->row_array();
        $data['id'] = $row['id'];
        $data['iduser'] = $row['iduser'];
        $data['nom'] = $row['nom'];
        $data['idcategorie'] = $row['idcategory'];
        $data['description'] = $row['descriptions'];
        $data['estimation'] = $row['estimation'];
        $req2 = $this->db->query('select nom from utilisateur where id=' . $data['iduser']);
        $ligne = $req2->row_array();
        $data['utilisateur'] = $ligne['nom'];
        $req3 = $this->db->query('select nom from category where id=' . $data['idcategorie']);
        $reihe = $req3->row_array();
        $data['categorie'] = $reihe['nom'];
        $data['lienphoto'] = $this->Mirenty_Model->getphotobyidobject($data['id']);
        return $data;
    }
    function getAll($tablename)
    {
        $tab = array();
        $req = $this->db->query('select * from ' . $tablename);
        $bat = $req->result_array();
        for ($i = 0; $i < count($bat); $i++) {
            $tab[$i] = $bat[$i];
        }
        return $tab;
    }
    function getphotobyidobject($id)
    {
        $req = $this->db->query('select lien from photo where idobjet=' . $id);
        $row = $req->row_array();
        return $row['lien'];
    }
    function getallobjectinacategory($identifiant)
    {
        $tab = array();
        $req = $this->db->query('select id from objet where idcategory=' . $identifiant);
        $bat = $req->result_array();
        for ($i = 0; $i < count($bat); $i++) {
            $tab[$i] = $bat[$i]['id'];
        }
        for ($u = 0; $u < count($tab); $u++) {
            $objet[$u] = $this->Mirenty_Model->ficheobjet($tab[$u]);
        }
        return $objet;
    }
    function findidobjectbyiduser($id)
    {
        $tab = array();
        $req = $this->db->query('select id from objet where iduser=' . $id);
        $bat = $req->result_array();
        for ($i = 0; $i < count($bat); $i++) {
            $tab[$i] = $bat[$i]['id'];
        }
        return $tab;
    }
    function userobjects($iduser)
    {      
        
        $data['userobjectsid']=$this->Mirenty_Model->findidobjectbyiduser($iduser);
        foreach ($data['userobjectsid'] as $num) 
        {
            $data['userobjects'][]=$this->Mirenty_Model->ficheobjet($num);
        }
        // print_r($data);
        return $data;
    }
    function recherche($input,$col1, $table,$col2)
    {
        $req = $this->db->query('select ' . $col1 . ' from ' . $table . ' order by id desc ');
        $num_rows = $req->num_rows();
        $res = array();
        if(isset($input) AND !empty($input))
        {
            $in = htmlspecialchars($input);
            $un="'%".$in."%'";
            $req = $this->db->query('select ' . $col1 . ' from ' . $table . ' where '.$col1. ' like ' .$un. ' order by id desc');
            $num_rows = $req->num_rows();    
            if ($num_rows == 0) 
            {
                if ($col2 !== "")
                    $col2 ="," .$col2;
                $req = $this->db->query
                ('select ' . $col1 . ' from ' . $table . ' where concat('.$col1.$col2. ') like ' .$un. ' order by id desc');
            }
            foreach($req->result_array() as $row)
            {   
                $res[]=$row;
            }
            if (empty($res))
            {
                $res[] = "AUCUN RESULTA";
            }
            
            return $res; 
        }
        if ($num_rows > 0) 
        {
            foreach($req->result_array() as $row)
            {   
                $res[]=$row;
            }
            return $res; 
        } 
        else {
            return $res[]="AUCUN RESULTAT";
        }
    }
    function search($keywords,$category,$col1, $table, $location,$col2) {

        // Appeler la fonction de recherche avec les critères de recherche appropriés
        $results = $this->recherche($keywords, $col1, $table, $col2);
        
        // Filtrer les résultats en fonction des critères de catégorie et de localisation
        if (!empty($category)) {
            $results = array_filter($results, function($result) use ($category) {
                return $result['column3'] == $category;
            });
        }
        if (!empty($location)) {
            $results = array_filter($results, function($result) use ($location) {
            return $result['column4'] == $location;
            });
        }
        // Retourner les résultats filtrés
        return $results;
        }
}