<?php

class C_SKKip extends CI_Controller
{

	function __construct()
	{

		parent::__construct();
		if ($this->session->userdata('status') != "login") {
			redirect(base_url("Login"));
		}
		$this->load->library('session');
		$this->load->helper(array('form', 'url'));
		$this->load->model('M_SKKip');
		$this->load->model('M_SKeluar');
	}

	function index()
	{
		$data['skkip'] = $this->M_SKKip->tampil_data()->result();
		$this->load->view('Template/Header');
		$this->load->view('Template/Navbar');
		$this->load->view('SKKip/T_SKKip', $data);
		$this->load->view('Template/Created');
		$this->load->view('Template/Footer');
	}


	function Upload()
	{
		$Id_SKKip = $this->input->post('Id_SKKip');
		$No_SKKip = $this->input->post('No_SKKip');
		$Nama = $this->input->post('Nama');
		$Tempat_Lahir = $this->input->post('Tempat_Lahir');
		$Tanggal_Lahir = $this->input->post('Tanggal_Lahir');
		$Jenis_Surat	= "Surat Keterangan Kehilangan KIP";
		$Jenis_Kelamin = $this->input->post('Jenis_Kelamin');
		$Pekerjaan = $this->input->post('Pekerjaan');
		$No_Kip = $this->input->post('No_Kip');
		$Alamat = "Kp. " . $this->input->post('Kp') . " Rt. " . $this->input->post('Rt') . " Rw. " . $this->input->post('Rw');
		$Tgl_Surat = $this->input->post('Tgl_Surat');
		$Nama_KepalaDesa = $this->input->post('Nama_KepalaDesa');

		$data = array(
			'Id_SKKip'			=> $Id_SKKip,
			'No_SKKip'    		=> $No_SKKip,
			'Nama'    			=> $Nama,
			'Tempat_Lahir'     	=> $Tempat_Lahir,
			'Tanggal_Lahir'     => $Tanggal_Lahir,
			'Jenis_Kelamin'     => $Jenis_Kelamin,
			'Pekerjaan'			=> $Pekerjaan,
			'No_Kip'   			=> $No_Kip,
			'Alamat'    		=> $Alamat,
			'Tgl_Surat'     	=> $Tgl_Surat,
			'Nama_KepalaDesa'   => $Nama_KepalaDesa
		);

		$dataSK = array(
			'Id_Surat'		=> $Id_SKKip,
			'Tgl_Surat' 	=> $Tgl_Surat,
			'No_Surat'		=> $No_SKKip,
			'Jenis_Surat'	=> $Jenis_Surat,
			'Nama_Pengaju'	=> $Nama,
			'TTL'			=> $Tempat_Lahir . "," . $Tanggal_Lahir,
			'Pekerjaan'		=> $Pekerjaan,
			'Alamat'		=> $Alamat . " Desa Gandasoli Kec. Tanjungsiang"
		);
		$this->M_SKeluar->insert_SK($dataSK, 'suratkeluar');

		$this->M_SKKip->insert($data, 'skkip');
		$this->session->set_flashdata('succes_save_surat', '<div class="alert alert-primary alert-dismissible fade show" role="alert"><strong>Data sudah berhasil di tambahkan</strong><button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button></div>');
		redirect('C_SKKip');
	}

	function Print($Id_SKKip)
	{
		$where = array('Id_SKKip' => $Id_SKKip);
		$data['skkip'] = $this->M_SKKip->Print($where, 'skkip')->result();
		$this->load->view('SKKip/P_SKKip', $data);
	}

	function Edit($Id_SKKip)
	{
		$where = array('Id_SKKip' => $Id_SKKip);
		$data['skkip'] = $this->M_SKKip->Edit($where, 'skkip')->result();
		$this->load->view('Template/Header');
		$this->load->view('Template/Navbar');
		$this->load->view('SKKip/E_SKKip', $data);
		$this->load->view('Template/Created');
		$this->load->view('Template/Footer');
	}

	function Update()
	{
		$Id_SKKip = $this->input->post('Id_SKKip');
		$No_SKKip = $this->input->post('No_SKKip');
		$Nama = $this->input->post('Nama');
		$Tempat_Lahir = $this->input->post('Tempat_Lahir');
		$Tanggal_Lahir = $this->input->post('Tanggal_Lahir');
		$Jenis_Surat	= "Surat Keterangan Kehilangan KIP";
		$Jenis_Kelamin = $this->input->post('Jenis_Kelamin');
		$Pekerjaan = $this->input->post('Pekerjaan');
		$No_Kip = $this->input->post('No_Kip');
		$Alamat = $this->input->post('Alamat');
		$Tgl_Surat = $this->input->post('Tgl_Surat');
		$Nama_KepalaDesa = $this->input->post('Nama_KepalaDesa');

		$data = array(
			'Id_SKKip'			=> $Id_SKKip,
			'No_SKKip'    		=> $No_SKKip,
			'Nama'    			=> $Nama,
			'Tempat_Lahir'     	=> $Tempat_Lahir,
			'Tanggal_Lahir'     => $Tanggal_Lahir,
			'Jenis_Kelamin'     => $Jenis_Kelamin,
			'Pekerjaan'			=> $Pekerjaan,
			'No_Kip'   			=> $No_Kip,
			'Alamat'    		=> $Alamat,
			'Tgl_Surat'     	=> $Tgl_Surat,
			'Nama_KepalaDesa'   => $Nama_KepalaDesa
		);

		$dataSK = array(
			'Id_Surat'		=> $Id_SKKip,
			'Tgl_Surat' 	=> $Tgl_Surat,
			'No_Surat'		=> $No_SKKip,
			'Jenis_Surat'	=> $Jenis_Surat,
			'Nama_Pengaju'	=> $Nama,
			'TTL'			=> $Tempat_Lahir . "," . $Tanggal_Lahir,
			'Pekerjaan'		=> $Pekerjaan,
			'Alamat'		=> $Alamat . " Desa Gandasoli Kec. Tanjungsiang"
		);
		$whereSK = array(
			'Id_Surat' => $Id_SKKip
		);


		$where = array(
			'Id_SKKip' => $Id_SKKip
		);

		$this->M_SKKip->Update($where, $data, 'skkip');
		$this->M_SKeluar->Update_SK($whereSK, $dataSK, 'suratkeluar');
		$this->session->set_flashdata('succes_save_surat', '<div class="alert alert-primary alert-dismissible fade show" role="alert"><strong>Data sudah berhasil di ubah</strong><button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button></div>');
		redirect('C_SKKip');
	}

	function Delete($Id_SKKip)
	{
		$where = array('Id_SKKip' => $Id_SKKip);
		$SK = array('Id_Surat' => $Id_SKKip);
		$this->M_SKeluar->Delete_SK($SK, 'suratkeluar');
		$this->M_SKKip->Delete($where, 'skkip');
		$this->session->set_flashdata('succes_save_surat', '<div class="alert alert-primary alert-dismissible fade show" role="alert"><strong>Data sudah berhasil di hapus</strong><button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button></div>');
		redirect('C_SKKip');
	}
}
