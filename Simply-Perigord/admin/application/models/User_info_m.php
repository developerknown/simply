<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User_info_m extends CI_Model {

	public function user_details(){
		$this->db->Select('*');
		$this->db->from('user');
		$this->db->where('user_type','user');
		$query = $this->db->get();
		return $query->result();
	}

}

/* End of file User_info_m.php */
/* Location: ./application/models/User_info_m.php */