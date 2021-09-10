<?php

class  M_SMasuk extends CI_Model
{

    public function cekIdSurat()
    {
        $query = $this->db->query("SELECT MAX(Id_SMasuk) as Id_SMasuk from suratmasuk");
        $hasil = $query->row();
        return $hasil->Id_SMasuk;
    }

    function tampil_data()
    {
        return $this->db->get('suratmasuk');
    }

    public function insert($data)
    {
        $this->db->insert('suratmasuk', $data);
        return TRUE;
    }

    function Edit($where, $table)
    {
        return $this->db->get_where($table, $where);
    }

    public function Update($data, $kondisi)
    {
        $this->db->update('suratmasuk', $data, $kondisi);
        return TRUE;
    }
    public function update_smasuk_noimage($Id_SMasuk, $Tgl_Penerimaan, $No_SMasuk, $Tanggal, $Pengirim, $IsiSingkat)
    {
        $hsl = $this->db->query("update suratmasuk set Tgl_Penerimaan='$Tgl_Penerimaan', No_SMasuk='$No_SMasuk',Tanggal='$Tanggal',Pengirim='$Pengirim',IsiSingkat='$IsiSingkat' where Id_SMasuk='$Id_SMasuk'");
        return $hsl;
    }

    function Delete($where, $table)
    {
        $this->db->where($where);
        $this->db->delete($table);
    }
}
