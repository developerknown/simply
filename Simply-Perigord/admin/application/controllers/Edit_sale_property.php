<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Edit_sale_property extends CI_Controller {

	public function index()
	{
		$this->load->model('edit_sale_property_m');
		$sale_prop_id = $this->uri->segment(2);
		$data['get_all_sale_property'] = $this->edit_sale_property_m->fetch_sale_property($sale_prop_id);
		$this->load->view('edit_sale_property',$data);
	}

	public function edit_defined_sale_property(){

		$this->load->model('edit_sale_property_m');
		$sale_prop_id = $this->input->post('sale_prop_id');
		$prop_name = $this->input->post('prop_name');
		$prop_location = $this->input->post('prop_location');
		$prop_size = $this->input->post('prop_size');
		$bedroom = $this->input->post('bedroom');
		$bathroom = $this->input->post('bathroom');
		$private_pool = $this->input->post('private_pool');
		$private_parking = $this->input->post('private_parking');
		$private_garden = $this->input->post('private_garden');
		$village_house = $this->input->post('village_house');
		$rural_setting = $this->input->post('rural_setting');
		$date = time();

		$records = array(
				"name" => $prop_name,
				"location" => $prop_location,
				"size" => $prop_size,
				"bedrooms" => $bedroom,
				"bathrooms" => $bathroom,
				"private_pool" => $private_pool,
				"private_parking" => $private_parking,
				"private_garden" => $private_garden,
				"village_house" => $village_house,
				"rural_setting" => $rural_setting,
				"date" => $date,
				"status" => '1'
		);	


		$update_new_sale_property = $this->edit_sale_property_m->update_property_sale_table($records,$sale_prop_id);
		if($update_new_sale_property){
			$this->session->set_flashdata("update_sale_prop_successfull", "The defined property has been updated successfully...!");
				redirect('edit_sale_property/'.$sale_prop_id);
		}else{
			$this->session->set_flashdata("update_sale_prop_failed", "Failed to update the defined property for sale...!");
			redirect('edit_sale_property/'.$sale_prop_id);
		}	
	}

	/*private function set_upload_options()
	{   
	    //upload an image options
	    $config = array();
	    $config['upload_path'] = 'uploads/property_sale';
	    $config['allowed_types'] = 'gif|jpg|png';
	    $config['max_size']      = '0';
	    $config['overwrite']     = FALSE;

	    return $config;
	}*/

}

/* End of file Edit_sale_property.php */
/* Location: ./application/controllers/Edit_sale_property.php */