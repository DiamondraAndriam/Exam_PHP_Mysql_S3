<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {
    public function admin(){
        $this -> load -> model('admin');
        $admin = $this -> admin -> getAdmin();
        $data['email'] = $admin['email'];
        $data['mdp'] = $admin['mdp'];
        $this -> load -> view('log_admin', $data);
    }
    public function user(){
        $this -> load -> view('log_user');
    }
    public function inscription(){
        $this -> load -> view('inscription');
    }
    public function treatLogAdmin(){

    }
    public function treatLogUser(){

    }
    public function treatInscription(){

    }
}