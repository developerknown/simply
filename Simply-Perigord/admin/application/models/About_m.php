<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class About_m extends CI_Model {

	public function fetch_footer_data()
	{
		$this->db->select('*');
		$this->db->from('about');
		$query = $this->db->get();
		return $query->row();
	}
	public function updte_fttr_info($records)
	{
		$query = $this->db->update('about', $records);
		return $query;
	}
}

/* End of file Edit_holiday_rental_m.php */
/* Location: ./application/models/Edit_holiday_rental_m.php */