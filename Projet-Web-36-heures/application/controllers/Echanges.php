<?php
    defined('BASEPATH') OR exit('No direct script access allowed');

    class Echanges extends CI_Controller {
        public function liste_echange($id_utilisateur) {
            $data['echange'] = $this->echange_model->get_echanges($id_utilisateur);
            $this->load->view('liste-echange', $data);
        }
    }
?>