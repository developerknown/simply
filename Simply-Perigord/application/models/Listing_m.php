<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Listing_m extends CI_Model {

	public function fetch_property(){
		  $condition = array();
		  $this->db->select('*');
		  $this->db->from('holiday_rental');
		  $this->db->join('holiday_rental_images','holiday_rental_images.holiday_rental_id = holiday_rental.holiday_rental_id');
		  $this->db->where($condition);
		  $query = $this->db->get();
		  return $query->result();
	}

	public function fetch_locations(){
		$condition = array();
		$this->db->select("*");
		$this->db->from("location");
		$this->db->where($condition);
		$query = $this->db->get();
		return $query->result();
	}

}

/* End of file Edit_supplier_m.php */
/* Location: ./application/models/Edit_supplier_m.php */