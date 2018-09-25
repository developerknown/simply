<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Add_location_m extends CI_Model {

	public function add_new_location_table($records){
		$this->db->insert('location', $records);
		return $this->db->insert_id();
	}

}

/* End of file Add_season_m.php */
/* Location: ./application/models/Add_season_m.php */