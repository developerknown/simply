<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Add_location extends CI_Controller {

	public function index()
	{
		$this->load->view('add_location');
	}

	public function add_new_location(){
		$this->load->model('add_location_m');
		$country_name = "France";
		$city_name = $this->input->post('city_name');
		

		$records = array(
			"country" => $country_name,
			"city_name" => $city_name
		);

		$insert_new_location = $this->add_location_m->add_new_location_table($records);
		if($insert_new_location){
			$this->session->set_flashdata("add_location_successfull", "The new location has been added successfully...!");
			redirect('add_location');
		}else{
			$this->session->set_flashdata("add_location_failed", "Failed to add new location...!");
			redirect('add_location');
		}
	}

}

/* End of file Add_season.php */
/* Location: ./application/controllers/Add_season.php */