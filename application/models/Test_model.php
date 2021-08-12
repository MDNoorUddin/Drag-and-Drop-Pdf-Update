<?php 

class Test_model extends CI_Model {

    public function __construct() {

        parent::__construct();

    }

    
    public function register( $name,$email,$password ) // registering a user
    {
        try{
            $modified_at= date("Y-m-d H:i:s");
            $query = "insert into user(name,email,password,created_at,updated_at) values('$name','$email',MD5('$password'),'$modified_at','$modified_at')"; 

	        $this->db->query($query);
            
             return true;
            }

            catch ( \Exception $e ){
                echo $e;
                return false;
            }
    }


    public function register2( $name, $email, $password)
    {

        try{

            $query = "insert into user values('','$name','$email',MD5('$password'))";

	        $this->db->query( $query );
            
            $data = array(
                'name' =>  $name,
                'email' => $email,
                'password' => $password
            );
            
             $this->db->insert('user', $data);
             
             return true;

            }

            catch (\Exception $e){

                return false;
            
            }
    }



    public function login_check($email,$password)  // login information check
    {

        try{
                $p=MD5($password);
                
                $this->db->select('*');
               
                $this->db->from('user');
               
                $this->db->where('email',$email);
               
                $this->db->where('password',$p);
               
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


    public function individual_info($email){  // all information of an individual uiser

       
       
       $this->db->select('*');
       
       $this->db->from('user');
       
       $this->db->where('email',$email);
       
       $query = $this->db->get();
       
       return $query->result_array();
    
    }






   

    public function delete_post($post_id)  // delete a single post
    {
        try{

            $query="delete from   posts where post_id='$post_id'";

	        $this->db->query($query);
             return true;
            }
            catch (\Exception $e){

                return false;
            }
    }

    public function delete_category($category_id)  // delete a category
    {
        try{

            $query="delete from   categories where id='$category_id'";

	        $this->db->query($query);
             return true;
            }
            catch (\Exception $e){

                return false;
            }
    }


    public function view_single_post($post_id) // showing all information of a single post
    {
        
       $this->db->select('*');

       $this->db->from('posts');
       
       $this->db->where('post_id',$post_id);
       
       $query = $this->db->get();
       
       return $query->result_array();
    }

    public function update_single_post( $post_title, $post_body, $post_id,$post_category_name) // updating a post
    {
        try{

            $query = "update  posts set title='$post_title', post='$post_body',category_name='$post_category_name' where post_id='$post_id' ";

	        $this->db->query($query);
            
             return true;
            }

            catch (\Exception $e){

                return false;
            }
    }
}

?>