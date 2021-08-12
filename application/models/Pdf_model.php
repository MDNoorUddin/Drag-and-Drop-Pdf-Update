<?php 

class Pdf_Model extends CI_Model {

    public function __construct() {

        parent::__construct();

    }

    public function add_points($points,$pdf_name,$pdf_location,$user_id,$note)
    {       
            $activity="uploaded a pdf ".$pdf_name."";

            $type="upload";

            $created_at= date("Y-m-d H:i:s");

            $new_activity = "insert into activity(user_id ,type,activity,created_at) values('$user_id','$type','$activity','$created_at')";
            $this->db->query($new_activity); 
            $modified_at= date("Y-m-d H:i:s");
            $pdf_save = "insert into pdf(pdf_name,pdf_location,created_at,updated_at,user_id,notes) values('$pdf_name','$pdf_location','$modified_at','$modified_at','$user_id','$note')";
            $this->db->query($pdf_save);
            $r="select * from pdf where pdf_name='$pdf_name'";
            $query = $this->db->query($r);
            
            $pd=$query->result_array();
            
            $pdf_id=$pd[0]['id'];
            
            try{
                
                
                for($i=0;$i<count($points);$i++){
                    
                    $text=$points[$i]['descrizione'];
                    
                    $x=$points[$i]['posizioneX'];
                    $y=$points[$i]['posizioneY'];
                    $font=$points[$i]['size'];
                    $points_save = "insert into pdf_points(text,x,y,pdf_id,pdf_name,fontSize,modified_at,user_id) values('$text','$x','$y','$pdf_id','$pdf_name','$font','$modified_at','$user_id')"; 
                    $this->db->query($points_save);
                    
                }
                
                
                return true;
            }

            catch ( \Exception $e ){

                return false;
            }
    }
    public function pdf_edit_id($pdf_id)
    {
            $r="select * from pdf where id='$pdf_id'";
            
            $query = $this->db->query($r);
            
            return $query->result_array();
    }
    public function update_points($points,$pdf_name,$user_id,$editedTexts,$pdf_id)
    {
            try{
                //$points_delete = "delete from  pdf_points where pdf_name='$pdf_name'"; 
                //echo 1111111111111111111111111111111111111111111111111111;
                //echo json_encode($pdf_id);
                //print_r("Got It");
                $activity="updated a pdf ".$pdf_name."";
                $type="update";
                $created_at= date("Y-m-d H:i:s");
                $new_activity = "insert into activity(user_id ,type,activity,created_at) values('$user_id','$type','$activity','$created_at')";
                $this->db->query($new_activity); 
                $this->db->where('pdf_name', $pdf_name);
                $this->db->delete('pdf_points'); 
                $modified_at= date("Y-m-d H:i:s"); 
                //$this->db->query($points_delete);
                for($i=0;$i<count($points);$i++){
                    $text=$points[$i]['descrizione'];
                    $x=$points[$i]['posizioneX'];
                    $y=$points[$i]['posizioneY'];
                    $font=$points[$i]['size'];
                    $points_save = "insert into pdf_points(text,x,y,pdf_name,fontSize,modified_at,user_id,pdf_id) values('$text','$x','$y','$pdf_name','$font','$modified_at','$user_id','$pdf_id')"; 
                    $this->db->query($points_save);
                    //echo "done";    
                }
                $rr="select * from pdf where id='$pdf_id'";
            
                $query = $this->db->query($rr);
            
                $edit_id_array=$query->result_array();
                //$edit_id=$edit_id_array[0]['edits'];
                //echo json_encode($edit_id_array[0]['edits']);
                $e_id=$edit_id_array[0]['edits'];
                for($i=0;$i<count($editedTexts);$i++){
                    $text=$editedTexts[$i]['descrizione'];
                    $x=$editedTexts[$i]['posizioneX'];
                    $y=$editedTexts[$i]['posizioneY'];
                    $font=$editedTexts[$i]['size'];
                    $type=$editedTexts[$i]['type'];
                    $edit_type="existing";
                    if($type==0)
                    $edit_type="removed";
                    $j=$i+1;
                    $points_save ="insert into edit_history(user_id,pdf_id,edit_id,x,y,edit_type,text,fontSize,editing_time) values('$user_id','$pdf_id','$e_id','$x','$y','$edit_type','$text','$font','$modified_at')"; 
                    $this->db->query($points_save);    
                }
                //$pdf_update = "update  pdf set updated_at='$modified_at' where pdf_name='$pdf_name')";
                //$this->db->query($pdf_update);
                $data = array(
                    'updated_at' => $modified_at
                );
                $this->db->where('pdf_name', $pdf_name);
                $this->db->update('pdf', $data);
                
                $edit = "update pdf set edits=edits+1 where pdf_name ='$pdf_name'";
                $this->db->query($edit);
                return true;
            }

            catch ( \Exception $e ){

                return false;
            }
    }
    
    public function pdf_delete($pdf_id)
    {
        try{
            $activity="delete a pdf  named ".$name."";
            $type="delete";
            $created_at= date("Y-m-d H:i:s");
            $new_activity = "insert into activity(user_id ,type,activity,created_at) values('$user_id','$type','$activity','$m')";
            $this->db->query($new_activity);
            $delete = "update pdf set isDelete=1 where id ='$pdf_id'";
            $this->db->query($delete);
        }
        catch ( \Exception $e ){

            echo $e;
        }
    }

    public function add_points_test($points)
    {
            try{
                $modified_at= date("Y-m-d H:i:s"); 
                for($i=0;$i<count($points);$i++){
                    $text=$points[$i]['descrizione'];
                    $x=$points[$i]['posizioneX'];
                    $y=$points[$i]['posizioneY'];
                    $font=$points[$i]['size'];
                    
                    $points_save = "insert into test(text,x) values('$text','$x')"; 
                    $this->db->query($points_save);
                    
                }
            }

            catch ( \Exception $e ){

                return false;
            }
    }

    public function show_uploaded_pdf($user_id)
    {
       $this->db->select('*');

       $this->db->from('role');

       $this->db->where('user_id',$user_id);
       
       $query = $this->db->get();
       
       return $query->result_array();
    }


    /****
     * S
     */
    public function edit_history($pdf_id)
    {
        try{
            $this->db->select('*');

            $this->db->from('x');

            $this->db->where('pdf_id',$pdf_id);

            $this->db->group_by("edit_id");
            
            $query = $this->db->get();
            
            return $query->result_array();

            /* $points_save = "select * from x where pdf_id='.$pdf_id.' group by edit_id"; 
            
            $query=$this->db->query($points_save);

            return $query->result_array(); */
        }
        catch ( \Exception $e ){

            return false;
        }
    }

    public function edit_version($pdf_name,$edit_id)
    {
        try{
            $array = array('pdf_name' => $pdf_name, 'edit_id' => $edit_id);

            $this->db->select('*');

            $this->db->from('pdf_version');

            //$this->db->where('pdf_name',$edit_id);

            $this->db->where($array); 

            $query = $this->db->get();
            //print_r($query->result_array());
            return $query->result_array();
        }
        catch ( \Exception $e ){

            return false;
        }
    }


    public function show_points($pdf_name,$user_id)
    {
       $this->db->select('*');
       
       $this->db->from('pdf_points');
       
       $this->db->where('pdf_name',$pdf_name);

       $this->db->where('user_id',$user_id);
       
       $query = $this->db->get();
       
       return $query->result_array();

    }
    public function show_pdf($id,$user_id)
    {
        $this->db->select('*');
       
        $this->db->from('pdf');
       
        $this->db->where('id',$id);

        $this->db->where('user_id',$user_id);
       
        $query = $this->db->get();
       
        return $query->result_array();
    }
    
    public function register( $name,$email,$password ) // registering a user
    {
        try{
            $m= date("Y-m-d H:i:s");
            $data = array(
                'name'=>$name,
                'email'=>$email,
                'password'=>md5($password),
                'updated_at' => $m,
                'created_at'=>$m,
                'role_id'=>1
            );
            $this->db->insert('user', $data);

                    $this->db->select('*');
                    
                    $this->db->from('user');
                    
                    $this->db->where('email',$email);
                    
                    $query1 = $this->db->get();
                    
                    $query2 = $query1->result_array();
                    print_r($query2);
                    $user_id=$query2[0]['user_id'];


             $activity="Created an accound  named ".$name."";
             $type="register";
             $created_at= date("Y-m-d H:i:s");
             $new_activity = "insert into activity(user_id ,type,activity,created_at) values('$user_id','$type','$activity','$m')";
             $this->db->query($new_activity);

             return true;
            }
            catch ( \Exception $e ){

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

             $activity="     an accound  named ".$name."";

             $type="upload";
             $created_at= date("Y-m-d H:i:s");
             $new_activity = "insert into activity(user_id ,type,activity,created_at) values('$user_id','$type','$activity','$created_at')";
             $this->db->query($new_activity); 
             
             return true;

            }

            catch (\Exception $e){

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


    public function individual_info($email){  // all information of an individual uiser

       
       
       $this->db->select('*');
       
       $this->db->from('user');
       
       $this->db->where('email',$email);
       
       $query = $this->db->get();
       
       return $query->result_array();
    
    }

    public function login_activity($id, $tm)
    {
                $activity="Logged in";
                $type="login";
                $new_activity = "insert into activity(user_id ,type,activity,created_at) values('$id','$type','$activity','$tm')";
                $this->db->query($new_activity);
                return true;
    }
    public function register_activity($id, $tm)
    {
                $activity="Registered ";
                $type="register";
                $new_activity = "insert into activity(user_id ,type,activity,created_at) values('$id','$type','$activity','$tm')";
                $this->db->query($new_activity);
                return true;
    }
    public function view_all_post($email)  // view all post of a user
    {
        
       $this->db->select('*');
       
       $this->db->from('posts');
       
       $this->db->where('email',$email);
       
       $query = $this->db->get();
       
       return $query->result_array();

    }


    public function add_post( $post_title, $post_body, $email ,$post_category_name) // add a single post
    {

        try{

            $query = "insert into posts(email,post,title,category_name) values('$email','$post_body','$post_title','$post_category_name');";

            $data = array(
                'email' => $email,
                'post' => $post_body, 
                'title' => $post_title,
                'category_name' => $post_category_name
           );

           $this->db->insert('posts', $data);
            
             return true;
            }

            catch (\Exception $e){

                return false;
            }
    }

    public function add_category($category)
    {
        try{

            $query = "insert into categories(category_name) values('$category');";

	        $this->db->query($query);
            
             return true;
            }

            catch (\Exception $e){

                return false;
            }
    }

    public function get_categories()
    {
        $this->db->select('*');
       
       $this->db->from('categories');
       
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

    public function logout_activity(){
             $user_id=$_SESSION['user_id'];
             $activity="Logged out";
             $type="logout";
             $m= date("Y-m-d H:i:s");
             $new_activity = "insert into activity(user_id ,type,activity,created_at) values('$user_id','$type','$activity','$m')";
             $this->db->query($new_activity);
    }
}

?>