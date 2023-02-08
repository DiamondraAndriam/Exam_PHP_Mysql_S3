<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Categorie_Controler extends CI_Controller {

    /**
     * Index Page for this controller.
     *
     * Maps to the following URL
     * 		http://example.com/index.php/welcome
     *	- or -
     * 		http://example.com/index.php/welcome/index
     *	- or -
     * Since this controller is set as the default controller in
     * config/routes.php, it's displayed at http://example.com/
     *
     * So any other public methods not prefixed with an underscore will
     * map to /index.php/welcome/<method_name>
     * @see https://codeigniter.com/user_guide/general/urls.html
     */
    public function test($id)
    {
        $data['tab'] = $this->Mirenty_Model->ficheobjet($id);
        $this->load->view('Categorie_View',$data);
    }	
    public function trie_par_categorie($id)
    {
        $this->load->helper('form_helper');
        
        $options = array(
            '1'         => 'electronique',
            '2'         => 'cosmetique',
            '3'         => 'decoration',
            '4'         => 'bijout',
            '5'         => 'acessoires',
        );

        $attributes = array('method' => 'get', 'id' => 'form_id', 'class' => 'form_class');
        $data['form']
        =""
        . form_open('',$attributes) 
        . form_dropdown('category', $options, 'accessoire', 'class="categories"')
        . form_submit('submit','entre','')
        . form_close();
        
        $this->load->view('Categorie_View',$data);


    }
    public function liste_utilisateur($id)
    {   
        $data['users']=$this->Mirenty_Model->getAll('utilisateur');
        $this->load->view('ListeUtilisateur_View',$data);
    }
    public function liste_objet_utilisateur($iduser)
    {
        
        $data['userobjects']=$this->Mirenty_Model->userobjects($iduser);
        $this->load->view('ListeObjetUtilisateur_View',$data);
        
    }
    public function recherche($mot,$category,$location) 
    {   
        $this->load->view('Recherche_View');

    }
}