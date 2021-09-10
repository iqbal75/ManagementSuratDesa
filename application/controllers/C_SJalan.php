<?php

class C_Sjalan extends CI_Controller
{

	function __construct()
	{

		parent::__construct();
		if ($this->session->userdata('status') != "login") {
			redirect(base_url("Login"));
		}
		$this->load->library('session');
		$this->load->helper(array('form', 'url'));
		$this->load->model('M_SJalan');
		$this->load->library('upload');
		$this->load->model('M_SKeluar');
	}

	function index()
	{

		$data['sjalan'] = $this->M_SJalan->tampil_data()->result();

		$this->load->view('Template/Header');
		$this->load->view('Template/Navbar');
		$this->load->view('SJalan/T_SJalan', $data);
		$this->load->view('Template/Created');
		$this->load->view('Template/Footer');
	}


	function Upload()
	{
		$Id_Sjalan = $this->input->post('Id_Sjalan');
		$No_Sjalan = $this->input->post('No_Sjalan');
		$Nama = $this->input->post('Nama');
		$Tempat_Lahir = $this->input->post('Tempat_Lahir');
		$Tanggal_Lahir = $this->input->post('Tanggal_Lahir');
		$TTL = $Tempat_Lahir . $Tanggal_Lahir;
		$Jenis_Surat	= "Surat Jalan";
		$Pekerjaan = $this->input->post('Pekerjaan');
		$Alamat = "Kp. " . $this->input->post('Kp') . " Rt. " . $this->input->post('Rt') . " Rw. " . $this->input->post('Rw') . " Desa Gandasoli Kec. Tanjungsiang";
		$Alamat2 = "Kp. " . $this->input->post('Kp') . " Rt. " . $this->input->post('Rt') . " Rw. " . $this->input->post('Rw');
		$Jenis_Kendaraan = $this->input->post('Jenis_Kendaraan');
		$No_Polisi = $this->input->post('No_Polisi');
		$No_Rangka = $this->input->post('No_Rangka');
		$AtasNama_Mobil = $this->input->post('AtasNama_Mobil');
		$Tujuan = $this->input->post('Tujuan');
		$Barang_Bawaan = $this->input->post('Barang_Bawaan');
		$Tgl_Surat = $this->input->post('Tgl_Surat');
		$Nama_KepalaDesa = $this->input->post('Nama_KepalaDesa');

		$data = array(
			'Id_Sjalan'			=> $Id_Sjalan,
			'No_Sjalan'    		=> $No_Sjalan,
			'Nama'    			=> $Nama,
			'Tempat_Lahir'     	=> $Tempat_Lahir,
			'Tanggal_Lahir'     => $Tanggal_Lahir,
			'Pekerjaan'     	=> $Pekerjaan,
			'Alamat'    		=> $Alamat,
			'Jenis_Kendaraan'   => $Jenis_Kendaraan,
			'No_Polisi'     	=> $No_Polisi,
			'No_Rangka'     	=> $No_Rangka,
			'AtasNama_Mobil'    => $AtasNama_Mobil,
			'Tujuan'    		=> $Tujuan,
			'Barang_Bawaan'    	=> $Barang_Bawaan,
			'Tgl_Surat'     	=> $Tgl_Surat,
			'Nama_KepalaDesa'   => $Nama_KepalaDesa
		);

		$SK = array(
			'Id_Surat'		=> $Id_Sjalan,
			'Tgl_Surat' 	=> $Tgl_Surat,
			'No_Surat'		=> $No_Sjalan,
			'Jenis_Surat'	=> $Jenis_Surat,
			'Nama_Pengaju'	=> $Nama,
			'TTL'			=> $Tempat_Lahir . "," . $Tanggal_Lahir,
			'Pekerjaan'		=> $Pekerjaan,
			'Alamat'		=> $Alamat
		);
		// $this->M_SJalan->simpan($Id_Sjalan, $No_Sjalan, $Nama, $Tempat_Lahir, $Tanggal_Lahir, $Pekerjaan, $Alamat2, $Jenis_Kendaraan, $No_Polisi, $No_Rangka, $AtasNama_Mobil, $Tujuan, $Barang_Bawaan, $Tgl_Surat, $Nama_KepalaDesa);
		// $this->M_SJalan->simpan_SK($Id_Sjalan, $Tgl_Surat, $No_Sjalan, $Jenis_Surat, $Nama, $TTL, $Pekerjaan, $Alamat);
		$this->M_SJalan->insert($data, 'sjalan');
		$this->M_SKeluar->insert_SK($SK, 'suratKeluar');
		$this->session->set_flashdata('succes_save_surat', '<div class="alert alert-primary alert-dismissible fade show" role="alert"><strong>Data sudah berhasil ditambahkan</strong><button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button></div>');
		redirect('C_Sjalan');
	}

	function Print($Id_Sjalan)
	{
		$where = array('Id_Sjalan' => $Id_Sjalan);
		$data['sjalan'] = $this->M_SJalan->Print($where, 'sjalan')->result();
		$this->load->view('SJalan/P_SJalan', $data);
	}

	function Edit($Id_Sjalan)
	{
		$where = array('Id_Sjalan' => $Id_Sjalan);
		$data['sjalan'] = $this->M_SJalan->Edit($where, 'sjalan')->result();
		$this->load->view('Template/Header');
		$this->load->view('Template/Navbar');
		$this->load->view('SJalan/E_SJalan', $data);
		$this->load->view('Template/Created');
		$this->load->view('Template/Footer');
	}

	function Update()
	{
		$Id_Sjalan = $this->input->post('Id_Sjalan');
		$No_Sjalan = $this->input->post('No_Sjalan');
		$Nama = $this->input->post('Nama');
		$Tempat_Lahir = $this->input->post('Tempat_Lahir');
		$Tanggal_Lahir = $this->input->post('Tanggal_Lahir');
		$Jenis_Surat	= "Surat Jalan";
		$Pekerjaan = $this->input->post('Pekerjaan');
		$Alamat = $this->input->post('Alamat');
		$Jenis_Kendaraan = $this->input->post('Jenis_Kendaraan');
		$No_Polisi = $this->input->post('No_Polisi');
		$No_Rangka = $this->input->post('No_Rangka');
		$AtasNama_Mobil = $this->input->post('AtasNama_Mobil');
		$Tujuan = $this->input->post('Tujuan');
		$Barang_Bawaan = $this->input->post('Barang_Bawaan');
		$Tgl_Surat = $this->input->post('Tgl_Surat');
		$Nama_KepalaDesa = $this->input->post('Nama_KepalaDesa');

		$data = array(
			'Id_Sjalan'			=> $Id_Sjalan,
			'No_Sjalan'    		=> $No_Sjalan,
			'Nama'    			=> $Nama,
			'Tempat_Lahir'     	=> $Tempat_Lahir,
			'Tanggal_Lahir'     => $Tanggal_Lahir,
			'Pekerjaan'     	=> $Pekerjaan,
			'Alamat'    		=> $Alamat,
			'Jenis_Kendaraan'   => $Jenis_Kendaraan,
			'No_Polisi'     	=> $No_Polisi,
			'No_Rangka'     	=> $No_Rangka,
			'AtasNama_Mobil'    => $AtasNama_Mobil,
			'Tujuan'    		=> $Tujuan,
			'Barang_Bawaan'    	=> $Barang_Bawaan,
			'Tgl_Surat'     	=> $Tgl_Surat,
			'Nama_KepalaDesa'   => $Nama_KepalaDesa
		);

		$dataSK = array(
			'Id_Surat'		=> $Id_Sjalan,
			'Tgl_Surat' 	=> $Tgl_Surat,
			'No_Surat'		=> $No_Sjalan,
			'Jenis_Surat'	=> $Jenis_Surat,
			'Nama_Pengaju'	=> $Nama,
			'TTL'			=> $Tempat_Lahir . "," . $Tanggal_Lahir,
			'Pekerjaan'		=> $Pekerjaan,
			'Alamat'		=> $Alamat . " Desa Gandasoli Kec. Tanjungsiang"
		);


		$where = array(
			'Id_Sjalan' => $Id_Sjalan
		);

		$whereSK = array(
			'Id_Surat' => $Id_Sjalan
		);

		$this->M_SJalan->Update($where, $data, 'sjalan');
		$this->M_SKeluar->Update_SK($whereSK, $dataSK, 'suratkeluar');
		$this->session->set_flashdata('succes_save_surat', '<div class="alert alert-primary alert-dismissible fade show" role="alert"><strong>Data sudah berhasil di ubah</strong><button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button></div>');
		redirect('C_Sjalan');
	}

	function Delete($Id_Sjalan)
	{
		$where = array('Id_Sjalan' => $Id_Sjalan);
		$SK = array('Id_Surat' => $Id_Sjalan);
		$this->M_SKeluar->Delete_SK($SK, 'suratkeluar');
		$this->M_SJalan->Delete($where, 'sjalan');

		$this->session->set_flashdata('succes_save_surat', '<div class="alert alert-primary alert-dismissible fade show" role="alert"><strong>Data sudah berhasil di hapus</strong><button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button></div>');
		redirect('C_Sjalan');
	}
}
