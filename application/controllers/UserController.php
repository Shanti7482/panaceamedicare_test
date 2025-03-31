<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class UserController extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
       $this->load->helper('url');
        
        
    }

    public function articleList()
    {
        $this->load->view('users/articlelist');
    }
}

?>