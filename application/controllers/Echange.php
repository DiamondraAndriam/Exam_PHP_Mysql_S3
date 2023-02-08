<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Echange extends CI_Controller {
    public function echanger($id_Objet){
        if($id_Objet==null){
            redirect("/");
        }
        /*
        $this -> load -> model("_model");
        $data['mesObjets'] = $this -> _model -> findMyObjects;
        
        */
        $data['id_obj'] = $id_Objet;
        $this->load->view('echange', $data);
    }
}
?>