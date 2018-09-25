<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Edit_season_m extends CI_Model {

	public function fetch_season($season_id)
	{
		$this->db->select('*');
		$this->db->from('season');
		$this->db->where('season_id',$season_id);
		$query = $this->db->get();
		return $query->row();
	}

	public function update_season_table($records,$season_id)
	{
		$condition  = array('season_id' => $season_id);
		$this->db->where($condition);
		$query = $this->db->update('season', $records);
		return $query;
	}

}

/* End of file Edit_solution_m.php */
/* Location: ./application/models/Edit_solution_m.php */