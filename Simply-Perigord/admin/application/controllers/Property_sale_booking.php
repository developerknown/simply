<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Property_sale_booking extends CI_Controller {

	public function index()
	{
		$this->load->model('property_sale_booking_m');
		$data['fetch_bookings'] = $this->property_sale_booking_m->all_bookings();
		$this->load->view('property_sale_booking',$data);
	}

}

/* End of file Property_sale_booking.php */
/* Location: ./application/controllers/Property_sale_booking.php */