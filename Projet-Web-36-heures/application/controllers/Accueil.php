<?php
     defined('BASEPATH') OR exit('No direct script access allowed');

     class Accueil extends CI_Controller {
          
          public function index() {
               $this->load->view('page_accueil');
          }

          public function profile_content() {
               
          }
     }
?>