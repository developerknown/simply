<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Footer_m extends CI_Model {

	public function fetch_footer(){
		  $this->db->select('*');
		  $this->db->from('about');
		  $query = $this->db->get();
		  return $query->row();
	}

}

/* End of file Edit_supplier_m.php */
/* Location: ./application/models/Edit_supplier_m.php */