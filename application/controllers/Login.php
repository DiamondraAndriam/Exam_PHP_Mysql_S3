<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {
    public function admin(){
        $this -> load -> view('log_admin');
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