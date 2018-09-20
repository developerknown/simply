<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Listing_sale_property extends CI_Controller {

	public function index()
	{
		$this->load->model('listing_sale_property_m');
		$data['get_all_sale_property'] = $this->listing_sale_property_m->fetch_sale_property();
		$this->load->view('listing_sale_property',$data);
	}

}

/* End of file Listing_sale_property.php */
/* Location: ./application/controllers/Listing_sale_property.php */