<?php 

class C_PJSurat extends CI_Controller{

	function __construct(){

		parent::__construct();	
		if($this->session->userdata('status') != "login"){
			redirect(base_url("Login"));
		}
		$this->load->library('session');
		$this->load->helper(array('form', 'url')); 	
		$this->load->model('M_PJSurat'); 
		

	}

	function index(){
		// surat Jalan
		// $dariDB = $this->M_SJalan->cekIdSJalan();
		// $nourut = substr($dariDB, 1, 3);
        // $Id_SjalanSekarang = $nourut + 1;

		// Rekomendasi KIP
		$suratDB = $this->M_PJSurat->cekIdSurat();
		$nourutSurat = substr($suratDB, 4, 4);
        $Id_SuratSekarang = $nourutSurat + 1;

        $data = array('Id_Surat' => $Id_SuratSekarang);
		$this->load->view('PJ_Surat', $data);
	}
}