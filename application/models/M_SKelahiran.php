<?php

class M_SKelahiran extends CI_Model
{

	private $table = "skelahiran";

	function tampil_data()
	{
		return $this->db->get('skelahiran');
	}

	function insert($data, $table)
	{
		$this->db->insert($table, $data);
	}

	function Print($Id_Skelahiran)
	{
		return $this->db->get_where('skelahiran', ["Id_Skelahiran" => $Id_Skelahiran])->result();
	}

	// function Edit($where,$table){
	// 	return $this->db->get_where($table,$where);
	// }

	function Edit_SK($where_SK, $table)
	{
		return $this->db->get_where($table, $where_SK);
	}

	function Update($data, $Id_SKelahiran)
	{
		return $this->db->update('skelahiran', $data, ['Id_SKelahiran' => $Id_SKelahiran]);
	}

	function Delete($where, $table)
	{
		$this->db->where($where);
		$this->db->delete($table);
	}

	function simpan($Id_SKelahiran, $No_SKelahiran, $Hari_LahirAnak, $Tgl_LahirAnak, $Tempat_LahirAnak, $Jenis_KelaminAnak, $Nama_Anak, $Nama_Ibu, $NIK_Ibu, $Jenis_KelaminIbu, $Tempat_LahirIbu, $Tanggal_LahirIbu, $Agama_Ibu, $Pekerjaan_Ibu, $Alamat_Ibu, $Nama_Pelapor, $Umur_Pelapor, $Pekerjaan_Pelapor, $Alamat_Pelapor, $Tgl_Surat, $Nama_KepalaDesa)
	{
		$hsl = $this->db->query("INSERT INTO skelahiran (Id_SKelahiran,No_SKelahiran,Hari_LahirAnak,Tgl_LahirAnak,Tempat_LahirAnak,Jenis_KelaminAnak,Nama_Anak,Nama_Ibu,NIK_Ibu,Jenis_KelaminIbu,Tempat_LahirIbu,Tanggal_LahirIbu,Agama_Ibu,Pekerjaan_Ibu,Alamat_Ibu,Nama_Pelapor,Umur_Pelapor,Pekerjaan_Pelapor,Alamat_Pelapor,Tgl_Surat,Nama_KepalaDesa) VALUES ('$No_SKelahiran','$Hari_LahirAnak','$Tgl_LahirAnak','$Tempat_LahirAnak','$Jenis_KelaminAnak','$Nama_Anak','$Nama_Ibu','$NIK_Ibu','$Jenis_KelaminIbu','$Tempat_LahirIbu','$Tanggal_LahirIbu','$Agama_Ibu','$Pekerjaan_Ibu','$Alamat_Ibu','$Nama_Pelapor','$Umur_Pelapor','$Pekerjaan_Pelapor','$Alamat_Pelapor','$Tgl_Surat','$Nama_KepalaDesa')");
		return $hsl;
	}

	function Detail($Id_Skelahiran)
	{
		// $hsl=$this->db->query("SELECT * from skelahiran WHERE Id_Skelahiran='$Id_Skelahiran'");
		// return $hsl;
		return $this->db->get_where('skelahiran', ["Id_Skelahiran" => $Id_Skelahiran])->result();
	}
}
