<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Listing_season_m extends CI_Model {

	public function fetch_season()
	{
		$this->db->select('*');
		$this->db->from('season');
		$query = $this->db->get();
		return $query->result();
	}

	public function del_seson_id($del_season_id){
		$this->db->where('season_id', $del_season_id);
		$this->db->delete('season');
		return true;
	}

}

/* End of file Listing_season_m.php */
/* Location: ./application/controllers/Listing_season_m.php */