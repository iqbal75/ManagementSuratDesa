<?php

class C_SKDomisili extends CI_Controller
{

	function __construct()
	{

		parent::__construct();
		if ($this->session->userdata('status') != "login") {
			redirect(base_url("Login"));
		}
		$this->load->library('session');
		$this->load->helper(array('form', 'url'));
		$this->load->model('M_SKDomisili');
		$this->load->model('M_SKeluar');
	}

	function index()
	{
		$data['skdomisili'] = $this->M_SKDomisili->tampil_data()->result();
		$this->load->view('Template/Header');
		$this->load->view('Template/Navbar');
		$this->load->view('SKDomisili/T_SKDomisili', $data);
		$this->load->view('Template/Created');
		$this->load->view('Template/Footer');
	}


	function Upload()
	{
		$Id_SKDomisili = $this->input->post('Id_SKDomisili');
		$Jenis_Surat = "Surat Keterangan Domisili";
		$No_SKDomisili = $this->input->post('No_SKDomisili');
		$Nama = $this->input->post('Nama');
		$Tempat_Lahir = $this->input->post('Tempat_Lahir');
		$Tanggal_Lahir = $this->input->post('Tanggal_Lahir');
		$Pekerjaan = $this->input->post('Pekerjaan');
		$Alamat = "Kp. " . $this->input->post('Kp') . " Rt. " . $this->input->post('Rt') . " Rw. " . $this->input->post('Rw');
		$Tgl_Surat = $this->input->post('Tgl_Surat');
		$Nama_KepalaDesa = $this->input->post('Nama_KepalaDesa');

		$data = array(
			'Id_SKDomisili'    	=> $Id_SKDomisili,
			'No_SKDomisili'    	=> $No_SKDomisili,
			'Nama'    			=> $Nama,
			'Tempat_Lahir'     	=> $Tempat_Lahir,
			'Tanggal_Lahir'     => $Tanggal_Lahir,
			'Pekerjaan'     	=> $Pekerjaan,
			'Alamat'    		=> $Alamat,
			'Tgl_Surat'     	=> $Tgl_Surat,
			'Nama_KepalaDesa'   => $Nama_KepalaDesa
		);

		$dataSK = array(
			'Id_Surat'		=> $Id_SKDomisili,
			'Tgl_Surat' 	=> $Tgl_Surat,
			'No_Surat'		=> $No_SKDomisili,
			'Jenis_Surat'	=> $Jenis_Surat,
			'Nama_Pengaju'	=> $Nama,
			'TTL'			=> $Tempat_Lahir . "," . $Tanggal_Lahir,
			'Pekerjaan'		=> $Pekerjaan,
			'Alamat'		=> $Alamat . " Desa Gandasoli Kec. Tanjungsiang"
		);
		$this->M_SKeluar->insert_SK($dataSK, 'suratkeluar');

		$this->M_SKDomisili->insert($data, 'skdomisili');
		$this->session->set_flashdata('succes_save_surat', '<div class="alert alert-primary alert-dismissible fade show" role="alert"><strong>Data sudah berhasil di tambahkan</strong><button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button></div>');
		redirect('C_SKDomisili');
	}

	function Print($Id_SKDomisili)
	{
		$where = array('Id_SKDomisili' => $Id_SKDomisili);
		$data['skdomisili'] = $this->M_SKDomisili->Print($where, 'skdomisili')->result();
		$this->load->view('SKDomisili/P_SKDomisili', $data);
	}

	function Edit($Id_SKDomisili)
	{
		$where = array('Id_SKDomisili' => $Id_SKDomisili);
		$data['skdomisili'] = $this->M_SKDomisili->Edit($where, 'skdomisili')->result();
		$this->load->view('Template/Header');
		$this->load->view('Template/Navbar');
		$this->load->view('SKDomisili/E_SKDomisili', $data);
		$this->load->view('Template/Created');
		$this->load->view('Template/Footer');
	}

	function Update()
	{
		$Id_SKDomisili = $this->input->post('Id_SKDomisili');
		$Jenis_Surat = "Surat Keterangan Domisili";
		$No_SKDomisili = $this->input->post('No_SKDomisili');
		$Nama = $this->input->post('Nama');
		$Tempat_Lahir = $this->input->post('Tempat_Lahir');
		$Tanggal_Lahir = $this->input->post('Tanggal_Lahir');
		$Pekerjaan = $this->input->post('Pekerjaan');
		$Alamat = $this->input->post('Alamat');
		$Tgl_Surat = $this->input->post('Tgl_Surat');
		$Nama_KepalaDesa = $this->input->post('Nama_KepalaDesa');

		$data = array(
			'Id_SKDomisili'		=> $Id_SKDomisili,
			'No_SKDomisili'    	=> $No_SKDomisili,
			'Nama'    			=> $Nama,
			'Tempat_Lahir'     	=> $Tempat_Lahir,
			'Tanggal_Lahir'     => $Tanggal_Lahir,
			'Pekerjaan'     	=> $Pekerjaan,
			'Alamat'    		=> $Alamat,
			'Tgl_Surat'     	=> $Tgl_Surat,
			'Nama_KepalaDesa'   => $Nama_KepalaDesa
		);

		$where = array(
			'Id_SKDomisili' => $Id_SKDomisili
		);

		$dataSK = array(
			'Id_Surat'		=> $Id_SKDomisili,
			'Tgl_Surat' 	=> $Tgl_Surat,
			'No_Surat'		=> $No_SKDomisili,
			'Jenis_Surat'	=> $Jenis_Surat,
			'Nama_Pengaju'	=> $Nama,
			'TTL'			=> $Tempat_Lahir . "," . $Tanggal_Lahir,
			'Pekerjaan'		=> $Pekerjaan,
			'Alamat'		=> $Alamat . " Desa Gandasoli Kec. Tanjungsiang"
		);
		$whereSK = array(
			'Id_Surat' => $Id_SKDomisili
		);
		$this->M_SKeluar->Update_SK($whereSK, $dataSK, 'suratkeluar');

		$this->M_SKDomisili->Update($where, $data, 'skdomisili');
		$this->session->set_flashdata('succes_save_surat', '<div class="alert alert-primary alert-dismissible fade show" role="alert"><strong>Data sudah berhasil di ubah</strong><button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button></div>');
		redirect('C_SKDomisili');
	}

	function Delete($Id_SKDomisili)
	{
		$where = array('Id_SKDomisili' => $Id_SKDomisili);
		$this->M_SKDomisili->Delete($where, 'skdomisili');
		$SK = array('Id_Surat' => $Id_SKDomisili);
		$this->M_SKeluar->Delete_SK($SK, 'suratkeluar');
		$this->session->set_flashdata('succes_save_surat', '<div class="alert alert-primary alert-dismissible fade show" role="alert"><strong>Data sudah berhasil di hapus</strong><button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button></div>');
		redirect('C_SKDomisili');
	}
}
