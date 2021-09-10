<?php

class C_SIzinKegiatan extends CI_Controller
{

	function __construct()
	{

		parent::__construct();
		if ($this->session->userdata('status') != "login") {
			redirect(base_url("Login"));
		}
		$this->load->library('session');
		$this->load->helper(array('form', 'url'));
		$this->load->model('M_SIzinKegiatan');
		$this->load->model('M_SKeluar');
	}

	function index()
	{
		$data['sizinkegiatan'] = $this->M_SIzinKegiatan->tampil_data()->result();
		$this->load->view('Template/Header');
		$this->load->view('Template/Navbar');
		$this->load->view('SIzinKegiatan/T_SIzinKegiatan', $data);
		$this->load->view('Template/Created');
		$this->load->view('Template/Footer');
	}


	function Upload()
	{
		$Id_SIzinKegiatan = $this->input->post('Id_SIzinKegiatan');
		$No_SIzinKegiatan = $this->input->post('No_SIzinKegiatan');
		$Jenis_Surat = "Surat Izin Kegiatan";
		$Nama_Kegiatan = $this->input->post('Nama_Kegiatan');
		$Nama_Pengaju = $this->input->post('Nama');
		$Tempat_Lahir = $this->input->post('Tempat_Lahir');
		$Tanggal_Lahir = $this->input->post('Tanggal_Lahir');
		$Pekerjaan = $this->input->post('Pekerjaan');
		$Tanggal_Pelaksanaan = $this->input->post('Tanggal_Pelaksanaan');
		$Tempat_Pelaksanaan = "Kp. " . $this->input->post('Kp') . " Rt. " . $this->input->post('Rt') . " Rw. " . $this->input->post('Rw');
		$Tgl_Surat = $this->input->post('Tgl_Surat');
		$Nama_KepalaDesa = $this->input->post('Nama_KepalaDesa');

		$data = array(
			'Id_SIzinKegiatan'			=> $Id_SIzinKegiatan,
			'No_SIzinKegiatan'    		=> $No_SIzinKegiatan,
			'Nama_Kegiatan'    			=> $Nama_Kegiatan,
			'Tanggal_Pelaksanaan'     	=> $Tanggal_Pelaksanaan,
			'Tempat_Pelaksanaan'     	=> $Tempat_Pelaksanaan,
			'Tgl_Surat'     			=> $Tgl_Surat,
			'Nama_KepalaDesa'   		=> $Nama_KepalaDesa
		);

		$dataSK = array(
			'Id_Surat'		=> $Id_SIzinKegiatan,
			'Tgl_Surat' 	=> $Tgl_Surat,
			'No_Surat'		=> $No_SIzinKegiatan,
			'Jenis_Surat'	=> $Jenis_Surat,
			'Nama_Pengaju'	=> $Nama_Pengaju,
			'TTL'			=> $Tempat_Lahir . "," . $Tanggal_Lahir,
			'Pekerjaan'		=> $Pekerjaan,
			'Alamat'		=> $Tempat_Pelaksanaan . " Desa Gandasoli Kec. Tanjungsiang"
		);
		$this->M_SKeluar->insert_SK($dataSK, 'suratkeluar');

		$this->M_SIzinKegiatan->insert($data, 'sizinkegiatan');
		$this->session->set_flashdata('succes_save_surat', '<div class="alert alert-primary alert-dismissible fade show" role="alert"><strong>Data sudah berhasil di tambahkan</strong><button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button></div>');
		redirect('C_SIzinKegiatan');
	}

	function Print($Id_SIzinKegiatan)
	{
		$where = array('Id_SIzinKegiatan' => $Id_SIzinKegiatan);
		$data['sizinkegiatan'] = $this->M_SIzinKegiatan->Print($where, 'sizinkegiatan')->result();
		$this->load->view('SIzinKegiatan/P_SIzinKegiatan', $data);
	}

	function Edit($Id_SIzinKegiatan)
	{
		$where = array('Id_SIzinKegiatan' => $Id_SIzinKegiatan);
		$where_SK = array('Id_Surat' => $Id_SIzinKegiatan);
		$data['suratkeluar'] = $this->M_SIzinKegiatan->Edit_SK($where_SK, 'suratkeluar')->result();
		$data['sizinkegiatan'] = $this->M_SIzinKegiatan->Edit($where, 'sizinkegiatan')->result();
		$this->load->view('Template/Header');
		$this->load->view('Template/Navbar');
		$this->load->view('SIzinKegiatan/E_SIzinKegiatan', $data);
		$this->load->view('Template/Created');
		$this->load->view('Template/Footer');
	}

	function Update()
	{
		$Id_SIzinKegiatan = $this->input->post('Id_SIzinKegiatan');
		$No_SIzinKegiatan = $this->input->post('No_SIzinKegiatan');
		$Jenis_Surat = "Surat Izin Kegiatan";
		$Nama_Pengaju = $this->input->post('Nama_Pengaju');
		$TTL = $this->input->post('TTL');
		$Pekerjaan = $this->input->post('Pekerjaan');
		$Nama_Kegiatan = $this->input->post('Nama_Kegiatan');
		$Tanggal_Pelaksanaan = $this->input->post('Tanggal_Pelaksanaan');
		$Tempat_Pelaksanaan = $this->input->post('Tempat_Pelaksanaan');
		$Tgl_Surat = $this->input->post('Tgl_Surat');
		$Nama_KepalaDesa = $this->input->post('Nama_KepalaDesa');

		$data = array(
			'Id_SIzinKegiatan'			=> $Id_SIzinKegiatan,
			'No_SIzinKegiatan'    		=> $No_SIzinKegiatan,
			'Nama_Kegiatan'    			=> $Nama_Kegiatan,
			'Tanggal_Pelaksanaan'     	=> $Tanggal_Pelaksanaan,
			'Tempat_Pelaksanaan'     	=> $Tempat_Pelaksanaan,
			'Tgl_Surat'     			=> $Tgl_Surat,
			'Nama_KepalaDesa'   		=> $Nama_KepalaDesa
		);

		$dataSK = array(
			'Id_Surat'		=> $Id_SIzinKegiatan,
			'Tgl_Surat' 	=> $Tgl_Surat,
			'No_Surat'		=> $No_SIzinKegiatan,
			'Jenis_Surat'	=> $Jenis_Surat,
			'Nama_Pengaju'	=> $Nama_Pengaju,
			'TTL'			=> $TTL,
			'Pekerjaan'		=> $Pekerjaan,
			'Alamat'		=> $Tempat_Pelaksanaan . " Desa Gandasoli Kec. Tanjungsiang"
		);

		$whereSK = array(
			'Id_Surat' => $Id_SIzinKegiatan
		);

		$where = array(
			'Id_SIzinKegiatan' => $Id_SIzinKegiatan
		);

		$this->M_SIzinKegiatan->Update($where, $data, 'sizinkegiatan');
		$this->M_SKeluar->Update_SK($whereSK, $dataSK, 'suratkeluar');
		$this->session->set_flashdata('succes_save_surat', '<div class="alert alert-primary alert-dismissible fade show" role="alert"><strong>Data sudah berhasil di ubah</strong><button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button></div>');
		redirect('C_SIzinKegiatan');
	}

	function Delete($Id_SIzinKegiatan)
	{
		$where = array('Id_SIzinKegiatan' => $Id_SIzinKegiatan);
		$SK = array('Id_Surat' => $Id_SIzinKegiatan);
		$this->M_SKeluar->Delete_SK($SK, 'suratkeluar');
		$this->M_SIzinKegiatan->Delete($where, 'sizinkegiatan');
		$this->session->set_flashdata('succes_save_surat', '<div class="alert alert-primary alert-dismissible fade show" role="alert"><strong>Data sudah berhasil di hapus</strong><button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button></div>');
		redirect('C_SIzinKegiatan');
	}
}
