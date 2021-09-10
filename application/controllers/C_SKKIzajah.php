<?php

class C_SKKIzajah extends CI_Controller
{

	function __construct()
	{

		parent::__construct();
		if ($this->session->userdata('status') != "login") {
			redirect(base_url("Login"));
		}
		$this->load->library('session');
		$this->load->helper(array('form', 'url'));
		$this->load->model('M_SKKIzajah');
		$this->load->model('M_SKeluar');
	}

	function index()
	{
		$data['skkizajah'] = $this->M_SKKIzajah->tampil_data()->result();
		$this->load->view('Template/Header');
		$this->load->view('Template/Navbar');
		$this->load->view('SKKIzajah/T_SKKIzajah', $data);
		$this->load->view('Template/Created');
		$this->load->view('Template/Footer');
	}


	function Upload()
	{
		$Id_SKKIzajah = $this->input->post('Id_SKKIzajah');
		$Jenis_Surat = "Keterangan Kehilangan Izajah";
		$No_SKKIzajah = $this->input->post('No_SKKIzajah');
		$Nama = $this->input->post('Nama');
		$Tempat_Lahir = $this->input->post('Tempat_Lahir');
		$Tanggal_Lahir = $this->input->post('Tanggal_Lahir');
		$Jenis_Kelamin = $this->input->post('Jenis_Kelamin');
		$Pekerjaan = $this->input->post('Pekerjaan');
		$Alamat = "Kp. " . $this->input->post('Kp') . " Rt. " . $this->input->post('Rt') . " Rw. " . $this->input->post('Rw');
		$NIK = $this->input->post('NIK');
		$Tgl_Surat = $this->input->post('Tgl_Surat');
		$Nama_KepalaDesa = $this->input->post('Nama_KepalaDesa');

		$data = array(
			'Id_SKKIzajah'		=> $Id_SKKIzajah,
			'No_SKKIzajah'    	=> $No_SKKIzajah,
			'Nama'    			=> $Nama,
			'Tempat_Lahir'     	=> $Tempat_Lahir,
			'Tanggal_Lahir'     => $Tanggal_Lahir,
			'Jenis_Kelamin'     => $Jenis_Kelamin,
			'Pekerjaan'     	=> $Pekerjaan,
			'Alamat'    		=> $Alamat,
			'NIK'   			=> $NIK,
			'Tgl_Surat'     	=> $Tgl_Surat,
			'Nama_KepalaDesa'   => $Nama_KepalaDesa
		);

		$dataSK = array(
			'Id_Surat'		=> $Id_SKKIzajah,
			'Tgl_Surat' 	=> $Tgl_Surat,
			'No_Surat'		=> $No_SKKIzajah,
			'Jenis_Surat'	=> $Jenis_Surat,
			'Nama_Pengaju'	=> $Nama,
			'TTL'			=> $Tempat_Lahir . "," . $Tanggal_Lahir,
			'Pekerjaan'		=> $Pekerjaan,
			'Alamat'		=> $Alamat . " Desa Gandasoli Kec. Tanjungsiang"
		);
		$this->M_SKeluar->insert_SK($dataSK, 'suratkeluar');
		$this->M_SKKIzajah->insert($data, 'skkizajah');
		$this->session->set_flashdata('succes_save_surat', '<div class="alert alert-primary alert-dismissible fade show" role="alert"><strong>Data sudah berhasil di tambahkan</strong><button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button></div>');
		redirect('C_SKKIzajah');
	}

	function Print($Id_SKKIzajah)
	{
		$where = array('Id_SKKIzajah' => $Id_SKKIzajah);
		$data['skkizajah'] = $this->M_SKKIzajah->Print($where, 'skkizajah')->result();
		$this->load->view('SKKIzajah/P_SKKIzajah', $data);
	}

	function Edit($Id_SKKIzajah)
	{
		$where = array('Id_SKKIzajah' => $Id_SKKIzajah);
		$data['skkizajah'] = $this->M_SKKIzajah->Edit($where, 'skkizajah')->result();
		$this->load->view('Template/Header');
		$this->load->view('Template/Navbar');
		$this->load->view('SKKIzajah/E_SKKIzajah', $data);
		$this->load->view('Template/Created');
		$this->load->view('Template/Footer');
	}

	function Update()
	{
		$Id_SKKIzajah = $this->input->post('Id_SKKIzajah');
		$Jenis_Surat = "Keterangan Kehilangan Izajah";
		$No_SKKIzajah = $this->input->post('No_SKKIzajah');
		$Nama = $this->input->post('Nama');
		$Tempat_Lahir = $this->input->post('Tempat_Lahir');
		$Tanggal_Lahir = $this->input->post('Tanggal_Lahir');
		$Jenis_Kelamin = $this->input->post('Jenis_Kelamin');
		$Pekerjaan = $this->input->post('Pekerjaan');
		$Alamat = $this->input->post('Alamat');
		$NIK = $this->input->post('NIK');
		$Tgl_Surat = $this->input->post('Tgl_Surat');
		$Nama_KepalaDesa = $this->input->post('Nama_KepalaDesa');

		$data = array(
			'Id_SKKIzajah'		=> $Id_SKKIzajah,
			'No_SKKIzajah'    	=> $No_SKKIzajah,
			'Nama'    			=> $Nama,
			'Tempat_Lahir'     	=> $Tempat_Lahir,
			'Tanggal_Lahir'     => $Tanggal_Lahir,
			'Jenis_Kelamin'     => $Jenis_Kelamin,
			'Pekerjaan'     	=> $Pekerjaan,
			'Alamat'    		=> $Alamat,
			'NIK'   			=> $NIK,
			'Tgl_Surat'     	=> $Tgl_Surat,
			'Nama_KepalaDesa'   => $Nama_KepalaDesa
		);

		$where = array(
			'Id_SKKIzajah' => $Id_SKKIzajah
		);

		$dataSK = array(
			'Id_Surat'		=> $Id_SKKIzajah,
			'Tgl_Surat' 	=> $Tgl_Surat,
			'No_Surat'		=> $No_SKKIzajah,
			'Jenis_Surat'	=> $Jenis_Surat,
			'Nama_Pengaju'	=> $Nama,
			'TTL'			=> $Tempat_Lahir . "," . $Tanggal_Lahir,
			'Pekerjaan'		=> $Pekerjaan,
			'Alamat'		=> $Alamat . " Desa Gandasoli Kec. Tanjungsiang"
		);
		$whereSK = array(
			'Id_Surat' => $Id_SKKIzajah
		);
		$this->M_SKeluar->Update_SK($whereSK, $dataSK, 'suratkeluar');

		$this->M_SKKIzajah->Update($where, $data, 'skkizajah');
		$this->session->set_flashdata('succes_save_surat', '<div class="alert alert-primary alert-dismissible fade show" role="alert"><strong>Data sudah berhasil di ubah</strong><button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button></div>');
		redirect('C_SKKIzajah');
	}

	function Delete($Id_SKKIzajah)
	{
		$where = array('Id_SKKIzajah' => $Id_SKKIzajah);
		$this->M_SKKIzajah->Delete($where, 'skkizajah');
		$SK = array('Id_Surat' => $Id_SKKIzajah);
		$this->M_SKeluar->Delete_SK($SK, 'suratkeluar');
		$this->session->set_flashdata('succes_save_surat', '<div class="alert alert-primary alert-dismissible fade show" role="alert"><strong>Data sudah berhasil di hapus</strong><button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button></div>');
		redirect('C_SKKIzajah');
	}
}
