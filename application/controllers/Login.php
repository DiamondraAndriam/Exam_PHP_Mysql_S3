<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {
    public function admin(){
        $this -> load -> model('admin_model');
        $admin = $this -> admin_model -> getAdmin();
        $data['email'] = $admin['email'];
        $data['mdp'] = $admin['mdp'];
        $this -> load -> view('login_admin', $data);
    }
    public function user(){
        $this -> load -> view('login_user');
    }
    public function inscription(){
        $this -> load -> view('inscription');
    }
    public function treatLogAdmin(){
        $email = $this -> input -> post('email');
        $mdp = $this -> input -> post('pwd');
        //echo $email;
        echo $mdp;
    }
    public function treatLogUser(){
        $email = $this -> input -> post('email');
        $mdp = $this -> input -> post('pwd');
        echo $email;
        echo $mdp;
    }
    public function treatInscription(){
        $nom = $this -> input -> post('nom');
        $prenoms = $this -> input -> post('prenoms');
        $email = $this -> input -> post('email');
        $mdp = $this -> input -> post('pwd');
        echo $nom;
        echo $prenoms;
        echo $email;
        echo $mdp;
    }
}