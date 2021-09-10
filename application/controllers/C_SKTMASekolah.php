<?php

class C_SKTMASekolah extends CI_Controller
{

	function __construct()
	{

		parent::__construct();
		if ($this->session->userdata('status') != "login") {
			redirect(base_url("Login"));
		}
		$this->load->library('session');
		$this->load->helper(array('form', 'url'));
		$this->load->model('M_SKTMASekolah');
		$this->load->model('M_SKeluar');
	}

	function index()
	{
		$data['sktmasekolah'] = $this->M_SKTMASekolah->tampil_data()->result();
		$this->load->view('Template/Header');
		$this->load->view('Template/Navbar');
		$this->load->view('SKTMASekolah/T_SKTMASekolah', $data);
		$this->load->view('Template/Created');
		$this->load->view('Template/Footer');
	}


	function Upload()
	{
		$Id_SKTMASekolah = $this->input->post('Id_SKTMASekolah');
		$No_SKTMASekolah = $this->input->post('No_SKTMASekolah');
		$Jenis_Surat	= "SKTM Anak Sekolah";
		$Nama_Ortu = $this->input->post('Nama_Ortu');
		$Tempat_Lahir_Ortu = $this->input->post('Tempat_Lahir_Ortu');
		$Tanggal_Lahir_Ortu = $this->input->post('Tanggal_Lahir_Ortu');
		$Agama_Ortu = $this->input->post('Agama_Ortu');
		$Pekerjaan_Ortu = $this->input->post('Pekerjaan_Ortu');
		$Alamat_Ortu = "Kp. " . $this->input->post('Kp_Ortu') . " Rt. " . $this->input->post('Rt_Ortu') . " Rw. " . $this->input->post('Rw_Ortu');
		$NIK_Ortu = $this->input->post('NIK_Ortu');
		$Nama_Anak = $this->input->post('Nama_Anak');
		$Tempat_Lahir_Anak = $this->input->post('Tempat_Lahir_Anak');
		$Tanggal_Lahir_Anak = $this->input->post('Tanggal_Lahir_Anak');
		$Jenis_Kelamin_Anak = $this->input->post('Jenis_Kelamin_Anak');
		$Agama_Anak = $this->input->post('Agama_Anak');
		$Pekerjaan_Anak = $this->input->post('Pekerjaan_Anak');
		$Alamat_Anak = "Kp. " . $this->input->post('Kp_Anak') . " Rt. " . $this->input->post('Rt_Anak') . " Rw. " . $this->input->post('Rw_Anak');
		$NIK_Anak = $this->input->post('NIK_Anak');
		$Tgl_Surat = $this->input->post('Tgl_Surat');
		$Nama_KepalaDesa = $this->input->post('Nama_KepalaDesa');

		$data = array(
			'Id_SKTMASekolah'		=> $Id_SKTMASekolah,
			'No_SKTMASekolah'   	=> $No_SKTMASekolah,
			'Nama_Ortu'    			=> $Nama_Ortu,
			'Tempat_Lahir_Ortu'     => $Tempat_Lahir_Ortu,
			'Tanggal_Lahir_Ortu'    => $Tanggal_Lahir_Ortu,
			'Agama_Ortu'			=> $Agama_Ortu,
			'Pekerjaan_Ortu'		=> $Pekerjaan_Ortu,
			'Alamat_Ortu'    		=> $Alamat_Ortu,
			'NIK_Ortu'   			=> $NIK_Ortu,
			'Nama_Anak'    			=> $Nama_Anak,
			'Tempat_Lahir_Anak'    	=> $Tempat_Lahir_Anak,
			'Tanggal_Lahir_Anak'    => $Tanggal_Lahir_Anak,
			'Jenis_Kelamin_Anak'    => $Jenis_Kelamin_Anak,
			'Agama_Anak'			=> $Agama_Anak,
			'Pekerjaan_Anak'		=> $Pekerjaan_Anak,
			'Alamat_Anak'    		=> $Alamat_Anak,
			'NIK_Anak'   			=> $NIK_Anak,
			'Tgl_Surat'     		=> $Tgl_Surat,
			'Nama_KepalaDesa'   	=> $Nama_KepalaDesa
		);

		$dataSK = array(
			'Id_Surat'		=> $Id_SKTMASekolah,
			'Tgl_Surat' 	=> $Tgl_Surat,
			'No_Surat'		=> $No_SKTMASekolah,
			'Jenis_Surat'	=> $Jenis_Surat,
			'Nama_Pengaju'	=> $Nama_Anak,
			'TTL'			=> $Tempat_Lahir_Anak . "," . $Tanggal_Lahir_Anak,
			'Pekerjaan'		=> $Pekerjaan_Anak,
			'Alamat'		=> $Alamat_Anak . " Desa Gandasoli Kec. Tanjungsiang"
		);
		$this->M_SKeluar->insert_SK($dataSK, 'suratkeluar');

		$this->M_SKTMASekolah->insert($data, 'sktmasekolah');
		$this->session->set_flashdata('succes_save_surat', '<div class="alert alert-primary alert-dismissible fade show" role="alert"><strong>Data sudah berhasil di tambahkan</strong><button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button></div>');
		redirect('C_SKTMASekolah');
	}

	function Print($Id_SKTMASekolah)
	{
		$where = array('Id_SKTMASekolah' => $Id_SKTMASekolah);
		$data['sktmasekolah'] = $this->M_SKTMASekolah->Print($where, 'sktmasekolah')->result();
		$this->load->view('SKTMASekolah/P_SKTMASekolah', $data);
	}

	function Edit($Id_SKTMASekolah)
	{
		$where = array('Id_SKTMASekolah' => $Id_SKTMASekolah);
		$data['sktmasekolah'] = $this->M_SKTMASekolah->Edit($where, 'sktmasekolah')->result();
		$this->load->view('Template/Header');
		$this->load->view('Template/Navbar');
		$this->load->view('SKTMASekolah/E_SKTMASekolah', $data);
		$this->load->view('Template/Created');
		$this->load->view('Template/Footer');
	}

	function Update()
	{
		$Id_SKTMASekolah = $this->input->post('Id_SKTMASekolah');
		$No_SKTMASekolah = $this->input->post('No_SKTMASekolah');
		$Jenis_Surat	= "SKTM Anak Sekolah";
		$Nama_Ortu = $this->input->post('Nama_Ortu');
		$Tempat_Lahir_Ortu = $this->input->post('Tempat_Lahir_Ortu');
		$Tanggal_Lahir_Ortu = $this->input->post('Tanggal_Lahir_Ortu');
		$Agama_Ortu = $this->input->post('Agama_Ortu');
		$Pekerjaan_Ortu = $this->input->post('Pekerjaan_Ortu');
		$Alamat_Ortu = $this->input->post('Alamat_Ortu');
		$NIK_Ortu = $this->input->post('NIK_Ortu');
		$Nama_Anak = $this->input->post('Nama_Anak');
		$Tempat_Lahir_Anak = $this->input->post('Tempat_Lahir_Anak');
		$Tanggal_Lahir_Anak = $this->input->post('Tanggal_Lahir_Anak');
		$Jenis_Kelamin_Anak = $this->input->post('Jenis_Kelamin_Anak');
		$Agama_Anak = $this->input->post('Agama_Anak');
		$Pekerjaan_Anak = $this->input->post('Pekerjaan_Anak');
		$Alamat_Anak = $this->input->post('Alamat_Anak');
		$NIK_Anak = $this->input->post('NIK_Anak');
		$Tgl_Surat = $this->input->post('Tgl_Surat');
		$Nama_KepalaDesa = $this->input->post('Nama_KepalaDesa');

		$data = array(
			'Id_SKTMASekolah'		=> $Id_SKTMASekolah,
			'No_SKTMASekolah'   	=> $No_SKTMASekolah,
			'Nama_Ortu'    			=> $Nama_Ortu,
			'Tempat_Lahir_Ortu'     => $Tempat_Lahir_Ortu,
			'Tanggal_Lahir_Ortu'    => $Tanggal_Lahir_Ortu,
			'Agama_Ortu'			=> $Agama_Ortu,
			'Pekerjaan_Ortu'		=> $Pekerjaan_Ortu,
			'Alamat_Ortu'    		=> $Alamat_Ortu,
			'NIK_Ortu'   			=> $NIK_Ortu,
			'Nama_Anak'    			=> $Nama_Anak,
			'Tempat_Lahir_Anak'    	=> $Tempat_Lahir_Anak,
			'Tanggal_Lahir_Anak'    => $Tanggal_Lahir_Anak,
			'Jenis_Kelamin_Anak'    => $Jenis_Kelamin_Anak,
			'Agama_Anak'			=> $Agama_Anak,
			'Pekerjaan_Anak'		=> $Pekerjaan_Anak,
			'Alamat_Anak'    		=> $Alamat_Anak,
			'NIK_Anak'   			=> $NIK_Anak,
			'Tgl_Surat'     		=> $Tgl_Surat,
			'Nama_KepalaDesa'   	=> $Nama_KepalaDesa
		);

		$dataSK = array(
			'Id_Surat'		=> $Id_SKTMASekolah,
			'Tgl_Surat' 	=> $Tgl_Surat,
			'No_Surat'		=> $No_SKTMASekolah,
			'Jenis_Surat'	=> $Jenis_Surat,
			'Nama_Pengaju'	=> $Nama_Anak,
			'TTL'			=> $Tempat_Lahir_Anak . "," . $Tanggal_Lahir_Anak,
			'Pekerjaan'		=> $Pekerjaan_Anak,
			'Alamat'		=> $Alamat_Anak . " Desa Gandasoli Kec. Tanjungsiang"
		);
		$whereSK = array(
			'Id_Surat' => $Id_SKTMASekolah
		);


		$where = array(
			'Id_SKTMASekolah' => $Id_SKTMASekolah
		);

		$this->M_SKTMASekolah->Update($where, $data, 'sktmasekolah');
		$this->M_SKeluar->Update_SK($whereSK, $dataSK, 'suratkeluar');
		$this->session->set_flashdata('succes_save_surat', '<div class="alert alert-primary alert-dismissible fade show" role="alert"><strong>Data sudah berhasil di ubah</strong><button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button></div>');
		redirect('C_SKTMASekolah');
	}

	function Delete($Id_SKTMASekolah)
	{
		$where = array('Id_SKTMASekolah' => $Id_SKTMASekolah);
		$SK = array('Id_Surat' => $Id_SKTMASekolah);
		$this->M_SKeluar->Delete_SK($SK, 'suratkeluar');
		$this->M_SKTMASekolah->Delete($where, 'sktmasekolah');
		$this->session->set_flashdata('succes_save_surat', '<div class="alert alert-primary alert-dismissible fade show" role="alert"><strong>Data sudah berhasil di hapus</strong><button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button></div>');
		redirect('C_SKTMASekolah');
	}
}
