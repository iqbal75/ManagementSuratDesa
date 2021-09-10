<?php 

class M_SJalan extends CI_Model{

	function tampil_data(){
		return $this->db->get('sjalan');  
	}
	function tampil_data_SK(){
		return $this->db->get('suratkeluar');  
	}

	

	function insert($data,$table){
		$this->db->insert($table,$data);
	}

	function insert_SK($data,$table){
		$this->db->insert($table,$data);
	}

	function Print($where, $table){
		return $this->db->get_where($table,$where);
	}

	function Edit($where,$table){
		return $this->db->get_where($table,$where);
	}

	function Update($where,$data,$table){
		$this->db->where($where);
		$this->db->update($table,$data);
	}

	function Update_SK($whereSK,$dataSK,$table){
		$this->db->where($whereSK);
		$this->db->update($table,$dataSK);
	}

	function Delete($where,$table){
	  $this->db->where($where);
	  $this->db->delete($table);
	}

	function Delete_SK($SK,$table){
	  $this->db->where($SK);
	  $this->db->delete($table);
	}

	function simpan($Id_Sjalan, $No_Sjalan, $Nama, $Tempat_Lahir, $Tanggal_Lahir, $Pekerjaan, $Alamat2, $Jenis_Kendaraan, $No_Polisi, $No_Rangka, $AtasNama_Mobil, $Tujuan, $Barang_Bawaan, $Tgl_Surat, $Nama_KepalaDesa){
		$hsl=$this->db->query("INSERT INTO sjalan (Id_Sjalan, No_Sjalan, Nama, Tempat_Lahir, Tanggal_Lahir, Pekerjaan, Alamat, Jenis_Kendaraan, No_Polisi, No_Rangka, AtasNama_Mobil, Tujuan, Barang_Bawaan, Tgl_Surat, Nama_KepalaDesa) VALUES ('$Id_Sjalan', '$No_Sjalan', '$Nama', '$Tempat_Lahir', '$Tanggal_Lahir', '$Pekerjaan', '$Alamat2', '$Jenis_Kendaraan', '$No_Polisi', '$No_Rangka', '$AtasNama_Mobil', '$Tujuan', '$Barang_Bawaan', '$Tgl_Surat', '$Nama_KepalaDesa')");
		return $hsl;
	}

	function simpan_SK($Id_Sjalan, $Tgl_Surat, $No_Sjalan, $Jenis_Surat, $Nama, $TTL, $Pekerjaan, $Alamat){
		$hsl=$this->db->query("INSERT INTO suratkeluar (Id_Surat, Tgl_Surat, No_Surat, Jenis_Surat, Nama_Pengaju, TTL, Pekerjaan, Alamat) VALUES ('$Id_Sjalan', '$Tgl_Surat', '$No_Sjalan', '$Jenis_Surat', '$Nama', '$TTL', '$Pekerjaan', '$Alamat')");
		return $hsl;
	}
} 