<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login_m extends CI_Model {

	public function login_function($records)
	{
		$condition = "email =" . "'" . $records['email'] . "' AND " . "password =" . "'" . $records['password'] . "'AND " . "status =" ."'". '1' ."'";
		$this->db->select('*');
		$this->db->from('user');
		$this->db->where($condition);
		$query = $this->db->get();
		return $query->num_rows();
	}

		public function get_id($records)
	{
		$condition = "email =" . "'" . $records['email'] . "' AND " . "password =" . "'" . $records['password'] . "'AND " . "Status =" ."'". '1' ."'";
		$this->db->select('*');
		$this->db->from('user');
		$this->db->where($condition);
		$query = $this->db->get();
		return $query->result();
	}


}

/* End of file Listing_season_m.php */
/* Location: ./application/controllers/Listing_season_m.php */