<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Edit_sale_property_m extends CI_Model {

	public function fetch_sale_property($sale_prop_id)
	{
		$this->db->select('*');
		$this->db->from('holiday_rental');
		$this->db->where('holiday_rental_id',$sale_prop_id);
		$this->db->where('property_type','sale');
		$query = $this->db->get();
		return $query->row();
	}

	public function update_property_sale_table($records,$sale_prop_id)
	{
		$condition  = array('holiday_rental_id' => $sale_prop_id);
		$this->db->where($condition);
		$query = $this->db->update('holiday_rental', $records);
		return $query;
	}

	public function fetch_property_sale_images($prop_id)
	{
		$this->db->select('*');
		$this->db->from('holiday_rental_images');
		$this->db->where('holiday_rental_id',$prop_id);
		$query = $this->db->get();
		return $query->result();
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

	public function img_dlt($image_id)
	{
		$this->db->where('holiday_rental_image_id', $image_id);
		$this->db->delete('holiday_rental_images');
		return true;
	}

	public function get_location(){
		$this->db->select('*');
		$this->db->from('location');
		$query = $this->db->get();
		return $query->result();
	}

}

/* End of file edit_sale_property_m.php */
/* Location: ./application/models/edit_sale_property_m.php */