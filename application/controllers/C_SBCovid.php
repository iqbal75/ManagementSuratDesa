<?php

class C_SBCovid extends CI_Controller
{

	function __construct()
	{

		parent::__construct();
		if ($this->session->userdata('status') != "login") {
			redirect(base_url("Login"));
		}
		$this->load->library('session');
		$this->load->helper(array('form', 'url'));
		$this->load->model('M_SBCovid');
		$this->load->model('M_SKeluar');
	}

	function index()
	{
		$data['sbcovid'] = $this->M_SBCovid->tampil_data()->result();
		$this->load->view('Template/Header');
		$this->load->view('Template/Navbar');
		$this->load->view('SBCovid/T_SBCovid', $data);
		$this->load->view('Template/Created');
		$this->load->view('Template/Footer');
	}


	function Upload()
	{
		$Id_SBCovid = $this->input->post('Id_SBCovid');
		$No_SBCovid = $this->input->post('No_SBCovid');
		$Jenis_Surat = "Keterangan Bebas Covid-19";
		$Nama = $this->input->post('Nama');
		$Tempat_Lahir = $this->input->post('Tempat_Lahir');
		$Tanggal_Lahir = $this->input->post('Tanggal_Lahir');
		$Pekerjaan = $this->input->post('Pekerjaan');
		$Alamat = "Kp. " . $this->input->post('Kp') . " Rt. " . $this->input->post('Rt') . " Rw. " . $this->input->post('Rw');
		$NIK = $this->input->post('NIK');
		$Tgl_Surat = $this->input->post('Tgl_Surat');
		$Nama_KepalaDesa = $this->input->post('Nama_KepalaDesa');

		$data = array(
			'Id_SBCovid'    	=> $Id_SBCovid,
			'No_SBCovid'    	=> $No_SBCovid,
			'Nama'    			=> $Nama,
			'Tempat_Lahir'     	=> $Tempat_Lahir,
			'Tanggal_Lahir'     => $Tanggal_Lahir,
			'Pekerjaan'     	=> $Pekerjaan,
			'Alamat'    		=> $Alamat,
			'NIK'   			=> $NIK,
			'Tgl_Surat'     	=> $Tgl_Surat,
			'Nama_KepalaDesa'   => $Nama_KepalaDesa
		);

		$dataSK = array(
			'Id_Surat'		=> $Id_SBCovid,
			'Tgl_Surat' 	=> $Tgl_Surat,
			'No_Surat'		=> $No_SBCovid,
			'Jenis_Surat'	=> $Jenis_Surat,
			'Nama_Pengaju'	=> $Nama,
			'TTL'			=> $Tempat_Lahir . "," . $Tanggal_Lahir,
			'Pekerjaan'		=> $Pekerjaan,
			'Alamat'		=> $Alamat . " Desa Gandasoli Kec. Tanjungsiang"
		);
		$this->M_SKeluar->insert_SK($dataSK, 'suratkeluar');

		$this->M_SBCovid->insert($data, 'sbcovid');
		$this->session->set_flashdata('succes_save_surat', '<div class="alert alert-primary alert-dismissible fade show" role="alert"><strong>Data sudah berhasil di tambahkan</strong><button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button></div>');
		redirect('C_SBCovid');
	}

	function Print($Id_SBCovid)
	{
		$where = array('Id_SBCovid' => $Id_SBCovid);
		$data['sbcovid'] = $this->M_SBCovid->Print($where, 'sbcovid')->result();
		$this->load->view('SBCovid/P_SBCovid', $data);
	}

	function Edit($Id_SBCovid)
	{
		$where = array('Id_SBCovid' => $Id_SBCovid);
		$data['sbcovid'] = $this->M_SBCovid->Edit($where, 'sbcovid')->result();
		$this->load->view('Template/Header');
		$this->load->view('Template/Navbar');
		$this->load->view('SBCovid/E_SBCovid', $data);
		$this->load->view('Template/Created');
		$this->load->view('Template/Footer');
	}

	function Update()
	{
		$Id_SBCovid = $this->input->post('Id_SBCovid');
		$No_SBCovid = $this->input->post('No_SBCovid');
		$Jenis_Surat = "Keterangan Bebas Covid-19";
		$Nama = $this->input->post('Nama');
		$Tempat_Lahir = $this->input->post('Tempat_Lahir');
		$Tanggal_Lahir = $this->input->post('Tanggal_Lahir');
		$Pekerjaan = $this->input->post('Pekerjaan');
		$Alamat = $this->input->post('Alamat');
		$NIK = $this->input->post('NIK');
		$Tgl_Surat = $this->input->post('Tgl_Surat');
		$Nama_KepalaDesa = $this->input->post('Nama_KepalaDesa');

		$data = array(
			'Id_SBCovid'		=> $Id_SBCovid,
			'No_SBCovid'    	=> $No_SBCovid,
			'Nama'    			=> $Nama,
			'Tempat_Lahir'     	=> $Tempat_Lahir,
			'Tanggal_Lahir'     => $Tanggal_Lahir,
			'Pekerjaan'     	=> $Pekerjaan,
			'Alamat'    		=> $Alamat,
			'NIK'   			=> $NIK,
			'Tgl_Surat'     	=> $Tgl_Surat,
			'Nama_KepalaDesa'   => $Nama_KepalaDesa
		);

		$where = array(
			'Id_SBCovid' => $Id_SBCovid
		);

		$dataSK = array(
			'Id_Surat'		=> $Id_SBCovid,
			'Tgl_Surat' 	=> $Tgl_Surat,
			'No_Surat'		=> $No_SBCovid,
			'Jenis_Surat'	=> $Jenis_Surat,
			'Nama_Pengaju'	=> $Nama,
			'TTL'			=> $Tempat_Lahir . "," . $Tanggal_Lahir,
			'Pekerjaan'		=> $Pekerjaan,
			'Alamat'		=> $Alamat . " Desa Gandasoli Kec. Tanjungsiang"
		);
		$whereSK = array(
			'Id_Surat' => $Id_SBCovid
		);
		$this->M_SKeluar->Update_SK($whereSK, $dataSK, 'suratkeluar');

		$this->M_SBCovid->Update($where, $data, 'sbcovid');
		$this->session->set_flashdata('succes_save_surat', '<div class="alert alert-primary alert-dismissible fade show" role="alert"><strong>Data sudah berhasil di ubah</strong><button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button></div>');
		redirect('C_SBCovid');
	}

	function Delete($Id_SBCovid)
	{
		$where = array('Id_SBCovid' => $Id_SBCovid);
		$this->M_SBCovid->Delete($where, 'sbcovid');
		$SK = array('Id_Surat' => $Id_SBCovid);
		$this->M_SKeluar->Delete_SK($SK, 'suratkeluar');
		$this->session->set_flashdata('succes_save_surat', '<div class="alert alert-primary alert-dismissible fade show" role="alert"><strong>Data sudah berhasil di hapus</strong><button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button></div>');
		redirect('C_SBCovid');
	}
}
