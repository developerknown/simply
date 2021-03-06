<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Listing extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
	function __construct(){
        parent::__construct();
		$this->load->model('footer_m');
		
    }
	public function index()
	{
		$this->load->model('listing_m');
		$data['footer'] = $this->footer_m->fetch_footer();
		$data['all_property'] = $this->listing_m->fetch_property();
		$data['all_locations'] = $this->listing_m->fetch_locations();
		$this->load->view('listing',$data);
	}

	public function advance_search(){
		$this->load->model("listing_m");
		
		/*$property_type = $this->input->post('email');
		$location = ;
		$size = ;
		$price = ;
		$bedrooms = ;
		$bathroom = ;
		$amenities = ;

		$records=array('email'=>$email,'password'=>$password);
		
		
		$this->session->set_userdata('logged_in',$session_data);
			if(isset($this->session->userdata['logged_in']['user_type']) && $this->session->userdata['logged_in']['user_type'] == "Small and medium business"){
			}*/

	}

	public function reset_advance_form(){
		/* reset all session values */
	}

}
