<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Info extends CI_Controller {
    function __construct()
    {
        parent::__construct();


    }
    function index(){
        $data['main_content'] = 'includes/info';
        //$data['ajax'] = 1;
        $this->load->view('includes/template', $data);
    }
}
