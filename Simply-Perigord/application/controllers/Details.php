<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Details extends CI_Controller {

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
        /*if(!$this->session->userdata['logged_in']['user_id']){
            redirect('login');
        }else{
			$user_id = $this->session->userdata['logged_in']['user_id'];
		}
		 if($this->session->userdata['logged_in']['user_type'] != "admin"){
            redirect('error_page');
        }*/
		$this->load->model('footer_m');
     }

	public function index()
	{
		$this->load->model('details_m');
		$data['footer'] = $this->footer_m->fetch_footer();
		$property_id = $this->uri->segment(2);
		//$data['property'] = $property_id;
		$data['property'] = $this->details_m->fetch_prodetails($property_id);

		$this->load->view('details',$data);
	}
}
