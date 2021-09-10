<?php

class C_SKTMBiasa extends CI_Controller
{

	function __construct()
	{

		parent::__construct();
		if ($this->session->userdata('status') != "login") {
			redirect(base_url("Login"));
		}
		$this->load->library('session');
		$this->load->helper(array('form', 'url'));
		$this->load->model('M_SKTMBiasa');
		$this->load->model('M_SKeluar');
	}

	function index()
	{
		$data['sktmbiasa'] = $this->M_SKTMBiasa->tampil_data()->result();
		$this->load->view('Template/Header');
		$this->load->view('Template/Navbar');
		$this->load->view('SKTMBiasa/T_SKTMBiasa', $data);
		$this->load->view('Template/Created');
		$this->load->view('Template/Footer');
	}


	function Upload()
	{
		$Id_SKTMBiasa = $this->input->post('Id_SKTMBiasa');
		$No_SKTMBiasa = $this->input->post('No_SKTMBiasa');
		$Jenis_Surat = "SKTM Biasa/Umum";
		$Nama = $this->input->post('Nama');
		$Tempat_Lahir = $this->input->post('Tempat_Lahir');
		$Tanggal_Lahir = $this->input->post('Tanggal_Lahir');
		$Jenis_Kelamin = $this->input->post('Jenis_Kelamin');
		$Pekerjaan = $this->input->post('Pekerjaan');
		$Kp = $this->input->post('Kp');
		$Rt = $this->input->post('Rt');
		$Rw = $this->input->post('Rw');
		$NIK = $this->input->post('NIK');
		$Tgl_Surat = $this->input->post('Tgl_Surat');
		$Nama_Rt = $this->input->post('Nama_Rt');
		$Nama_Rw = $this->input->post('Nama_Rw');
		$Nama_KepalaDesa = $this->input->post('Nama_KepalaDesa');
		$Nama_Camat = $this->input->post('Nama_Camat');
		$NIP_Camat = $this->input->post('NIP_Camat');

		$data = array(
			'Id_SKTMBiasa'		=> $Id_SKTMBiasa,
			'No_SKTMBiasa'    	=> $No_SKTMBiasa,
			'Nama'    			=> $Nama,
			'Tempat_Lahir'     	=> $Tempat_Lahir,
			'Tanggal_Lahir'     => $Tanggal_Lahir,
			'Jenis_Kelamin'     => $Jenis_Kelamin,
			'Pekerjaan'			=> $Pekerjaan,
			'Kp'    			=> $Kp,
			'Rt'    			=> $Rt,
			'Rw'    			=> $Rw,
			'NIK'   			=> $NIK,
			'Tgl_Surat'     	=> $Tgl_Surat,
			'Nama_Rt'   		=> $Nama_Rt,
			'Nama_Rw'   		=> $Nama_Rw,
			'Nama_KepalaDesa'   => $Nama_KepalaDesa,
			'Nama_Camat'   		=> $Nama_Camat,
			'NIP_Camat'   		=> $NIP_Camat
		);

		$dataSK = array(
			'Id_Surat'		=> $Id_SKTMBiasa,
			'Tgl_Surat' 	=> $Tgl_Surat,
			'No_Surat'		=> $No_SKTMBiasa,
			'Jenis_Surat'	=> $Jenis_Surat,
			'Nama_Pengaju'	=> $Nama,
			'TTL'			=> $Tempat_Lahir . "," . $Tanggal_Lahir,
			'Pekerjaan'		=> $Pekerjaan,
			'Alamat'		=> $Kp . $Rt . $Rw . " Desa Gandasoli Kec. Tanjungsiang"
		);
		$this->M_SKeluar->insert_SK($dataSK, 'suratkeluar');


		$this->M_SKTMBiasa->insert($data, 'sktmbiasa');
		$this->session->set_flashdata('succes_save_surat', '<div class="alert alert-primary alert-dismissible fade show" role="alert"><strong>Data sudah berhasil di tambahkan</strong><button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button></div>');
		redirect('C_SKTMBiasa');
	}

	function Print($Id_SKTMBiasa)
	{
		$where = array('Id_SKTMBiasa' => $Id_SKTMBiasa);
		$data['sktmbiasa'] = $this->M_SKTMBiasa->Print($where, 'sktmbiasa')->result();
		$this->load->view('SKTMBiasa/P_SKTMBiasa', $data);
	}

	function Edit($Id_SKTMBiasa)
	{
		$where = array('Id_SKTMBiasa' => $Id_SKTMBiasa);
		$data['sktmbiasa'] = $this->M_SKTMBiasa->Edit($where, 'sktmbiasa')->result();
		$this->load->view('Template/Header');
		$this->load->view('Template/Navbar');
		$this->load->view('SKTMBiasa/E_SKTMBiasa', $data);
		$this->load->view('Template/Created');
		$this->load->view('Template/Footer');
	}

	function Update()
	{
		$Id_SKTMBiasa = $this->input->post('Id_SKTMBiasa');
		$No_SKTMBiasa = $this->input->post('No_SKTMBiasa');
		$Jenis_Surat = "SKTM Biasa/Umum";
		$Nama = $this->input->post('Nama');
		$Tempat_Lahir = $this->input->post('Tempat_Lahir');
		$Tanggal_Lahir = $this->input->post('Tanggal_Lahir');
		$Jenis_Kelamin = $this->input->post('Jenis_Kelamin');
		$Pekerjaan = $this->input->post('Pekerjaan');
		$Kp = $this->input->post('Kp');
		$Rt = $this->input->post('Rt');
		$Rw = $this->input->post('Rw');
		$NIK = $this->input->post('NIK');
		$Tgl_Surat = $this->input->post('Tgl_Surat');
		$Nama_Rt = $this->input->post('Nama_Rt');
		$Nama_Rw = $this->input->post('Nama_Rw');
		$Nama_KepalaDesa = $this->input->post('Nama_KepalaDesa');
		$Nama_Camat = $this->input->post('Nama_Camat');
		$NIP_Camat = $this->input->post('NIP_Camat');


		$data = array(
			'Id_SKTMBiasa'		=> $Id_SKTMBiasa,
			'No_SKTMBiasa'    	=> $No_SKTMBiasa,
			'Nama'    			=> $Nama,
			'Tempat_Lahir'     	=> $Tempat_Lahir,
			'Tanggal_Lahir'     => $Tanggal_Lahir,
			'Jenis_Kelamin'     => $Jenis_Kelamin,
			'Pekerjaan'			=> $Pekerjaan,
			'Kp'    			=> $Kp,
			'Rt'    			=> $Rt,
			'Rw'    			=> $Rw,
			'NIK'   			=> $NIK,
			'Tgl_Surat'     	=> $Tgl_Surat,
			'Nama_Rt'   		=> $Nama_Rt,
			'Nama_Rw'   		=> $Nama_Rw,
			'Nama_KepalaDesa'   => $Nama_KepalaDesa,
			'Nama_Camat'   		=> $Nama_Camat,
			'NIP_Camat'   		=> $NIP_Camat
		);

		$dataSK = array(
			'Id_Surat'		=> $Id_SKTMBiasa,
			'Tgl_Surat' 	=> $Tgl_Surat,
			'No_Surat'		=> $No_SKTMBiasa,
			'Jenis_Surat'	=> $Jenis_Surat,
			'Nama_Pengaju'	=> $Nama,
			'TTL'			=> $Tempat_Lahir . "," . $Tanggal_Lahir,
			'Pekerjaan'		=> $Pekerjaan,
			'Alamat'		=> "Kp." . $Kp . "Rt. " . $Rt . "Rw. " . $Rw . " Desa Gandasoli Kec. Tanjungsiang"
		);
		$whereSK = array(
			'Id_Surat' => $Id_SKTMBiasa
		);
		$this->M_SKeluar->Update_SK($whereSK, $dataSK, 'suratkeluar');

		$where = array(
			'Id_SKTMBiasa' => $Id_SKTMBiasa
		);


		$this->M_SKTMBiasa->Update($where, $data, 'sktmbiasa');
		$this->session->set_flashdata('succes_save_surat', '<div class="alert alert-primary alert-dismissible fade show" role="alert"><strong>Data sudah berhasil di ubah</strong><button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button></div>');
		redirect('C_SKTMBiasa');
	}

	function Delete($Id_SKTMBiasa)
	{
		$where = array('Id_SKTMBiasa' => $Id_SKTMBiasa);
		$SK = array('Id_Surat' => $Id_SKTMBiasa);
		$this->M_SKeluar->Delete_SK($SK, 'suratkeluar');
		$this->M_SKTMBiasa->Delete($where, 'sktmbiasa');
		$this->session->set_flashdata('succes_save_surat', '<div class="alert alert-primary alert-dismissible fade show" role="alert"><strong>Data sudah berhasil di hapus</strong><button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button></div>');
		redirect('C_SKTMBiasa');
	}
}
