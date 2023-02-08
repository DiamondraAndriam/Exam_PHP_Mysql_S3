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
        redirect("categorie_Controler/trie_par_categorie/1");
    }

    public function treatLogUser(){
        
        $email = $this -> input -> post('email');
        $mdp = $this -> input -> post('pwd');
        $this -> load -> model('user_model');
        $data = $this -> user_model -> findUser($email,$mdp);
        if($data != null){
            $this -> session -> set_userdata('user',$data);
            redirect("profil/user_profile/".$data['id']);
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
        redirect('profil/user_profil/'.$data['id']);
    }
}