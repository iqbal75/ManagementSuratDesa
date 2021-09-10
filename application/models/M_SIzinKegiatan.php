<?php

class M_SIzinKegiatan extends CI_Model
{

	function tampil_data()
	{
		return $this->db->get('sizinkegiatan');
	}

	function insert($data, $table)
	{
		$this->db->insert($table, $data);
	}

	function Print($where, $table)
	{
		return $this->db->get_where($table, $where);
	}

	function Edit($where, $table)
	{
		return $this->db->get_where($table, $where);
	}
	function Edit_SK($where_SK, $table)
	{
		return $this->db->get_where($table, $where_SK);
	}

	function Update($where, $data, $table)
	{
		$this->db->where($where);
		$this->db->update($table, $data);
	}

	function Delete($where, $table)
	{
		$this->db->where($where);
		$this->db->delete($table);
	}
}
