<?php
class Htmltopdf extends CI_Controller{

    function __construct()
    {
        parent::__construct();
    }


    function index(){
        $this->load->helper('to_pdf');
        // page info here, db calls, etc.
        $data['primer']='bla bla';
        $html = $this->load->view('izlezni_fakturi/pregled_izlezni/primer', $data, true);
        pdf_create($html, 'filename')
        or
        $data = pdf_create($html, '', false);
        write_file('name', $data);
    }
}
?>  