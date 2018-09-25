<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Add_sale_property_m extends CI_Model {

	public function add_new_property_sale_table($records)
	{
		$this->db->insert('holiday_rental', $records);
		return $this->db->insert_id();
	}

	public function add_new_sale_image_table($data)
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

/* End of file Add_sale_property_m.php */
/* Location: ./application/models/Add_sale_property_m.php */