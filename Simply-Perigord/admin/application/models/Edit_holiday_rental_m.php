<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Edit_holiday_rental_m extends CI_Model {

	public function fetch_rental_property($rental_prop_id){
		$this->db->select('*');
		$this->db->from('holiday_rental');
		$this->db->where('holiday_rental_id',$rental_prop_id);
		$query = $this->db->get();
		return $query->row();
	}

	public function update_property_rental_table($records,$rental_prop_id)
	{
		$condition  = array('holiday_rental_id' => $rental_prop_id);
		$this->db->where($condition);
		$query = $this->db->update('holiday_rental', $records);
		return $query;
	}

	public function fetch_property_rent_images($prop_id)
	{
		$this->db->select('*');
		$this->db->from('holiday_rental_images');
		$this->db->where('holiday_rental_id',$prop_id);
		$query = $this->db->get();
		return $query->result();
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

}

/* End of file Edit_holiday_rental_m.php */
/* Location: ./application/models/Edit_holiday_rental_m.php */