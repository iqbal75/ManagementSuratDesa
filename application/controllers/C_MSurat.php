<?php 

class C_MSurat extends CI_Controller{

	function __construct(){

		parent::__construct();	
		if($this->session->userdata('status') != "login"){
			redirect(base_url("Login"));
		}
		$this->load->library('session');
		$this->load->helper(array('form', 'url')); 	
		

	}

	function index(){
		
		$this->load->view('M_Surat');
	} 
}