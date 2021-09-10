<?php

class C_SRKip extends CI_Controller
{

	function __construct()
	{

		parent::__construct();
		if ($this->session->userdata('status') != "login") {
			redirect(base_url("Login"));
		}
		$this->load->library('session');
		$this->load->helper(array('form', 'url'));
		$this->load->model('M_SRKip');
		$this->load->model('M_SKeluar');
	}

	function index()
	{
		$data['srkip'] = $this->M_SRKip->tampil_data()->result();
		$this->load->view('Template/Header');
		$this->load->view('Template/Navbar');
		$this->load->view('SRKip/T_SRKip', $data);
		$this->load->view('Template/Created');
		$this->load->view('Template/Footer');
	}


	function Upload()
	{
		$Id_SRKip = $this->input->post('Id_SRKip');
		$No_SRKip = $this->input->post('No_SRKip');
		$Nama = $this->input->post('Nama');
		$Tempat_Lahir = $this->input->post('Tempat_Lahir');
		$Tanggal_Lahir = $this->input->post('Tanggal_Lahir');
		$Jenis_Surat	= "Surat Rekomendasi KIP";
		$Jenis_Kelamin = $this->input->post('Jenis_Kelamin');
		$Pekerjaan = $this->input->post('Pekerjaan');
		$Alamat = "Kp. " . $this->input->post('Kp') . " Rt. " . $this->input->post('Rt') . " Rw. " . $this->input->post('Rw');
		$No_Kip = $this->input->post('No_Kip');
		$Tgl_Surat = $this->input->post('Tgl_Surat');
		$Nama_KepalaDesa = $this->input->post('Nama_KepalaDesa');

		$data = array(
			'Id_SRKip'			=> $Id_SRKip,
			'No_SRKip'    		=> $No_SRKip,
			'Nama'    			=> $Nama,
			'Tempat_Lahir'     	=> $Tempat_Lahir,
			'Tanggal_Lahir'     => $Tanggal_Lahir,
			'Jenis_Kelamin'     => $Jenis_Kelamin,
			'Pekerjaan'			=> $Pekerjaan,
			'Alamat'    		=> $Alamat,
			'No_Kip'   			=> $No_Kip,
			'Tgl_Surat'     	=> $Tgl_Surat,
			'Nama_KepalaDesa'   => $Nama_KepalaDesa
		);

		$dataSK = array(
			'Id_Surat'		=> $Id_SRKip,
			'Tgl_Surat' 	=> $Tgl_Surat,
			'No_Surat'		=> $No_SRKip,
			'Jenis_Surat'	=> $Jenis_Surat,
			'Nama_Pengaju'	=> $Nama,
			'TTL'			=> $Tempat_Lahir . "," . $Tanggal_Lahir,
			'Pekerjaan'		=> $Pekerjaan,
			'Alamat'		=> $Alamat . " Desa Gandasoli Kec. Tanjungsiang"
		);

		$this->M_SRKip->insert($data, 'srkip');
		$this->M_SKeluar->insert_SK($dataSK, 'suratkeluar');
		$this->session->set_flashdata('succes_save_surat', '<div class="alert alert-primary alert-dismissible fade show" role="alert"><strong>Data sudah berhasil di tambahkan</strong><button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button></div>');
		redirect('C_SRKip');
	}

	function Print($Id_SRKip)
	{
		$where = array('Id_SRKip' => $Id_SRKip);
		$data['srkip'] = $this->M_SRKip->Print($where, 'srkip')->result();
		$this->load->view('SRKip/P_SRKip', $data);
	}

	function Edit($Id_SRKip)
	{
		$where = array('Id_SRKip' => $Id_SRKip);
		$data['srkip'] = $this->M_SRKip->Edit($where, 'srkip')->result();
		$this->load->view('Template/Header');
		$this->load->view('Template/Navbar');
		$this->load->view('SRKip/E_SRKip', $data);
		$this->load->view('Template/Created');
		$this->load->view('Template/Footer');
	}

	function Update()
	{
		$Id_SRKip = $this->input->post('Id_SRKip');
		$No_SRKip = $this->input->post('No_SRKip');
		$Nama = $this->input->post('Nama');
		$Jenis_Surat	= "Surat Rekomendasi KIP";
		$Tempat_Lahir = $this->input->post('Tempat_Lahir');
		$Tanggal_Lahir = $this->input->post('Tanggal_Lahir');
		$Jenis_Kelamin = $this->input->post('Jenis_Kelamin');
		$Pekerjaan = $this->input->post('Pekerjaan');
		$Alamat = $this->input->post('Alamat');
		$No_Kip = $this->input->post('No_Kip');
		$Tgl_Surat = $this->input->post('Tgl_Surat');
		$Nama_KepalaDesa = $this->input->post('Nama_KepalaDesa');

		$data = array(
			'Id_SRKip'			=> $Id_SRKip,
			'No_SRKip'    		=> $No_SRKip,
			'Nama'    			=> $Nama,
			'Tempat_Lahir'     	=> $Tempat_Lahir,
			'Tanggal_Lahir'     => $Tanggal_Lahir,
			'Jenis_Kelamin'     => $Jenis_Kelamin,
			'Pekerjaan'			=> $Pekerjaan,
			'Alamat'    		=> $Alamat,
			'No_Kip'   			=> $No_Kip,
			'Tgl_Surat'     	=> $Tgl_Surat,
			'Nama_KepalaDesa'   => $Nama_KepalaDesa
		);

		$dataSK = array(
			'Id_Surat'		=> $Id_SRKip,
			'Tgl_Surat' 	=> $Tgl_Surat,
			'No_Surat'		=> $No_SRKip,
			'Jenis_Surat'	=> $Jenis_Surat,
			'Nama_Pengaju'	=> $Nama,
			'TTL'			=> $Tempat_Lahir . "," . $Tanggal_Lahir,
			'Pekerjaan'		=> $Pekerjaan,
			'Alamat'		=> $Alamat . " Desa Gandasoli Kec. Tanjungsiang"
		);


		$where = array(
			'Id_SRKip' => $Id_SRKip
		);

		$whereSK = array(
			'Id_Surat' => $Id_SRKip
		);

		$this->M_SRKip->Update($where, $data, 'srkip');
		$this->M_SKeluar->Update_SK($whereSK, $dataSK, 'suratkeluar');
		$this->session->set_flashdata('succes_save_surat', '<div class="alert alert-primary alert-dismissible fade show" role="alert"><strong>Data sudah berhasil di ubah</strong><button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button></div>');
		redirect('C_SRKip');
	}

	function Delete($Id_SRKip)
	{
		$where = array('Id_SRKip' => $Id_SRKip);
		$SK = array('Id_Surat' => $Id_SRKip);
		$this->M_SKeluar->Delete_SK($SK, 'suratkeluar');
		$this->M_SRKip->Delete($where, 'srkip');
		$this->session->set_flashdata('succes_save_surat', '<div class="alert alert-primary alert-dismissible fade show" role="alert"><strong>Data sudah berhasil di hapus</strong><button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button></div>');
		redirect('C_SRKip');
	}
}
