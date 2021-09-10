<?php

class Login extends CI_Controller
{

	function __construct()
	{

		parent::__construct();
		$this->load->library('session');
		$this->load->model('m_login');
	}

	function index()
	{
		$this->load->view('v_login');
	}
	function Dasboard()
	{
		$this->load->view('Dasboard');
	}


	// function aksi_login(){
	// 	$username = $this->input->post('username');
	// 	$password = $this->input->post('password');
	// 	$where = array(
	// 		'username' => $username,
	// 		'password' => md5($password)
	// 		);
	// 	$cek = $this->m_login->cek_login("pengguna",$where)->num_rows();
	// 	if($cek > 0){

	// 		$data_session = array(
	// 			'nama' => $username,
	// 			'status' => "login"
	// 			);

	// 		$this->session->set_userdata($data_session);

	// 		redirect(base_url("C_Dasboard"));
	// 		// $this->load->view('Dasboard'); 

	// 	}else{
	// 		echo "Username dan password salah !";
	// 	}
	// }

	public function aksi_login2()
	{
		$username = $this->input->post('username'); // Ambil isi dari inputan username pada form login
		$password = $this->input->post('password'); // Ambil isi dari inputan password pada form login dan encrypt dengan md5
		$pengguna = $this->m_login->get($username); // Panggil fungsi get yang ada di UserModel.php
		if (empty($pengguna)) { // Jika hasilnya kosong / user tidak ditemukan
			$this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert"><button type="button" class="close" data-dismiss="alert"><span class="fa fa-close"></span></button> Username tidak ditemukan</div>'); // Buat session flashdata
			redirect('Login'); // Redirect ke halaman login
			//echo "Username tidak ditemukan";
		} else {
			if ($password == $pengguna->password) { // Jika password yang diinput sama dengan password yang didatabase
				$session = array(
					'status' => "login", // Buat session authenticated dengan value true
					'Id_Pengguna' => $pengguna->Id_Pengguna,
					'username' => $pengguna->username,  // Buat session username
					'foto' => $pengguna->foto,
					'Email' => $pengguna->Email,
					'Nama_Pengguna' => $pengguna->Nama_Pengguna, // Buat session authenticated

				);
				$this->session->set_userdata($session); // Buat session sesuai $session
				redirect(base_url("C_Dasboard")); // Redirect ke halaman welcome
			} else {
				//echo "<script language=\"javascript\">swal('Please adjust the values in user' , 'Bad data format', 'error');</script>";
				$this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert"><button type="button" class="close" data-dismiss="alert"><span class="fa fa-close"></span></button> Password Salah</div>'); // Buat session flashdata
				redirect('Login'); // Redirect ke halaman login
			}
		}
	}


	function gagallogin()
	{
		$url = base_url('Login');
		echo $this->session->set_flashdata('msg', '<div class="alert alert-danger" role="alert"><button type="button" class="close" data-dismiss="alert"><span class="fa fa-close"></span></button> Username Atau Password Salah</div>');
		redirect($url);
	}

	function logout()
	{
		$this->session->sess_destroy();
		redirect(base_url('Login'));
	}

	function new_user_register()
	{
		$this->form_validation->set_rules('primernombre', 'First Name', 'trim|required|alpha|min_length[3]|max_length[100]|xss_clean');
		$this->form_validation->set_rules('primerapellido', 'Last Name', 'trim|required|alpha|min_length[3]|max_length[100]|xss_clean');
		$this->form_validation->set_rules('nombreusuario', 'Username', 'trim|required|xss_clean');
		$this->form_validation->set_rules('email', 'Email', 'trim|required|valid_email|is_unique[cat_tbl_usuario.email]|xss_clean');
		$this->form_validation->set_rules('clave', 'Password', 'trim|required|matches[claveConfirmacion]|md5');
		$this->form_validation->set_rules('claveConfirmacion', 'Confirm Password', 'trim|required|md5|matches[clave]');
		if ($this->form_validation->run() == FALSE) {
			echo "<script language=\"javascript\">
      swal('Please adjust the values in user' , 'Bad data format', 'error');
    </script>";
		}
	}
}
