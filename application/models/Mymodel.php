<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Mymodel extends CI_Model {

	public function query($query)
	{
		return $this->db->query($query)->result_array();
	}

	public function read($tb)
	{
		$res = $this->db->get($tb)->result_array();
		return $res;
	}

	public function get_where($tb, $where)
	{
		$res = $this->db->get_where($tb, $where)->result_array();
		return $res;
	}

	public function create_tb($tb, $data)
	{
		$res = $this->db->insert($tb, $data);
		return $res;
	}

	public function update_tb($tb, $data, $where)
	{
		$res = $this->db->update($tb, $data, $where);
		return $res;
	}

	public function delete_tb($tb, $where)
	{
		$res = $this->db->delete($tb, $where);
		return $res;
	}
}
