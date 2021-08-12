<?php 

class Admin_Model extends CI_Model {

    public function __construct() {

        parent::__construct();

    }


    public function show_all_pdf()
    {
       $this->db->select('*');

       $this->db->from('pdf');

       $query = $this->db->get();
       
       return $query->result_array();
    }
    public function show_all_individual_pdf($user_id){
        $this->db->select('*');

       $this->db->from('pdf');

       $this->db->where('user_id',$user_id);

       $query = $this->db->get();
       
       return $query->result_array();
    }
    public function show_all_user()
    {
       $this->db->select('*');

       $this->db->from('user');

       $query = $this->db->get();
       
       return $query->result_array();
    }

    public function show_all_stat()
    {
       $this->db->select('*');

       $this->db->from('query');

       $query = $this->db->get();
       
       return $query->result_array();
    }

    public function show_all_activity()
    {
       $this->db->select('*');

       $this->db->from('activity_list');

       $query = $this->db->get();
       
       return $query->result_array();
    }

    
    public function show_all_activity_limit()
    {
       
       $new_activity = "select * from activity_list limit 10;";
       $query=$this->db->query($new_activity); 
       //print_r($query->result_array());
       return $query->result_array();
    }
    

    public function show_user_activity($user_id)
    {
        $this->db->select('*');

       $this->db->from('activity_list');

       $this->db->where('user_id',$user_id);
       //print($user_id);
       $query = $this->db->get();
       //print_r($query->result_array());
       return $query->result_array();
    }

    public function show_points($pdf_name)
    {
       $this->db->select('*');
       
       $this->db->from('pdf_points');
       
       $this->db->where('pdf_name',$pdf_name);

       $query = $this->db->get();
       
       return $query->result_array();

    }
    public function show_pdf($id)
    {
        $this->db->select('*');
       
       $this->db->from('pdf');
       
       $this->db->where('id',$id);

       $query = $this->db->get();
       
       return $query->result_array();
    }


    public function login_check_admin($email,$password)  // login information check
    {

        try{
                $p=MD5($password);
                
                $this->db->select('*');
               
                $this->db->from('admin');
               
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


    public function individual_info_admin($email){  // all information of an individual uiser

       
       
       $this->db->select('*');
       
       $this->db->from('admin');
       
       $this->db->where('email',$email);
       
       $query = $this->db->get();
       
       return $query->result_array();
    
    }

    public function number_of_user()
    {
        try{

            $this->db->select('count(*)');
       
            $this->db->from('user');

            $query = $this->db->get();
                
            return $query->result_array();

            }

            catch ( \Exception $e ){
                echo $e;
                return false;
            }
    }

    public function number_of_pdf()
    {
        try{

            $this->db->select('count(*)');
       
            $this->db->from('pdf');

            $query = $this->db->get();
                
            return $query->result_array();
            }

            catch ( \Exception $e ){
                echo $e;
                return false;
            }
    }

    public function number_of_edit()
    {
        try{

            $this->db->select('count(edits)');
       
            $this->db->from('pdf');

            $query = $this->db->get();
                
            return $query->result_array();
            }

            catch ( \Exception $e ){
                echo $e;
                return false;
            }
    }

}

?>