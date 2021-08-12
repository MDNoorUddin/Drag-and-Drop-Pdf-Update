<?php

class Upload extends CI_Controller {

        public function __construct()
        {
                parent::__construct();
                
                $this->load->helper(array('form', 'url'));
                
                $this->load->database();
                
                $this->load->library('session');
                
                $this->load->model('Pdf_model');

                $this->load->model('Test_model');
                //$this->load->library('upload');
                $this->load->library('encryption');
        }
        public function index()
        {
                if( !$this->session_check() )  // checking a user is authticated or not
                {
                      $this->load->view('login');  // forcing to login screen
                        
                }
                else{
                //$this->load->view('header');
                $this->load->view('upload_form', array('error' => ' ' ));
                }
        }

        public function do_upload()
        {
                if( !$this->session_check() )  // checking a user is authticated or not
                {
                     $this->load->view('login');  // forcing to login screen
                
                }
                else{
                $this->load->view('header');
                $config['upload_path']          = './uploads/';
                $config['allowed_types']        = 'gif|jpg|png|pdf';
                //$config['max_size']             = 100;
                //$config['max_width']            = 1024;
                //$config['max_height']           = 768;

                $this->load->library('upload', $config);

                if ( ! $this->upload->do_upload('userfile'))
                {
                        $error = array('error' => $this->upload->display_errors());

                        $this->load->view('upload_form', $error);
                }
                else
                {
                        $data = array('upload_data' => $this->upload->data());

                        $note=$this->input->post('notes');

                        //print_r($note);
                        
                        //echo ($this->upload->data('file_name'));
                         $path=$this->upload->data('full_path');
                        //print_r($data);
                        //echo file_get_contents($path);
                        $pdf=file_get_contents($path);
                        $str=base64_encode($pdf);
                        //echo base64_encode($pdf);
                        //echo base64_decode($str);
                        $pt['pdf']=$str;
                        $pt['location']=$this->upload->data('full_path');
                        $pt['file_name']=$this->upload->data('file_name');
                        $pt['note']=$note;
                        $this->load->view('welcome_message', $pt); 
                        //$this->load->view('footer');
                }
          }
        }


        public function points_upload()
        {
           
            //echo "hello world";
            if( !$this->session_check() )  // checking a user is authticated or not
            {
                $this->load->view('login');  // forcing to login screen
            
            }
            else{
            //$this->load->view('header');
            //echo $_SESSION['user_id'];
            //echo "<h1>Hello World</h1>";
            //echo($_SESSION['user_id']);
            //echo($_SESSION['email']);
            //echo ($user_id);
            $points = $this->input->post('points');
            $pdf_name = $this->input->post('pdf_name');
            $pdf_location = $this->input->post('pdf_location');
            $note=$this->input->post('note');
            $data=$this->Pdf_model->add_points($points,$pdf_name,$pdf_location,$_SESSION['user_id'],$note);
            
            echo json_encode("true");
            }
            
        }
        public function points_update()
        {
           
            //echo "hello world";
            if( !$this->session_check() )  // checking a user is authticated or not
            {
                $this->load->view('login');  // forcing to login screen
            
            }
            else{
            $this->load->view('header');
            //$user_id=$_SESSION['id'];
            $points = $this->input->post('points');
            $pdf_name = $this->input->post('pdf');
            $edits = $this->input->post('edited');
            $pdf_id = $this->input->post('p_id');
            //print_r($editedTexts);   
            $data=$this->Pdf_model->update_points($points,$pdf_name,$_SESSION['user_id'],$edits,$pdf_id);
            //echo json_encode($edits);
            //echo json_encode($points);
            //echo json_encode("true");
            }
            
        }
        public function pdf_delete()
        {
           
            //echo "hello world";
            if( !$this->session_check() )  // checking a user is authticated or not
            {
                $this->load->view('login');  // forcing to login screen
            
            }
            else{
            $pdf_id = $this->input->post('pdf_id');          
            $data=$this->Pdf_model->pdf_delete($pdf_id);
            echo json_encode("true");
            }
            
        }
        public function show_uploads(){
                if( !$this->session_check() )  // checking a user is authticated or not
                {
                    $this->load->view('login');
                }
                else{
                if(!$this->session->logged_in)
                {
                    $n['name']=$_SESSION['name'];
                    $this->load->view('login_success',$n);
                }
                $this->session->set_userdata('logged_in',true);
                $user_id=$_SESSION['user_id'];
                $this->load->view('header');
                $data['pdf']=$this->Pdf_model->show_uploaded_pdf($_SESSION['user_id']);
                //print_r($data);
                $this->load->view('show_uploaded_pdf',$data);
                //$this->load->view('footer');
                }
        }
        public function show_pdf($id)
        {
                if( !$this->session_check() )  // checking a user is authticated or not
                {
                    $this->load->view('login');  // forcing to login screen
                }
                else{
                $this->load->view('header');
                //$user_id=$_SESSION['user_id'];
                $data['pd']=$this->Pdf_model->show_pdf($id,$_SESSION['user_id']);
                //print_r($data);
                $pdf_name=$data['pd'][0]['pdf_name'];
                //print_r($pdf_name);
                $data['points']=$this->Pdf_model->show_points($pdf_name,$_SESSION['user_id']);
                //print_r($data['points']);
                
                $path=$data['pd'][0]['pdf_location'];
                $pdf=file_get_contents($path);
                $str=base64_encode($pdf);
                //echo $str;
                $data['pdf']=$str;
                $this->load->view('updated_pdf3',$data);
                //$this->load->view('footer');
                }
        }

        /**
         *
         * 
         *      Showing All editing history of a pdf
         *  
         */
        public function edit_history($pdf_id)
        {
            if( !$this->session_check() ) 
            {
                $this->load->view('login'); 
            }
            else{
                $this->load->view('header');
                
                $data['history']=$this->Pdf_model->edit_history($pdf_id);

                $this->load->view('edit_history',$data);
            }
        }

        /**
         *  
         * 
         *      Editing a pdf
         * 
         */
        public function edit_pdf($id)
        {
                if( !$this->session_check() )  // checking a user is authticated or not
                {
                    $this->load->view('login');  // forcing to login screen
                }
                else{
                //$user_id=$_SESSION['user_id'];
                $this->load->view('header');
                $data['pd']=$this->Pdf_model->show_pdf($id,$_SESSION['user_id']);
                //print_r($data);
                $pdf_name=$data['pd'][0]['pdf_name'];
                //print_r($pdf_name);
                $data['points']=$this->Pdf_model->show_points($pdf_name,$_SESSION['user_id']);
                //print_r($data['points']);
                
                $path=$data['pd'][0]['pdf_location'];
                $pdf=file_get_contents($path);
                $str=base64_encode($pdf);
                //echo $str;
                $data['pdf']=$str;
                $data['pdf_name']=$pdf_name;
                $data['pdf_id']=$id;
                //echo($pdf_name);
                $this->load->view('edit4',$data);
                //$this->load->view('footer');
                }
        }
        public function pdf_version($pdf_name,$edit_id)
        {
            if( !$this->session_check() )  // checking a user is authticated or not
            {
                $this->load->view('login');  // forcing to login screen
            }
            else
            {
                $this->load->view('header');
                
                $version['version']=$this->Pdf_model->edit_version($pdf_name,$edit_id);
                
                //$data['pd']=$this->Pdf_model->show_pdf($id,$_SESSION['user_id']);

                $pdf_name=$version['version'][0]['pdf_name'];
                
                //$data['points']=$this->Pdf_model->show_points($pdf_name,$_SESSION['user_id']);
                
                $path=$version['version'][0]['pdf_location'];
                
                $pdf=file_get_contents($path);
                
                $str=base64_encode($pdf);

                $version['pdf']=$str;
                
                //print_r($version);

                $this->load->view('pdf_version',$version);
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
            $this->Pdf_model->logout_activity();
            $this->session->sess_destroy();
            $this->load->view('logout_success');
            $this->load->view('login');
            }
            else{
            redirect('login');
            }
        }
        public function register()
        {
            //echo "Hello World";
            if($this->session_check())
            {
                $this->load->view('header');
                $this->load->view('upload/show_uploaded_pdf');
                //return;
            }
            else{
            if($_POST)
            {
                //echo "found POST\n";
                $name=$this->input->post('name');
                $email=$this->input->post('email');
                $pass=$this->input->post('password');
                //$ciphertext = $this->encryption->encrypt($pass);
                //echo $ciphertext;
                //unset ($_POST);
                if($this->Pdf_model->register($name,$email,$pass))
                {
                    $data['name']=$name;
                    $info=$this->Test_model->individual_info($email);
                    //print_r($info);
                    //echo ($info[0]['name']);
                    $name=$info[0]['name'];
                    $register_at= date("Y-m-d H:i:s");
                    $id=$info[0]['user_id'];
                    //$info1=$this->Pdf_model->register_activity($id,$register_at);
		            $this->load->view('register_success');
                    $this->load->view('login');
                }
                else{
                    //echo "Plesase Try Again\n";
                    $this->load->view('register_error');
                    $this->load->view('login');
                }
            }
            else
            {
                $this->load->view('register');
            }
            
           } 
        }
        public function login()
        {
            //$this->load->view('header');
            if($this->session_check())
            {
                //$this->load->view('dashboard');

                redirect('upload/show_uploads'); 

                //return;
            }
            else{
                //$plain_text = '6440741c98a3a2409dcb62882e6f16bd622e99eb9089cba0358a6944b6a37a0bec82156656e59cda55f4c18a65957a70cb37a1f0c7636bc87f743f54c40830678dnsCFjUNXES/gzwjlzemY80EFLMfTtyyhC0uTfYnJI=';
               //$ciphertext = $this->encryption->encrypt($plain_text);
              //echo ($ciphertext);
              //echo "<br>"; 
               // Outputs: This is a plain-text message!
              //echo $this->encryption->decrypt($ciphertext);
              if($_POST) // post varibale is present or not
              {
                $email=$this->input->post('email');
                $pass=$this->input->post('password');
                //$ciphertext = $this->encryption->encrypt($pass);
                //echo $ciphertext;
                //echo $this->encryption->decrypt($ciphertext);
                if( $this->Test_model->login_check($email,$pass) ){


                    $info=$this->Test_model->individual_info($email);
                    //print_r($info);
                    //echo ($info[0]['name']);
                    $name=$info[0]['name'];
                    $login_at= date("Y-m-d H:i:s");
                    $id=$info[0]['user_id'];
                    $info1=$this->Pdf_model->login_activity($id,$login_at);
                    $this->session->set_userdata('name',$name);
                    
                    $this->session->set_userdata('email',$email);

                    $this->session->set_userdata('user_id',$id);
                    
                    redirect('upload/show_uploads'); 
                    //echo $SESSION['user_id'];
                    
                    
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
}
?>