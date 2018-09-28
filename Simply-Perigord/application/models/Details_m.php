<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Details_m extends CI_Model {

	public function fetch_prodetails($property_id){
		  $condition = array('holiday_rental.holiday_rental_id' => $property_id);
		  $this->db->select('*');
		  $this->db->from('holiday_rental');
		  $this->db->where($condition);
		  $query = $this->db->get();
		  return $query->row();
	}

	public function fetch_imgdetails($property_id){
		  $condition = array('holiday_rental.holiday_rental_id' => $property_id);
		  $this->db->select('*');
		  $this->db->from('holiday_rental');
		  $this->db->where($condition);
		  $query = $this->db->get();
		  return $query->row();
	}

}

/* End of file Edit_supplier_m.php */
/* Location: ./application/models/Edit_supplier_m.php */