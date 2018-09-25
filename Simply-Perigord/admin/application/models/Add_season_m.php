<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Add_season_m extends CI_Model {

	public function add_new_season_table($records){
		$this->db->insert('season', $records);
		return $this->db->insert_id();
	}

}

/* End of file Add_season_m.php */
/* Location: ./application/models/Add_season_m.php */