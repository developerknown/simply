<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

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
     }
	public function index()
	{
		$this->load->model('home_m');
		/*$data['property_sale'] = $this->get_housing("sale");
		$data['property_rent'] = $this->get_housing("rental");*/
		
		$data['property_sale'] = $this->home_m->fetch_property("sale");
		$data['property_rent'] = $this->home_m->fetch_property("rental");


		$this->load->view('home',$data);
	}

	
}
