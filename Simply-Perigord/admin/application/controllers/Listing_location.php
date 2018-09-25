<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Listing_location extends CI_Controller {

	public function index()
	{
		$this->load->model('listing_location_m');
		$data['get_all_location'] = $this->listing_location_m->fetch_location();
		$this->load->view('listing_location',$data);
	}

	public function delete_location_id(){

		$this->load->model('listing_location_m');
		$del_location_id = $this->uri->segment(3);
		
		$delete_location = $this->listing_location_m->del_location($del_location_id);		

		if($delete_location){
			$this->session->set_flashdata("delete_location_successfull", "The defined season has been deleted successfully...!");		
				redirect('listing_location');
		}else{
			$this->session->set_flashdata("delete_location_failed", "Failed to delete the defined season...!");
				redirect('listing_location');
		}
	}

}

/* End of file Listing_season.php */
/* Location: ./application/controllers/Listing_season.php */