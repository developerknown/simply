<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Holiday_rental_booking extends CI_Controller {

	public function index()
	{
		$this->load->model('holiday_rental_booking_m');
		$data['fetch_bookings'] = $this->holiday_rental_booking_m->all_bookings();
		$this->load->view('holiday_rental_booking',$data);
	}

}

/* End of file Holiday_rental_booking.php */
/* Location: ./application/controllers/Holiday_rental_booking.php */