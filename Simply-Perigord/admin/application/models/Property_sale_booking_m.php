<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Property_sale_booking_m extends CI_Model {

	public function all_bookings(){
		$this->db->Select('*');
		$this->db->from('booking_holiday_rental');
		$query = $this->db->get();
		return $query->result();
	}
	public function user_info($user_id){
		$this->db->Select('*');
		$this->db->from('user');
		$this->db->where('user_id',$user_id);
		$query = $this->db->get();
		return $query->row();
	}
	public function sale_property_info($property_sale_id){
		$this->db->Select('*');
		$this->db->from('holiday_rental');
		$this->db->where('holiday_rental_id',$property_sale_id);
		$query = $this->db->get();
		return $query->row();
	}

}

/* End of file Property_sale_booking_m.php */
/* Location: ./application/models/Property_sale_booking_m.php */