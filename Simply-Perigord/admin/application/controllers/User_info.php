<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User_info extends CI_Controller {

	public function index()
	{
		$this->load->model('user_info_m');
		$data['user_details'] = $this->user_info_m->user_details();
		$this->load->view('user_info',$data);
	}

}

/* End of file User_info.php */
/* Location: ./application/controllers/User_info.php */