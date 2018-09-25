<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Add_holiday_rental_m extends CI_Model {

	public function add_new_rental_table($records)
	{
		$this->db->insert('holiday_rental', $records);
		return $this->db->insert_id();
	}

	public function add_new_rental_image_table($data)
	{
		$this->db->insert('holiday_rental_images', $data);
		return true;
	}

	public function fetch_seasons(){
		$this->db->select('*');
		$this->db->from('season');
		$query = $this->db->get();
		return $query->result();
	}

	public function get_location(){
		$this->db->select('*');
		$this->db->from('location');
		$query = $this->db->get();
		return $query->result();
	}

}

/* End of file Add_holiday_rental_m.php */
/* Location: ./application/models/Add_holiday_rental_m.php */