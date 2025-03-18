<?php

defined("BASEPATH");

class Contact extends CI_Controller{
    public function index()
    {
        $this->load->view('about_us');
    }
}
?>