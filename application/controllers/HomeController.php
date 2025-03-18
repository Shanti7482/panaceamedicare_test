<?php defined('BASEPATH') OR exit('No direct script access allowed');

class HomeController extends CI_Controller {

    function __construct()
    {
        parent::__construct();
        // check_login();
        // $this->load->helper('date');
        // $this->load->helper('Crud_helper');
        
        
    }

    function index()
    {
        $session_data=$this->session->userdata();
        
       
        if($session_data['logged_in'] && $session_data['role']=='admin')
        {
            $data['data']=['status'=>true,'role'=>'admin'];
            $this->load->view('home/dashboard',$data);
        }
        else if($session_data['logged_in'] && $session_data['role']=='user')
        {
            $data['data']=['status'=>false,'role'=>'user'];
            $this->load->view('home/dashboard',$data);
        }
        else{
            redirect(base_url('/'));
        }
        
    }
    
    function add_user()
    {
        $this->load->view('home/add_user');
    }
    function save_user()
    {
        $result=$this->input->post();
        print_r($result);
        die;

       if(!empty($result))
        {
            $config['upload_path']='./Uploads';
            $config['allowed_types']='jpg|png'; 
 
             $this->load->library('upload',$config);
             if(!$this->upload->do_upload('pay_reciept'))
             {
                $error['err']=$this->upload->display_errors();
                $this->add_user();
             }
             else{
                $file_name=$this->upload->data();
                $data=$this->input->post();
                $data['pay_reciept']=$file_name['file_name'];
                $created_at=date('Y-m-d H:i:s');
                $data['created_at']=$created_at;
                unset($data['total_amount']);
                $response=Crud_helper::add('awardee_details',$data);
                if($response['status'])
                {
                    $this->session->set_flashdata($response);
                    redirect(base_url('homecontroller/save_user'));
                }
                else{
                    $this->session->set_flashdata($response);
                    redirect(base_url('homecontroller/save_user'));
                }
             }     
        }
        else{
           $this->add_user();
        }

    }



    function edit_user($id)
    {
        $data['id']=$id;
        $data['status']=true;
        $user_data=$this->session->userdata('role');
        if($user_data=='admin'){
            $this->load->view('home/update_user_by_admin',$data);
        }else{
            $this->load->view('home/update_user',$data);
        }
    
    }
}


?>