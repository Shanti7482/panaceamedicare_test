<?php defined('BASEPATH') OR exit('No direct script access allowed');

class HomeController extends CI_Controller {

    function __construct()
    {
        parent::__construct();
        // check_login();
        $this->load->helper('url');
        // $this->load->helper('Crud_helper');
        
        
    }

    function index()
    {
        $this->load->view('Home_Page');
    }
}


?>