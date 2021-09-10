<?php

class C_KTPSementara extends CI_Controller
{

	function __construct()
	{

		parent::__construct();
		if ($this->session->userdata('status') != "login") {
			redirect(base_url("Login"));
		}
		$this->load->library('session');
		$this->load->helper(array('form', 'url'));
		$this->load->model('M_KTPSementara');
		$this->load->model('M_SKeluar');
	}

	function index()
	{
		$data['ktpsementara'] = $this->M_KTPSementara->tampil_data()->result();
		$this->load->view('Template/Header');
		$this->load->view('Template/Navbar');
		$this->load->view('KTPSementara/T_KTPSementara', $data);
		$this->load->view('Template/Created');
		$this->load->view('Template/Footer');
	}


	function Upload()
	{
		$Id_KTPSementara = $this->input->post('Id_KTPSementara');
		$No_KTPSementara = $this->input->post('No_KTPSementara');
		$Nama = $this->input->post('Nama');
		$Jenis_Kelamin = $this->input->post('Jenis_Kelamin');
		$Tempat_Lahir = $this->input->post('Tempat_Lahir');
		$Tanggal_Lahir = $this->input->post('Tanggal_Lahir');
		$Jenis_Surat	= "KTP Sementara";
		$Status_Perkawinan = $this->input->post('Status_Perkawinan');
		$Agama = $this->input->post('Agama');
		$Pekerjaan = $this->input->post('Pekerjaan');
		$Alamat = "Kp. " . $this->input->post('Kp') . " Rt. " . $this->input->post('Rt') . " Rw. " . $this->input->post('Rw');
		$NIK = $this->input->post('NIK');
		$Masa_Berlaku_Surat = $this->input->post('Masa_Berlaku_Surat');
		$Tgl_Surat = $this->input->post('Tgl_Surat');
		$Nama_KepalaDesa = $this->input->post('Nama_KepalaDesa');

		$data = array(
			'Id_KTPSementara'	=> $Id_KTPSementara,
			'No_KTPSementara'   => $No_KTPSementara,
			'Nama'    			=> $Nama,
			'Jenis_Kelamin'     => $Jenis_Kelamin,
			'Tempat_Lahir'     	=> $Tempat_Lahir,
			'Tanggal_Lahir'     => $Tanggal_Lahir,
			'Status_Perkawinan'	=> $Status_Perkawinan,
			'Agama'				=> $Agama,
			'Pekerjaan'			=> $Pekerjaan,
			'Alamat'    		=> $Alamat,
			'NIK'   			=> $NIK,
			'Masa_Berlaku_Surat' => $Masa_Berlaku_Surat,
			'Tgl_Surat'     	=> $Tgl_Surat,
			'Nama_KepalaDesa'   => $Nama_KepalaDesa
		);

		$dataSK = array(
			'Id_Surat'		=> $Id_KTPSementara,
			'Tgl_Surat' 	=> $Tgl_Surat,
			'No_Surat'		=> $No_KTPSementara,
			'Jenis_Surat'	=> $Jenis_Surat,
			'Nama_Pengaju'	=> $Nama,
			'TTL'			=> $Tempat_Lahir . "," . $Tanggal_Lahir,
			'Pekerjaan'		=> $Pekerjaan,
			'Alamat'		=> $Alamat . " Desa Gandasoli Kec. Tanjungsiang"
		);
		$this->M_SKeluar->insert_SK($dataSK, 'suratkeluar');

		$this->M_KTPSementara->insert($data, 'ktpsementara');
		$this->session->set_flashdata('succes_save_surat', '<div class="alert alert-primary alert-dismissible fade show" role="alert"><strong>Data sudah berhasil di tambahkan</strong><button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button></div>');
		redirect('C_KTPSementara');
	}

	function Print($Id_KTPSementara)
	{
		$where = array('Id_KTPSementara' => $Id_KTPSementara);
		$data['ktpsementara'] = $this->M_KTPSementara->Print($where, 'ktpsementara')->result();
		$this->load->view('KTPSementara/P_KTPSementara', $data);
	}

	function Edit($Id_KTPSementara)
	{
		$where = array('Id_KTPSementara' => $Id_KTPSementara);
		$data['ktpsementara'] = $this->M_KTPSementara->Edit($where, 'ktpsementara')->result();
		$this->load->view('Template/Header');
		$this->load->view('Template/Navbar');
		$this->load->view('KTPSementara/E_KTPSementara', $data);
		$this->load->view('Template/Created');
		$this->load->view('Template/Footer');
	}

	function Update()
	{
		$Id_KTPSementara = $this->input->post('Id_KTPSementara');
		$No_KTPSementara = $this->input->post('No_KTPSementara');
		$Nama = $this->input->post('Nama');
		$Jenis_Kelamin = $this->input->post('Jenis_Kelamin');
		$Tempat_Lahir = $this->input->post('Tempat_Lahir');
		$Tanggal_Lahir = $this->input->post('Tanggal_Lahir');
		$Jenis_Surat	= "KTP Sementara";
		$Status_Perkawinan = $this->input->post('Status_Perkawinan');
		$Agama = $this->input->post('Agama');
		$Pekerjaan = $this->input->post('Pekerjaan');
		$Alamat = $this->input->post('Alamat');
		$NIK = $this->input->post('NIK');
		$Masa_Berlaku_Surat = $this->input->post('Masa_Berlaku_Surat');
		$Tgl_Surat = $this->input->post('Tgl_Surat');
		$Nama_KepalaDesa = $this->input->post('Nama_KepalaDesa');

		$data = array(
			'Id_KTPSementara'	=> $Id_KTPSementara,
			'No_KTPSementara'   => $No_KTPSementara,
			'Nama'    			=> $Nama,
			'Jenis_Kelamin'     => $Jenis_Kelamin,
			'Tempat_Lahir'     	=> $Tempat_Lahir,
			'Tanggal_Lahir'     => $Tanggal_Lahir,
			'Status_Perkawinan'	=> $Status_Perkawinan,
			'Agama'				=> $Agama,
			'Pekerjaan'			=> $Pekerjaan,
			'Alamat'    		=> $Alamat,
			'NIK'   			=> $NIK,
			'Masa_Berlaku_Surat' => $Masa_Berlaku_Surat,
			'Tgl_Surat'     	=> $Tgl_Surat,
			'Nama_KepalaDesa'   => $Nama_KepalaDesa
		);

		$dataSK = array(
			'Id_Surat'		=> $Id_KTPSementara,
			'Tgl_Surat' 	=> $Tgl_Surat,
			'No_Surat'		=> $No_KTPSementara,
			'Jenis_Surat'	=> $Jenis_Surat,
			'Nama_Pengaju'	=> $Nama,
			'TTL'			=> $Tempat_Lahir . "," . $Tanggal_Lahir,
			'Pekerjaan'		=> $Pekerjaan,
			'Alamat'		=> $Alamat . " Desa Gandasoli Kec. Tanjungsiang"
		);
		$whereSK = array(
			'Id_Surat' => $Id_KTPSementara
		);


		$where = array(
			'Id_KTPSementara' => $Id_KTPSementara
		);

		$this->M_KTPSementara->Update($where, $data, 'ktpsementara');
		$this->M_SKeluar->Update_SK($whereSK, $dataSK, 'suratkeluar');
		$this->session->set_flashdata('succes_save_surat', '<div class="alert alert-primary alert-dismissible fade show" role="alert"><strong>Data sudah berhasil di ubah</strong><button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button></div>');
		redirect('C_KTPSementara');
	}

	function Delete($Id_KTPSementara)
	{
		$where = array('Id_KTPSementara' => $Id_KTPSementara);
		$SK = array('Id_Surat' => $Id_KTPSementara);
		$this->M_SKeluar->Delete_SK($SK, 'suratkeluar');
		$this->M_KTPSementara->Delete($where, 'ktpsementara');
		$this->session->set_flashdata('succes_save_surat', '<div class="alert alert-primary alert-dismissible fade show" role="alert"><strong>Data sudah berhasil di hapus</strong><button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button></div>');
		redirect('C_KTPSementara');
	}
}
