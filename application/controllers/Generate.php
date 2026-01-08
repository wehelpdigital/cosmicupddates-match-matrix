<?php
class generate extends CI_Controller
{

    function index()
    {
        $this->load->view('header');
        $this->load->view('generate');
        $this->load->view('footer');
    }
}
?>
