<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Listing_location_m extends CI_Model {

	public function fetch_location()
	{
		$this->db->select('*');
		$this->db->from('location');
		$query = $this->db->get();
		return $query->result();
	}

	public function del_location($del_season_id){
		$this->db->where('location_id', $del_season_id);
		$this->db->delete('location');
		return true;
	}

}

/* End of file Listing_season_m.php */
/* Location: ./application/controllers/Listing_season_m.php */