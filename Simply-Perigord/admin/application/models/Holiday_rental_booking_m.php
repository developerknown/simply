<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Holiday_rental_booking_m extends CI_Model {

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
	public function rental_property_info($holiday_rental_id){
		$this->db->Select('*');
		$this->db->from('holiday_rental');
		$this->db->where('holiday_rental_id',$holiday_rental_id);
		$query = $this->db->get();
		return $query->row();
	}

}

/* End of file Holiday_rental_booking_m.php */
/* Location: ./application/models/Holiday_rental_booking_m.php */