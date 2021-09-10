<?php 

class M_Pengguna extends CI_Model{
	function tampil_data_pengguna(){
		return $this->db->get('pengguna'); 
	}

	// public function insert_pengguna($data)
 //  	{
 //      $this->db->insert('pengguna',$data);
 //      return TRUE;
 //  	}

  	function edit_data_pengguna($where,$table){    
  	return $this->db->get_where($table,$where);
  	}

  	public function update_pengguna($data,$kondisi)
  	{
      $this->db->update('pengguna',$data,$kondisi);
      return TRUE;
  	}
    public function update_pengguna_noimage($Id_Pengguna, $Nama_Pengguna, $Email, $Jenis_Kelamin, $username, $password, $RetryPassword, $Kontak)
    {
      $hsl=$this->db->query("update pengguna set Nama_Pengguna='$Nama_Pengguna',Email='$Email',Jenis_Kelamin='$Jenis_Kelamin',username='$username',password='$password',RetryPassword='$RetryPassword',Kontak='$Kontak' where Id_Pengguna='$Id_Pengguna'");
    return $hsl;
    }

  	// public function delete_pengguna($where)
  	// {
   //    $this->db->where($where);
   //    $this->db->delete('pengguna');
   //    return TRUE;
  	// }
}