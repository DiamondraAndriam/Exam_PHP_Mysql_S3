<?php
     defined('BASEPATH') OR exit('No direct script access allowed');

     class Profil extends CI_Controller {
          
          public function user_profile($user) {
          $this->load->model('Utilisateur_model');
               $data['profil'] = $this->Utilisateur_model->get_profile_content($user);
               $this->load->view('utilisateur_profil', $data);
          }
          public function load_formulaire() {
               $this->load->view('ajout_objet');
          }
     }
?>