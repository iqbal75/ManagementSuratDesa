<?php 

class M_login extends CI_Model{	
	function cek_login($table,$where){		
		return $this->db->get_where($table,$where);
	}

	
	public function get($username){
        $this->db->where('username', $username); // Untuk menambahkan Where Clause : username='$username'

        $result = $this->db->get('pengguna')->row(); // Untuk mengeksekusi dan mengambil data hasil query
        return $result;
    }
} 