<?php

defined("BASEPATH");

class Contact extends CI_Controller{
    public function index()
    {
        $this->load->view('contact_us');
    }
}
?>