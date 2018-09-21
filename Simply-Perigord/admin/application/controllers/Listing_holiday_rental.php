<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Listing_holiday_rental extends CI_Controller {

	public function index()
	{
		$this->load->model('listing_holiday_rental_m');
		$data['get_all_rental_property'] = $this->listing_holiday_rental_m->fetch_rental_property();
		$this->load->view('listing_holiday_rental',$data);
	}

	public function delete_rental_id(){

		$this->load->model('listing_holiday_rental_m');
		$del_rental_id = $this->uri->segment(3);
		$delete_rental = $this->listing_holiday_rental_m->delete_rental_id($del_rental_id);		

		if($delete_rental){
			$this->session->set_flashdata("delete_rent_successfull", "The defined rental property has been deleted successfully...!");	
				redirect('listing_holiday_rental');
		}else{
			$this->session->set_flashdata("delete_rent_failed", "Failed to delete the defined rental property...!");
				redirect('listing_holiday_rental');
		}
	}

}

/* End of file Listing_holiday_rental.php */
/* Location: ./application/controllers/Listing_holiday_rental.php */