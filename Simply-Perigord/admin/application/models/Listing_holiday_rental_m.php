<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Listing_holiday_rental_m extends CI_Model {

	public function fetch_rental_property()
	{
		$this->db->select('*');
		$this->db->from('holiday_rental');
		$query = $this->db->get();
		return $query->result();
	}
	public function delete_rental_id($del_sale_id){
		$this->db->where('holiday_rental_id', $del_sale_id);
		$this->db->delete('holiday_rental');
		return true;
	}

}

/* End of file Listing_holiday_rental_m.php */
/* Location: ./application/models/Listing_holiday_rental_m.php */