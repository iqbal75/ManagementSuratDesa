<?php
class C_Pengguna extends CI_Controller{
	function __construct(){
		parent::__construct();	
		if($this->session->userdata('status') != "login"){
			redirect(base_url("Login"));
		}	
		$this->load->model('M_Pengguna');
        $this->load->helper(array('form', 'url')); 
        $this->load->library('upload');
	}

	function index(){
		$data['pengguna']=$this->M_Pengguna->tampil_data_Pengguna()->result();
		$this->load->view('T_Pengguna', $data);
	}
	
	function Edit_Pengguna1($Id_Pengguna){
		$where = array('Id_Pengguna' => $Id_Pengguna);
		$data['pengguna'] = $this->M_Pengguna->edit_data_pengguna($where,'pengguna')->result();
		$this->load->view('Pengguna',$data);
	}

	function Update_Pengguna1(){ 
				
		$Id_Pengguna   = $this->input->post('Id_Pengguna');
		$Nama_Pengguna = $this->input->post('Nama_Pengguna');
      	$Email = $this->input->post('Email');
      	$Jenis_Kelamin   = $this->input->post('Jenis_Kelamin');
		$username = $this->input->post('username');
      	$password = $this->input->post('password');
      	$RetryPassword = $this->input->post('RetryPassword');
      	$Kontak = $this->input->post('Kontak');

      	$path = './assets/gambar/pengguna/';

      	$kondisi = array('Id_Pengguna' => $Id_Pengguna);

      	// get foto
      	$config['upload_path'] = './assets/gambar/pengguna';
     	$config['allowed_types'] = 'jpg|png|jpeg|gif';
      	$config['max_size'] = '2048';  //2MB max
      	$config['max_width'] = '4480'; // pixel
      	$config['max_height'] = '4480'; // pixel
     	$config['file_name'] = $_FILES['fotopost']['name'];

      	$this->upload->initialize($config);

	    if (!empty($_FILES['fotopost']['name'])) {
	        if ( $this->upload->do_upload('fotopost') ) {
	            $foto = $this->upload->data();
	            $data = array(
	                        'Id_Pengguna'     	=> $Id_Pengguna,
	                        'Nama_Pengguna'     => $Nama_Pengguna,
	                        'Email'     		=> $Email,
	                        'Jenis_Kelamin'     => $Jenis_Kelamin,
	                        'username'     		=> $username,
	                        'password'     		=> $password,
	                        'RetryPassword'     => $RetryPassword,
	                        'Kontak'     		=> $Kontak,
                            'foto'       		=> $foto['file_name'],
                            
	                        );
              // hapus foto pada direktori
              unlink($path.$this->input->post('filelama'));
				$this->M_Pengguna->update_pengguna($data,$kondisi);
				$this->session->set_flashdata('succes_save_kontak','<div class="alert alert-primary alert-dismissible fade show" role="alert"><strong>Data sudah berhasil di ubah</strong><button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button></div>');

              redirect('Login');
	        }else {
              die("gagal update");
	        }
	    }elseif (empty($_FILES['fotopost']['name'])) {
			$this->M_Pengguna->update_pengguna_noimage($Id_Pengguna, $Nama_Pengguna, $Email, $Jenis_Kelamin, $username, $password, $RetryPassword, $Kontak);
			$this->session->set_flashdata('succes_save_kontak','<div class="alert alert-primary alert-dismissible fade show" role="alert"><strong>Data sudah berhasil di ubah</strong><button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button></div>');
              redirect('Login');
	    }else {
	      echo "tidak masuk";
	    }
	}
}