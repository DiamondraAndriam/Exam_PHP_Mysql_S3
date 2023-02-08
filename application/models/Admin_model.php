<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin_model extends CI_Model {
    public function getAdmin(){
        $query = $this -> db -> query("select * from admin");
        $result = array();
        
        foreach($query -> result_array() as $row){
            $result['email'] = $row['email'];
            $result['mdp'] = $row['mdp'];
            return $result;
        }
    }

    public function findAdmin($email,$mdp){
        $request = "select * from admin where email = '%s' AND mdp ='%s'";
        $request = sprintf($request, $email, $mdp);
        $query = $this -> db -> query($request);

        $result = array();
        
        foreach($query -> result_array() as $row){
            $result['id'] = $row['id'];
            return $result;
        }
    }

}
?>