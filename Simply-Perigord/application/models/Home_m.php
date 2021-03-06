<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home_m extends CI_Model {

	public function fetch_property($type){
		  if($type == ""){
			$condition = array();
		  }else{
			$condition = array('property_type'=> $type);
		  }
		  
		  $this->db->select('*');
		  $this->db->from('holiday_rental');
		  $this->db->join('holiday_rental_images','holiday_rental_images.holiday_rental_id = holiday_rental.holiday_rental_id');
		  $this->db->where($condition);
		  $query = $this->db->get();
		  return $query->row();
	}

	public function fetch_property_five(){
		  $condition = array();
		  $this->db->select('*');
		  $this->db->from('holiday_rental');
		  $this->db->join('holiday_rental_images','holiday_rental_images.holiday_rental_id = holiday_rental.holiday_rental_id');
		  $this->db->where($condition);
		  $this->db->limit(5);
		  $query = $this->db->get();
		  return $query->result();
	}

}

/* End of file Edit_supplier_m.php */
/* Location: ./application/models/Edit_supplier_m.php */