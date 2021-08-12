<?php
class Welcome2 extends CI_Controller {


        public function __construct()
        {
                parent::__construct();
                
                $this->load->helper('url'); 
		
		        $this->load->database();
		
                $this->load->library('session');
                
                $this->load->model('User_model');

        }
    
        // This is the index print.  here all names of the users will be presented
        
        public function index()
        {

            if( !$this->session_check() )  // checking a user is authticated or not
            {
                $this->load->view('login');  // forcing to login screen
            
            }
            else{
            $query = $this->db->get('user');
            
            //echo "Current users\n";
            
           // echo"</br>";
            
            foreach ($query->result() as $row)
            
            {
            
               // echo $row->name;
            
            }
    
            $this->load->view('login');
           }
        }
    
    
        // login function
    
        public function login()
        {
            //$this->load->view('header');
            if($this->session_check())
            {
                //$this->load->view('dashboard');

                redirect('Welcome2/load_Dashboard'); 

                //return;
            }
            else{
            if($_POST) // post varibale is present or not
            {
                $email=$this->input->post('email');

                $password=$this->input->post('password');

                if( $this->Test_model->login_check($email,$password) ){


                    $info=$this->Test_model->individual_info($email);
                    //print_r($info);
                    //echo ($info[0]['name']);
                    $name=$info[0]['name'];
                    //echo $name;
                    $this->session->set_userdata('name',$name);
                    
                    $this->session->set_userdata('email',$email);
                    
                    redirect('Welcome2/load_Dashboard'); 
                    
                    
                }
                else {
                    
                    $this->load->view('login');
                }
            }
    
            else {
                
                $this->load->view('login');
            }
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
    
        
        public function dashboard() // this
        {
            if($this->session_check())
            {
                $this->load->view('dashboard');
                //return;
            
            }
            else {
             $this->load->view('login');
            }
    
        }
    
        public function load_Dashboard()
        {
            if($this->session_check())
            {
                $this->load->view('dashboard');
            
            }
            else {
                $this->load->view('login');
               }
        }
        public function register()
        {
            if($this->session_check())
            {
                $this->load->view('dashboard');
                //return;
            }
            else{
            if($_POST)
            {
                //echo "found POST\n";
                $name=$this->input->post('name');
                $email=$this->input->post('email');
                $pass=$this->input->post('password');
                //unset ($_POST);
                if($this->Test_model->register($name,$email,$pass))
                {
                    $data['name']=$name;
				    echo "successfully registed\n";
                    //$this->load->view('dashboard',$data);
                    redirect('Welcome2/login'); 

                }
                else{
                    echo "Plesase Try Again\n";
                    $this->load->view('login');
                }
            }
            else
            {
                echo "Plesase Try Again\n";
            }
            $this->load->view('registration');
           }
        }
    
        public function logout()
        {
            if($this->session_check()){
            $this->load->view('logout_success');
            $this->session->sess_destroy();
            $this->load->view('login');
            }
            else{
            redirect('Welcome2/login');
            }
        }

    }