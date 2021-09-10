<?php 

class C_Dasboard extends CI_Controller{

	function __construct(){

		parent::__construct();	
		if($this->session->userdata('status') != "login"){
			redirect(base_url("Login"));
		}
		$this->load->library('session');
		$this->load->helper(array('form', 'url')); 	
		// $this->load->model('m_login'); 

	}

	function index(){
		$this->load->view('Dasboard');
	}
}