<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Add_sale_property_m extends CI_Model {

	public function add_new_property_sale_table($records)
	{
		$this->db->insert('property_sale', $records);
		return $this->db->insert_id();
	}

	public function add_new_sale_image_table($data)
	{
		$this->db->insert('sale_images', $data);
		return true;
	}

}

/* End of file Add_sale_property_m.php */
/* Location: ./application/models/Add_sale_property_m.php */