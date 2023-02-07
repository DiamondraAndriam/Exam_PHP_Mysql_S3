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
            return $result;
        }
    }
    
}
?>