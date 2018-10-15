<?php
class Primer extends CI_Controller{

    function combo(){

        $data['main_content'] = 'primer';
        //$data['ajax'] = 1;
        $this->load->view('includes/template', $data);

    }
    function combodata(){
        $varx=array(
            array("id"=>0,"label"=>"Bojan"),
            array("id"=>1,"label"=>"Toni")

        );
        echo json_encode($varx);
    }
}