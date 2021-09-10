<?php

class C_SKKKK extends CI_Controller
{

	function __construct()
	{

		parent::__construct();
		if ($this->session->userdata('status') != "login") {
			redirect(base_url("Login"));
		}
		$this->load->library('session');
		$this->load->helper(array('form', 'url'));
		$this->load->model('M_SKKKK');
		$this->load->model('M_SKeluar');
	}

	function index()
	{
		$data['skkkk'] = $this->M_SKKKK->tampil_data()->result();
		$this->load->view('Template/Header');
		$this->load->view('Template/Navbar');
		$this->load->view('SKKKK/T_SKKKK', $data);
		$this->load->view('Template/Created');
		$this->load->view('Template/Footer');
	}


	function Upload()
	{
		$Id_SKKKK = $this->input->post('Id_SKKKK');
		$No_SKKKK = $this->input->post('No_SKKKK');
		$Jenis_Surat = "Keterangan Kehilangan Kartu Keluarga";
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
			'Id_SKKKK'    		=> $Id_SKKKK,
			'No_SKKKK'    		=> $No_SKKKK,
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
			'Id_Surat'		=> $Id_SKKKK,
			'Tgl_Surat' 	=> $Tgl_Surat,
			'No_Surat'		=> $No_SKKKK,
			'Jenis_Surat'	=> $Jenis_Surat,
			'Nama_Pengaju'	=> $Nama,
			'TTL'			=> $Tempat_Lahir . "," . $Tanggal_Lahir,
			'Pekerjaan'		=> $Pekerjaan,
			'Alamat'		=> $Alamat . " Desa Gandasoli Kec. Tanjungsiang"
		);
		$this->M_SKeluar->insert_SK($dataSK, 'suratkeluar');

		$this->M_SKKKK->insert($data, 'skkkk');
		$this->session->set_flashdata('succes_save_surat', '<div class="alert alert-primary alert-dismissible fade show" role="alert"><strong>Data sudah berhasil di tambahkan</strong><button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button></div>');
		redirect('C_SKKKK');
	}

	function Print($Id_SKKKK)
	{
		$where = array('Id_SKKKK' => $Id_SKKKK);
		$data['skkkk'] = $this->M_SKKKK->Print($where, 'skkkk')->result();
		$this->load->view('SKKKK/P_SKKKK', $data);
	}

	function Edit($Id_SKKKK)
	{
		$where = array('Id_SKKKK' => $Id_SKKKK);
		$data['skkkk'] = $this->M_SKKKK->Edit($where, 'skkkk')->result();
		$this->load->view('Template/Header');
		$this->load->view('Template/Navbar');
		$this->load->view('SKKKK/E_SKKKK', $data);
		$this->load->view('Template/Created');
		$this->load->view('Template/Footer');
	}

	function Update()
	{
		$Id_SKKKK = $this->input->post('Id_SKKKK');
		$No_SKKKK = $this->input->post('No_SKKKK');
		$Jenis_Surat = "Keterangan Kehilangan Kartu Keluarga";
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
			'Id_SKKKK'			=> $Id_SKKKK,
			'No_SKKKK'    		=> $No_SKKKK,
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
			'Id_SKKKK' => $Id_SKKKK
		);

		$dataSK = array(
			'Id_Surat'		=> $Id_SKKKK,
			'Tgl_Surat' 	=> $Tgl_Surat,
			'No_Surat'		=> $No_SKKKK,
			'Jenis_Surat'	=> $Jenis_Surat,
			'Nama_Pengaju'	=> $Nama,
			'TTL'			=> $Tempat_Lahir . "," . $Tanggal_Lahir,
			'Pekerjaan'		=> $Pekerjaan,
			'Alamat'		=> $Alamat . " Desa Gandasoli Kec. Tanjungsiang"
		);
		$whereSK = array(
			'Id_Surat' => $Id_SKKKK
		);
		$this->M_SKeluar->Update_SK($whereSK, $dataSK, 'suratkeluar');

		$this->M_SKKKK->Update($where, $data, 'skkkk');
		$this->session->set_flashdata('succes_save_surat', '<div class="alert alert-primary alert-dismissible fade show" role="alert"><strong>Data sudah berhasil di ubah</strong><button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button></div>');
		redirect('C_SKKKK');
	}

	function Delete($Id_SKKKK)
	{
		$where = array('Id_SKKKK' => $Id_SKKKK);
		$this->M_SKKKK->Delete($where, 'skkkk');
		$SK = array('Id_Surat' => $Id_SKKKK);
		$this->M_SKeluar->Delete_SK($SK, 'suratkeluar');
		$this->session->set_flashdata('succes_save_surat', '<div class="alert alert-primary alert-dismissible fade show" role="alert"><strong>Data sudah berhasil di hapus</strong><button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button></div>');
		redirect('C_SKKKK');
	}
}
