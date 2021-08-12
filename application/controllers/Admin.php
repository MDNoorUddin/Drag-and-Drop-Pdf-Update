<?php

class Admin extends CI_Controller {

        public function __construct()
        {
                parent::__construct();
                
                $this->load->helper(array('form', 'url'));
                
                $this->load->database();
                
                $this->load->library('session');
                
                $this->load->model('Pdf_model');

                $this->load->model('Admin_model');

                $this->load->model('Test_model');
                //$this->load->library('upload');
                $this->load->library('encryption');
        }
        public function index()
        {
                if( !$this->session_check() )  
                {
                      
                      $this->load->view('admin/login');  
                        
                }
                else{
                    if(!$this->session->logged_in)
                    {
                        $n['name']=$_SESSION['name'];
                        $this->load->view('login_success',$n);
                    }
                    $this->session->set_userdata('logged_in',true);
                
                    $data['pdf']=$this->Admin_model->number_of_pdf();
                    $data['user']=$this->Admin_model->number_of_user();
                    $data['edit']=$this->Admin_model->number_of_edit();
                    
                    $data['users']=$data['user'][0]['count(*)'];
                    $data['pdfs']=$data['pdf'][0]['count(*)'];
                    $data['edits']=$data['edit'][0]['count(edits)'];
                    $data['activity']=$this->Admin_model->show_all_activity_limit();
                    $this->load->view('admin/dashboard',$data);
                }
        }
        public  function test()
        {
            $this->load->view("admin/test");
        }
        public function show_all_pdf()
        {
            if( !$this->session_check() ) 
            {
                $this->load->view('admin/login');
            }
            else{
            
            $data['pdf']=$this->Admin_model->show_all_pdf();
            $this->load->view('admin/show_all_pdf',$data);
            }
        }
        public function show_all_individual_pdf($user_id)
        {
            if( !$this->session_check() ) 
            {
                $this->load->view('admin/login');
            }
            else{
            
            $data['pdf']=$this->Admin_model->show_all_individual_pdf($user_id);
            $this->load->view('admin/show_all_individual_pdf',$data);
            }
        }
        public function show_all_user()
        {
            if( !$this->session_check() ) 
            {
                $this->load->view('admin/login');
            }
            else{
            
            $data['user']=$this->Admin_model->show_all_user();
            $this->load->view('admin/show_all_user',$data);
            }
        }
        public function show_all_activity()
        {
            if( !$this->session_check() )  // checking a user is authticated or not
            {
                $this->load->view('admin/login');
            }
            else{
            
                $data['activity']=$this->Admin_model->show_all_activity();
                $this->load->view('admin/show_all_activity',$data);
            }
        }
        public function show_user_activity($user_id)
        {
            if( !$this->session_check() )  // checking a user is authticated or not
            {
                $this->load->view('admin/login');
            }
            else{
            
                $da['activity']=$this->Admin_model->show_user_activity($user_id);
                //print_r($da['activity'][0]['NAME']);
                $this->load->view('admin/show_user_activity',$da);
            }
        }
        public function show_all_stat()
        {
            if( !$this->session_check() )  // checking a user is authticated or not
            {
                $this->load->view('admin/login');
            }
            else{
            
                $data['stat']=$this->Admin_model->show_all_stat();
                $this->load->view('admin/show_all_stat',$data);

            }
        }
        
        public function show_uploads(){
                if( !$this->session_check() )  // checking a user is authticated or not
                {
                    $this->load->view('admin/login');
                }
                else{
                if(!$this->session->logged_in)
                {
                    $n['name']=$_SESSION['name'];
                    $this->load->view('login_success',$n);
                }
                $this->session->set_userdata('logged_in',true);
                //$user_id=$_SESSION['user_id'];
                //$this->load->view('admin/header');
                $data['pdf']=$this->Admin_model->show_all_pdf();
                //print_r($data);
                $this->load->view('admin/show_all_pdf',$data);
                //$this->load->view('footer');
                }
        }
        public function show_pdf($id)
        {
                if( !$this->session_check() )  // checking a user is authticated or not
                {
                    $this->load->view('admin/login');  // forcing to login screen
                }
                else{
                $this->load->view('admin/header');
                //$user_id=$_SESSION['user_id'];
                $data['pd']=$this->Admin_model->show_pdf($id);
                //print_r($data);
                $pdf_name=$data['pd'][0]['pdf_name'];
                //print_r($pdf_name);
                $data['points']=$this->Admin_model->show_points($pdf_name);
                //print_r($data['points']);
                
                $path=$data['pd'][0]['pdf_location'];
                $pdf=file_get_contents($path);
                $str=base64_encode($pdf);
                //echo $str;
                $data['pdf']=$str;
                //print_r($data);
                $this->load->view('admin/show_pdf',$data);
                //$this->load->view('footer');
                }
        }

        
        public function session_check() 
        {
            if(isset($_SESSION['email'])){
                return true;
            }
            else {
                return false;
            }
        }
        public function logout()
        {
            if($this->session_check()){
            //$this->load->view('logout_success');
            $this->session->sess_destroy();
            $this->load->view('logout_success');
            $this->load->view('admin/login');
            }
            else{
            redirect('admin/index');
            }
        }
        public function all_users()
        {
            $this->load->view('admin/show_all_user');
        }
        public function all_statistics()
        {

        }
        public function login()
        {
            //$this->load->view('header');
            if($this->session_check())
            {
                //$this->load->view('dashboard');

                redirect('admin/index'); 

                //return;
            }
            else{
                
              if($_POST) // post varibale is present or not
              {
                $email=$this->input->post('email');
                $pass=$this->input->post('password');
                //$ciphertext = $this->encryption->encrypt($pass);
                //echo $ciphertext;
                //echo $this->encryption->decrypt($ciphertext);
                if( $this->Admin_model->login_check_admin($email,$pass) ){


                    $info=$this->Admin_model->individual_info_admin($email);
                    
                    $name=$info[0]['name'];
                    $id=$info[0]['user_id'];
                    $this->session->set_userdata('name',$name);
                    
                    $this->session->set_userdata('email',$email);

                    $this->session->set_userdata('user_id',$id);
                    
                    redirect('admin/index'); 
                }
                else {
                    
                    $this->load->view('admin/login');
                }
            }
    
            else {
                
                $this->load->view('admin/login');
            }
        }   
     } 
}
?>