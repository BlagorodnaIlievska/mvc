<?php  if (!defined('BASEPATH')) {
    exit('No direct script access allowed');
}

class Banki extends CI_Controller
{

    function __construct()
    {
        parent::__construct();
        //$this->is_logged_in();
    }

    public function nov()
    {

        $this->load->view('podatoci/banki/nov');
    }


    public function izmeni()
    {
        $this->load->model('podatoci/banki_model');
        $banka = $this->banki_model->getBanka($this->input->get("id"));
        $data['banka']      = $banka;

        $this->load->view('podatoci/banki/izmeni', $data);
    }


    public function lista()
    {
        $this->load->view('podatoci/banki/lista');
    }

    public function popolnilista()
    {

        //$data['main_content'] = 'podatoci/katalog/popolnilista';
        $this->load->model('podatoci/banki_model');
        $return = $this->banki_model->getBanki();
        echo json_encode($return);
    }





    public function create_banka()
    {
        $this->load->model('podatoci/banki_model');
        $this->banki_model->create_banka();
        echo "ok";
    }



    public function update_banka()
    {
        $this->load->model('podatoci/banki_model');
        $this->banki_model->update_banka();
        echo "ok";
    }

    public function delete_banka()
    {
        $id = $this->input->get("id");
        $this->load->model('podatoci/banki_model');
        $this->banki_model->delete_banka($id);
        echo "ok";
    }
}