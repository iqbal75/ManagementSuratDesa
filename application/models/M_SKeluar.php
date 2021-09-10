<?php

class  M_SKeluar extends CI_Model
{

    function tampil_data()
    {
        return $this->db->get('suratkeluar');
    }

    function Edit($where, $table)
    {
        return $this->db->get_where($table, $where);
    }

    function insert_SK($dataSK, $table)
    {
        $this->db->insert($table, $dataSK);
    }
    function Update_SK($whereSK, $dataSK, $table)
    {
        $this->db->where($whereSK);
        $this->db->update($table, $dataSK);
    }
    function Delete_SK($SK, $table)
    {
        $this->db->where($SK);
        $this->db->delete($table);
    }
}
