<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Listing_sale_property_m extends CI_Model {

	public function fetch_sale_property()
	{
		$this->db->select('*');
		$this->db->from('property_sale');
		$query = $this->db->get();
		return $query->result();
	}
	public function delete_prop_sale_id($del_sale_id){
		$this->db->where('property_sale_id', $del_sale_id);
		$this->db->delete('property_sale');
		return true;
	}

}

/* End of file Listing_sale_property_m.php */
/* Location: ./application/models/Listing_sale_property_m.php */