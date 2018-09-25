<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Listing_sale_property_m extends CI_Model {

	public function fetch_sale_property()
	{
		$this->db->select('*');
		$this->db->from('holiday_rental');
		$this->db->where('property_type', 'sale');
		$query = $this->db->get();
		return $query->result();
	}
	public function delete_prop_sale_id($del_sale_id){
		$this->db->where('holiday_rental_id', $del_sale_id);
		$this->db->delete('holiday_rental');
		return true;
	}

}

/* End of file Listing_sale_property_m.php */
/* Location: ./application/models/Listing_sale_property_m.php */