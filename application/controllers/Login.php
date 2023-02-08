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
        if(isset($_GET['erreur'])){
            $data['erreur'] = $this-> input -> get('erreur');
            $this -> load -> view('login_user', $data);
        }
        else{
            $this -> load -> view('login_user');
        }
    }

    public function inscription(){
        if(isset($_GET['erreur'])){
            $data['erreur'] = $this-> input -> get('erreur');
            $this -> load -> view('inscription', $data);
        }
        else{
            $this -> load -> view('inscription');
        }
    }

    public function treatLogAdmin(){
        $email = $this -> input -> post('email');
        $mdp = $this -> input -> post('pwd');
        redirect("categorycontroller/trie_par_category");
    }

    public function treatLogUser(){
        $this-> load -> model('user_model');
        $email = $this -> input -> post('email');
        $mdp = $this -> input -> post('pwd');
        if($this->user_model->findUser($email,$mdp)!= null){
            redirect("acceuil");

        }
        else{
            redirect("login/inscription?erreur=1");
        }
        echo $mdp;
    }
    
    public function treatInscription(){
        $this-> load -> model('user_model');
        $nom = $this -> input -> post('nom');
        $email = $this -> input -> post('email');
        $mdp = $this -> input -> post('pwd');
        $this -> user_model -> addUser($nom, $email, $mdp);
        $data = $this -> user_model -> findUser($nom, $email);
        $this -> session -> set_userdata('user',$data);
        redirect('profil/utilisateur_profil');
    }
}