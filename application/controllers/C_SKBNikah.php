<?php

class C_SKBNikah extends CI_Controller
{

	function __construct()
	{

		parent::__construct();
		if ($this->session->userdata('status') != "login") {
			redirect(base_url("Login"));
		}
		$this->load->library('session');
		$this->load->helper(array('form', 'url'));
		$this->load->model('M_SKBNikah');
		$this->load->model('M_SKeluar');
	}

	function index()
	{
		$data['skbnikah'] = $this->M_SKBNikah->tampil_data()->result();
		$this->load->view('Template/Header');
		$this->load->view('Template/Navbar');
		$this->load->view('SKBNikah/T_SKBNikah', $data);
		$this->load->view('Template/Created');
		$this->load->view('Template/Footer');
	}


	function Upload()
	{
		$Id_SKBNikah = $this->input->post('Id_SKBNikah');
		$No_SKBNikah = $this->input->post('No_SKBNikah');
		$Jenis_Surat = "Keterangan Belum Menikah";
		$Nama = $this->input->post('Nama');
		$Tempat_Lahir = $this->input->post('Tempat_Lahir');
		$Tanggal_Lahir = $this->input->post('Tanggal_Lahir');
		$Agama = $this->input->post('Agama');
		$Jenis_Kelamin = $this->input->post('Jenis_Kelamin');
		$Alamat = "Kp. " . $this->input->post('Kp') . " Rt. " . $this->input->post('Rt') . " Rw. " . $this->input->post('Rw');
		$Pekerjaan = $this->input->post('Pekerjaan');
		$Tgl_Surat = $this->input->post('Tgl_Surat');
		$Nama_KepalaDesa = $this->input->post('Nama_KepalaDesa');

		$data = array(
			'Id_SKBNikah'    	=> $Id_SKBNikah,
			'No_SKBNikah'    	=> $No_SKBNikah,
			'Nama'    			=> $Nama,
			'Tempat_Lahir'     	=> $Tempat_Lahir,
			'Tanggal_Lahir'     => $Tanggal_Lahir,
			'Agama'				=> $Agama,
			'Jenis_Kelamin'     => $Jenis_Kelamin,
			'Alamat'    		=> $Alamat,
			'Pekerjaan'   		=> $Pekerjaan,
			'Tgl_Surat'     	=> $Tgl_Surat,
			'Nama_KepalaDesa'   => $Nama_KepalaDesa
		);

		$dataSK = array(
			'Id_Surat'		=> $Id_SKBNikah,
			'Tgl_Surat' 	=> $Tgl_Surat,
			'No_Surat'		=> $No_SKBNikah,
			'Jenis_Surat'	=> $Jenis_Surat,
			'Nama_Pengaju'	=> $Nama,
			'TTL'			=> $Tempat_Lahir . "," . $Tanggal_Lahir,
			'Pekerjaan'		=> $Pekerjaan,
			'Alamat'		=> $Alamat . " Desa Gandasoli Kec. Tanjungsiang"
		);
		$this->M_SKeluar->insert_SK($dataSK, 'suratkeluar');

		$this->M_SKBNikah->insert($data, 'skbnikah');
		$this->session->set_flashdata('succes_save_surat', '<div class="alert alert-primary alert-dismissible fade show" role="alert"><strong>Data sudah berhasil di tambahkan</strong><button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button></div>');
		redirect('C_SKBNikah');
	}

	function Print($Id_SKBNikah)
	{
		$where = array('Id_SKBNikah' => $Id_SKBNikah);
		$data['skbnikah'] = $this->M_SKBNikah->Print($where, 'skbnikah')->result();
		$this->load->view('SKBNikah/P_SKBNikah', $data);
	}

	function Edit($Id_SKBNikah)
	{
		$where = array('Id_SKBNikah' => $Id_SKBNikah);
		$data['skbnikah'] = $this->M_SKBNikah->Edit($where, 'skbnikah')->result();
		$this->load->view('Template/Header');
		$this->load->view('Template/Navbar');
		$this->load->view('SKBNikah/E_SKBNikah', $data);
		$this->load->view('Template/Created');
		$this->load->view('Template/Footer');
	}

	function Update()
	{
		$Id_SKBNikah = $this->input->post('Id_SKBNikah');
		$No_SKBNikah = $this->input->post('No_SKBNikah');
		$Jenis_Surat = "Keterangan Belum Menikah";
		$Nama = $this->input->post('Nama');
		$Tempat_Lahir = $this->input->post('Tempat_Lahir');
		$Tanggal_Lahir = $this->input->post('Tanggal_Lahir');
		$Agama = $this->input->post('Agama');
		$Jenis_Kelamin = $this->input->post('Jenis_Kelamin');
		$Alamat = $this->input->post('Alamat');
		$Pekerjaan = $this->input->post('Pekerjaan');
		$Tgl_Surat = $this->input->post('Tgl_Surat');
		$Nama_KepalaDesa = $this->input->post('Nama_KepalaDesa');

		$data = array(
			'Id_SKBNikah'			=> $Id_SKBNikah,
			'No_SKBNikah'    		=> $No_SKBNikah,
			'Nama'    			=> $Nama,
			'Tempat_Lahir'     	=> $Tempat_Lahir,
			'Tanggal_Lahir'     => $Tanggal_Lahir,
			'Agama'				=> $Agama,
			'Jenis_Kelamin'     => $Jenis_Kelamin,
			'Alamat'    		=> $Alamat,
			'Pekerjaan'   		=> $Pekerjaan,
			'Tgl_Surat'     	=> $Tgl_Surat,
			'Nama_KepalaDesa'   => $Nama_KepalaDesa
		);

		$where = array(
			'Id_SKBNikah' => $Id_SKBNikah
		);

		$dataSK = array(
			'Id_Surat'		=> $Id_SKBNikah,
			'Tgl_Surat' 	=> $Tgl_Surat,
			'No_Surat'		=> $No_SKBNikah,
			'Jenis_Surat'	=> $Jenis_Surat,
			'Nama_Pengaju'	=> $Nama,
			'TTL'			=> $Tempat_Lahir . "," . $Tanggal_Lahir,
			'Pekerjaan'		=> $Pekerjaan,
			'Alamat'		=> $Alamat . " Desa Gandasoli Kec. Tanjungsiang"
		);
		$whereSK = array(
			'Id_Surat' => $Id_SKBNikah
		);
		$this->M_SKeluar->Update_SK($whereSK, $dataSK, 'suratkeluar');

		$this->M_SKBNikah->Update($where, $data, 'skbnikah');
		$this->session->set_flashdata('succes_save_surat', '<div class="alert alert-primary alert-dismissible fade show" role="alert"><strong>Data sudah berhasil di ubah</strong><button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button></div>');
		redirect('C_SKBNikah');
	}

	function Delete($Id_SKBNikah)
	{
		$where = array('Id_SKBNikah' => $Id_SKBNikah);
		$this->M_SKBNikah->Delete($where, 'skbnikah');
		$SK = array('Id_Surat' => $Id_SKBNikah);
		$this->M_SKeluar->Delete_SK($SK, 'suratkeluar');
		$this->session->set_flashdata('succes_save_surat', '<div class="alert alert-primary alert-dismissible fade show" role="alert"><strong>Data sudah berhasil di hapus</strong><button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button></div>');
		redirect('C_SKBNikah');
	}
}
