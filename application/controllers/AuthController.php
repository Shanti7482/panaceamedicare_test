<?php defined('BASEPATH') OR exit('No direct script access allowed');

class AuthController extends CI_Controller {
    public function __construct() {
        parent::__construct();
    
        $this->load->library('form_validation');
        $this->load->model('AuthModel');
    }
    public function index() 
    { 
        if(!empty($this->session->userdata()))
        {
            $this->session->sess_destroy();
        }
        $this->load->view('auth/admin_login');
         
    }
    
    public function login()
    {

        $this->form_validation->set_rules('user_email',"Email",'required|valid_email|trim');
        $this->form_validation->set_rules('password','Password','required');

        if($this->form_validation->run())
        {
            $data=$this->input->post();
           
            $response=$this->AuthModel->fetch(['user_email'=>$data['user_email']]);
            
            if(password_verify($data['password'],$response[0]['password']))
            {
                if($response[0]['user_name']=='admin')
                {
                    $set_session_data=[
                        'id'=>$response[0]['id'],
                        'user_name'=>$response[0]['user_name'],
                        'status'=>$response[0]['status'],
                        'role'=>'admin',
                        'logged_in' => TRUE
                    ];
                }
                else{
                    $set_session_data=[
                        'id'=>$response[0]['id'],
                        'user_name'=>$response[0]['user_name'],
                        'status'=>$response[0]['status'],
                        'role'=>'user',
                        'logged_in' => TRUE
                    ];

                }
                
                $this->session->set_userdata($set_session_data);
                // echo json_encode(['success'=>true]);
                redirect(base_url('HomeController'));
               

            }
            else{
            //    echo json_encode(['success'=>false]);
                redirect(base_url('/'));
            }

        }else{
            
            redirect(base_url('/'));

        }
    }

    
    

   
   

    

}