<?php
     defined('BASEPATH') OR exit('No direct script access allowed');

     class Profil extends CI_Controller {
          
          public function user_profile($user) {
               $data['profil'] = $this->utilisateur_model->get_profile_content($user);
               $this->load->view('utilisateur_profil', $data);
          }
     }
?>