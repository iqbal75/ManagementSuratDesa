<?php

class C_SKelahiran extends CI_Controller
{

	function __construct()
	{

		parent::__construct();
		if ($this->session->userdata('status') != "login") {
			redirect(base_url("Login"));
		}
		$this->load->library('session');
		$this->load->helper(array('form', 'url'));
		$this->load->model('M_SKelahiran');
		$this->load->model('M_SKeluar');
	}

	function index()
	{
		$data['skelahiran'] = $this->M_SKelahiran->tampil_data()->result();
		$this->load->view('Template/Header');
		$this->load->view('Template/Navbar');
		$this->load->view('SKelahiran/T_SKelahiran', $data);
		$this->load->view('Template/Created');
		$this->load->view('Template/Footer');
	}

	function Upload()
	{
		$Id_SKelahiran = $this->input->post('Id_SKelahiran');
		$No_SKelahiran = $this->input->post('No_SKelahiran');
		$Jenis_Surat = "Surat Kelahiran";
		$Hari_LahirAnak = $this->input->post('Hari_LahirAnak');
		$Tgl_LahirAnak = $this->input->post('Tgl_LahirAnak');
		$Tempat_LahirAnak = $this->input->post('Tempat_LahirAnak');
		$Jenis_KelaminAnak = $this->input->post('Jenis_KelaminAnak');
		$Nama_Anak = $this->input->post('Nama_Anak');
		$Nama_Ibu = $this->input->post('Nama_Ibu');
		$NIK_Ibu = $this->input->post('NIK_Ibu');
		$Jenis_KelaminIbu = $this->input->post('Jenis_KelaminIbu');
		$Tempat_LahirIbu = $this->input->post('Tempat_LahirIbu');
		$Tanggal_LahirIbu = $this->input->post('Tanggal_LahirIbu');
		$Agama_Ibu = $this->input->post('Agama_Ibu');
		$Pekerjaan_Ibu = $this->input->post('Pekerjaan_Ibu');
		$Alamat_Ibu = "Kp. " . $this->input->post('Kp_Ibu') . " Rt. " . $this->input->post('Rt_Ibu') . " Rw. " . $this->input->post('Rw_Ibu');
		$Nama_Pelapor = $this->input->post('Nama_Pelapor');
		$Umur_Pelapor = $this->input->post('Umur_Pelapor');
		$Pekerjaan_Pelapor = $this->input->post('Pekerjaan_Pelapor');
		$Tempat_Lahir_Pelapor = $this->input->post('Tempat_Lahir_Pelapor');
		$Tanggal_Lahir_Pelapor = $this->input->post('Tanggal_Lahir_Pelapor');
		$Alamat_Pelapor = "Kp. " . $this->input->post('Kp_Pelapor') . " Rt. " . $this->input->post('Rt_Pelapor') . " Rw. " . $this->input->post('Rw_Pelapor');
		$Tgl_Surat = $this->input->post('Tgl_Surat');
		$Nama_KepalaDesa = $this->input->post('Nama_KepalaDesa');


		$data = array(
			'$Id_SKelahiran' 		=> $Id_SKelahiran,
			'$No_SKelahiran' 		=> $No_SKelahiran,
			'$Hari_LahirAnak' 		=> $Hari_LahirAnak,
			'$Tgl_LahirAnak' 		=> $Tgl_LahirAnak,
			'$Tempat_LahirAnak' 	=> $Tempat_LahirAnak,
			'$Jenis_KelaminAnak' 	=> $Jenis_KelaminAnak,
			'$Nama_Anak'  			=> $Nama_Anak,
			'$Nama_Ibu' 			=> $Nama_Ibu,
			'$NIK_Ibu' 				=> $NIK_Ibu,
			'$Jenis_KelaminIbu' 	=> $Jenis_KelaminIbu,
			'$Tempat_LahirIbu' 		=> $Tempat_LahirIbu,
			'$Tanggal_LahirIbu' 	=> $Tanggal_LahirIbu,
			'$Agama_Ibu' 			=> $Agama_Ibu,
			'$Pekerjaan_Ibu' 		=> $Pekerjaan_Ibu,
			'$Alamat_Ibu' 			=> $Alamat_Ibu,
			'$Nama_Pelapor' 		=> $Nama_Pelapor,
			'$Umur_Pelapor' 		=> $Umur_Pelapor,
			'$Pekerjaan_Pelapor' 	=> $Pekerjaan_Pelapor,
			'$Alamat_Pelapor' 		=> $Alamat_Pelapor,
			'$Tgl_Surat' 			=> $Tgl_Surat,
			'$Nama_KepalaDesa' 		=> $Nama_KepalaDesa
		);

		$dataSK = array(
			'Id_Surat'		=> $Id_SKelahiran,
			'Tgl_Surat' 	=> $Tgl_Surat,
			'No_Surat'		=> $No_SKelahiran,
			'Jenis_Surat'	=> $Jenis_Surat,
			'Nama_Pengaju'	=> $Nama_Pelapor,
			'TTL'			=> $Tempat_Lahir_Pelapor . "," . $Tanggal_Lahir_Pelapor,
			'Pekerjaan'		=> $Pekerjaan_Pelapor,
			'Alamat'		=> $Alamat_Pelapor . " Desa Gandasoli Kec. Tanjungsiang"
		);
		$this->M_SKeluar->insert_SK($dataSK, 'suratkeluar');

		$this->M_SKelahiran->simpan($Id_SKelahiran, $No_SKelahiran, $Hari_LahirAnak, $Tgl_LahirAnak, $Tempat_LahirAnak, $Jenis_KelaminAnak, $Nama_Anak, $Nama_Ibu, $NIK_Ibu, $Jenis_KelaminIbu, $Tempat_LahirIbu, $Tanggal_LahirIbu, $Agama_Ibu, $Pekerjaan_Ibu, $Alamat_Ibu, $Nama_Pelapor, $Umur_Pelapor, $Pekerjaan_Pelapor, $Alamat_Pelapor, $Tgl_Surat, $Nama_KepalaDesa);

		// $this->M_SKelahiran->insert($data, 'skelahiran');
		$this->session->set_flashdata('succes_save_surat', '<div class="alert alert-primary alert-dismissible fade show" role="alert"><strong>Data sudah berhasil di tambahkan</strong><button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button></div>');
		redirect('C_SKelahiran');
	}

	function Print($Id_SKelahiran)
	{
		// $where = array('$Id_SKelahiran' => $Id_SKelahiran);
		// $data['skelahiran'] = $this->M_SKelahiran->Print($where, 'skelahiran')->result();
		$data['skelahiran'] = $this->M_SKelahiran->Print($Id_SKelahiran);
		$this->load->view('SKelahiran/P_SKelahiran', $data);
	}

	function Edit($Id_SKelahiran)
	{
		$where_SK = array('Id_Surat' => $Id_SKelahiran);
		$data['suratkeluar'] = $this->M_SKelahiran->Edit_SK($where_SK, 'suratkeluar')->result();
		$data['skelahiran'] = $this->M_SKelahiran->Detail($Id_SKelahiran);
		$this->load->view('Template/Header');
		$this->load->view('Template/Navbar');
		$this->load->view('SKelahiran/E_SKelahiran', $data);
		$this->load->view('Template/Created');
		$this->load->view('Template/Footer');
	}

	function Update()
	{
		$Id_SKelahiran = $this->input->post('Id_SKelahiran');
		$Jenis_Surat = "Surat Kelahiran";
		$No_SKelahiran = $this->input->post('No_SKelahiran');
		$Hari_LahirAnak = $this->input->post('Hari_LahirAnak');
		$Tgl_LahirAnak = $this->input->post('Tgl_LahirAnak');
		$Tempat_LahirAnak = $this->input->post('Tempat_LahirAnak');
		$Jenis_KelaminAnak = $this->input->post('Jenis_KelaminAnak');
		$Nama_Anak = $this->input->post('Nama_Anak');
		$Nama_Ibu = $this->input->post('Nama_Ibu');
		$NIK_Ibu = $this->input->post('NIK_Ibu');
		$Jenis_KelaminIbu = $this->input->post('Jenis_KelaminIbu');
		$Tempat_LahirIbu = $this->input->post('Tempat_LahirIbu');
		$Tanggal_LahirIbu = $this->input->post('Tanggal_LahirIbu');
		$Agama_Ibu = $this->input->post('Agama_Ibu');
		$Pekerjaan_Ibu = $this->input->post('Pekerjaan_Ibu');
		$Alamat_Ibu = $this->input->post('Alamat_Ibu');
		$Nama_Pelapor = $this->input->post('Nama_Pelapor');
		$Umur_Pelapor = $this->input->post('Umur_Pelapor');
		$Pekerjaan_Pelapor = $this->input->post('Pekerjaan_Pelapor');
		$Tempat_Lahir_Pelapor = $this->input->post('Tempat_Lahir_Pelapor');
		$Tanggal_Lahir_Pelapor = $this->input->post('Tanggal_Lahir_Pelapor');
		$Alamat_Pelapor = $this->input->post('Alamat_Pelapor');
		$Tgl_Surat = $this->input->post('Tgl_Surat');
		$Nama_KepalaDesa = $this->input->post('Nama_KepalaDesa');


		$data = array(
			'Id_SKelahiran' 		=> $Id_SKelahiran,
			'No_SKelahiran' 		=> $No_SKelahiran,
			'Hari_LahirAnak' 		=> $Hari_LahirAnak,
			'Tgl_LahirAnak' 		=> $Tgl_LahirAnak,
			'Tempat_LahirAnak' 		=> $Tempat_LahirAnak,
			'Jenis_KelaminAnak' 	=> $Jenis_KelaminAnak,
			'Nama_Anak'  			=> $Nama_Anak,
			'Nama_Ibu' 				=> $Nama_Ibu,
			'NIK_Ibu' 				=> $NIK_Ibu,
			'Jenis_KelaminIbu' 		=> $Jenis_KelaminIbu,
			'Tempat_LahirIbu' 		=> $Tempat_LahirIbu,
			'Tanggal_LahirIbu' 		=> $Tanggal_LahirIbu,
			'Agama_Ibu' 			=> $Agama_Ibu,
			'Pekerjaan_Ibu' 		=> $Pekerjaan_Ibu,
			'Alamat_Ibu' 			=> $Alamat_Ibu,
			'Nama_Pelapor' 			=> $Nama_Pelapor,
			'Umur_Pelapor' 			=> $Umur_Pelapor,
			'Pekerjaan_Pelapor' 	=> $Pekerjaan_Pelapor,
			'Alamat_Pelapor' 		=> $Alamat_Pelapor,
			'Tgl_Surat' 			=> $Tgl_Surat,
			'Nama_KepalaDesa' 		=> $Nama_KepalaDesa
		);

		$dataSK = array(
			'Id_Surat'		=> $Id_SKelahiran,
			'Tgl_Surat' 	=> $Tgl_Surat,
			'No_Surat'		=> $No_SKelahiran,
			'Jenis_Surat'	=> $Jenis_Surat,
			'Nama_Pengaju'	=> $Nama_Pelapor,
			'TTL'			=> $Tempat_Lahir_Pelapor . "," . $Tanggal_Lahir_Pelapor,
			'Pekerjaan'		=> $Pekerjaan_Pelapor,
			'Alamat'		=> $Alamat_Pelapor . " Desa Gandasoli Kec. Tanjungsiang"
		);
		$whereSK = array(
			'Id_Surat' => $Id_SKelahiran
		);
		$this->M_SKeluar->Update_SK($whereSK, $dataSK, 'suratkeluar');
		$this->M_SKelahiran->Update($data, $Id_SKelahiran);


		$this->session->set_flashdata('succes_save_data', '<div class="alert alert-primary alert-dismissible fade show" role="alert"><strong>Data sudah berhasil di ubah</strong><button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button></div>');
		redirect('C_SKelahiran');
	}

	function Delete($Id_SKelahiran)
	{
		$where = array('Id_SKelahiran' => $Id_SKelahiran);
		$this->M_SKelahiran->Delete($where, 'skelahiran');
		$SK = array('Id_Surat' => $Id_SKelahiran);
		$this->M_SKeluar->Delete_SK($SK, 'suratkeluar');
		$this->session->set_flashdata('succes_save_surat', '<div class="alert alert-primary alert-dismissible fade show" role="alert"><strong>Data sudah berhasil di hapus</strong><button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button></div>');
		redirect('C_SKelahiran');
	}
}
