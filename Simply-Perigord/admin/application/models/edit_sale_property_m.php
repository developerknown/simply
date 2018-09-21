<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Edit_sale_property_m extends CI_Model {

	public function fetch_sale_property($sale_prop_id)
	{
		$this->db->select('*');
		$this->db->from('property_sale');
		$this->db->where('property_sale_id',$sale_prop_id);
		$query = $this->db->get();
		return $query->row();
	}

	public function update_property_sale_table($records,$sale_prop_id)
	{
		$condition  = array('property_sale_id' => $sale_prop_id);
		$this->db->where($condition);
		$query = $this->db->update('property_sale', $records);
		return $query;
	}

}

/* End of file edit_sale_property_m.php */
/* Location: ./application/models/edit_sale_property_m.php */