<?php 

class M_PJSurat extends CI_Model{

    public function cekIdSurat()
    {
        $query = $this->db->query("SELECT MAX(Id_Surat) as Id_Surat from suratkeluar");
        $hasil = $query->row();
        return $hasil->Id_Surat;
    }


}