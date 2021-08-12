<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	public function __construct()
    {
        parent::__construct();
        $this->load->helper('url');
    }
	
	public function index()
	{
		$pdf=file_get_contents("https://www.w3.org/WAI/ER/tests/xhtml/testfiles/resources/pdf/dummy.pdf");
		$base64=base64_encode($pdf);
		$data['pdf']=$base64;
		$data['lala']="hello lulu";
		$this->load->view('welcome_message',$data);
	}
	public function select(){
		$this->load->view('pdf');
		//$this->load->view('select_file');
	}
	public function do_upload()
	{
		echo "Hello World";
		$name=0;
		if($_POST)
		{
			echo "Post Found";
			   $pdf=$this->input->post('file');
			   echo (" File size is ");
			   echo filesize($pdf);
		}
		
		else{
			echo "not found";
		}
		
		//echo $base64;
	}
}
