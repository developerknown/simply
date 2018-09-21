<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Listing_sale_property extends CI_Controller {

	public function index()
	{
		$this->load->model('listing_sale_property_m');
		$data['get_all_sale_property'] = $this->listing_sale_property_m->fetch_sale_property();
		$this->load->view('listing_sale_property',$data);
	}

	public function delete_sale_id(){

		$this->load->model('listing_sale_property_m');
		$del_sale_id = $this->uri->segment(3);
		$delete_prop_sale = $this->listing_sale_property_m->delete_prop_sale_id($del_sale_id);		

		if($delete_prop_sale){
			$this->session->set_flashdata("delete_sale_successfull", "The defined property for sale has been deleted successfully...!");		
				redirect('listing_sale_property');
		}else{
			$this->session->set_flashdata("delete_sale_failed", "Failed to delete the defined property for sale...!");
				redirect('listing_sale_property');
		}
	}

}

/* End of file Listing_sale_property.php */
/* Location: ./application/controllers/Listing_sale_property.php */