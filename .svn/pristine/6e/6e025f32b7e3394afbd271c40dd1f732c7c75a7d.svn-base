<?php
class MY_Controller extends CI_Controller{

    public function __construct(){
        parent::__construct();
        $this->is_logged_in();
    }

    public function is_logged_in()
    {
        $is_logged_in = $this->session->userdata('is_logged_in');

        if(!isset($is_logged_in) || $is_logged_in != true)
        {
            echo 'You don\'t have permition to access this page. <a href="../login">Login</a>';
            die();
        }
    }
}