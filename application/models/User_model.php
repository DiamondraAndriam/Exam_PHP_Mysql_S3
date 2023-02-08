<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User extends CI_Model {
    public function findUser($email,$mdp){
        $request = "select * from user where email = '%s' AND mdp ='%s'";
        $request = sprintf($request, $email, $mdp);
        $query = $this -> db -> query($request);

        $result = array();
        
        foreach($query -> result_array() as $row){
            $result['id'] = $row['id'];
            $result['email'] = $email;
            $result['nom'] = $row['nom'];
            return $result;
        }
        return null;
    }

    public function addUser($nom, $email, $mdp){
        $request = "INSERT INTO Utilisateur(nom, mdp, email, date_inscrit) VALUES('%s', '%s', '%s',now())";
        $request = sprintf($request, $nom, $mdp,$email);
    }
}
?>