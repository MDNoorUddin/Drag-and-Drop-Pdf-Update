<?php 

class User_model extends CI_Model {

    public function __construct() {

        parent::__construct();
    }
    public function register( $name,$email,$password ) // registering a user
    {
        try{

            $query = "insert into user(name,email,password) values('$name','$email','$password')"; 

	        $this->db->query($query);
            
             return true;
            }

            catch ( \Exception $e ){

                return false;
            }
    }

    public function login_check($email,$password)  // login information check
    {

        try{
            
                $this->db->select('*');
               
                $this->db->from('user');
               
                $this->db->where('email',$email);
               
                $this->db->where('password',$password);
               
                $query = $this->db->get();		
               
                if($query->num_rows())
               
                {
               
                    return true;
               
                }
               
                else {
               
                    return false;
               
                }
            }

            catch (\Exception $e){

                return false;

            }
    }
}

?>