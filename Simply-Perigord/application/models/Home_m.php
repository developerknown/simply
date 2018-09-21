<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home_m extends CI_Model {

	public function fetch_property($type){
		  $condition = array('user_id'=> $user_id , 'user_type' => 'Supplier');
		  $this->db->select('*');
		  $this->db->from('holiday_rental');
		  $this->db->where($condition);
		  $query = $this->db->get();
		  return $query->row();
	}

}

/* End of file Edit_supplier_m.php */
/* Location: ./application/models/Edit_supplier_m.php */