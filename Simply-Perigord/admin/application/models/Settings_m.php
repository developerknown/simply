<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Settings_m extends CI_Model {
	public function updte_pass($records,$user_id)
	{
		$condition  = array('user_id' => $user_id);
		$this->db->where($condition);
		$query = $this->db->update('user', $records);
		return $query;
	}
}

/* End of file Edit_holiday_rental_m.php */
/* Location: ./application/models/Edit_holiday_rental_m.php */