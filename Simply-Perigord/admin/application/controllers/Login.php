<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

	public function index()
	{
		$this->load->view('login');
	}

	public function check_login()
	{
		$this->load->model('login_m');

		$username = $this->input->post('username');
		$password = $this->input->post('password');
		//exit;
		$records=array('name'=>$username,'password'=>$password);
		$result = $this->login_m->login_function($records);
		if($result > 0)
		{
			$last_id = $this->login_m->get_id($records);
			//print_r($last_id);
			$session_data = array();
			foreach($last_id As $row)
			{
				$session_data = array(
									  'user_id' => $row->user_id,
									  'user_type' => $row->user_type,
									  'name' => $row->user_type,
									  'email'=>$row->email
								   );
			}
			$this->session->set_userdata('logged_in',$session_data);
			if(isset($this->session->userdata['logged_in']['user_type']) && $this->session->userdata['logged_in']['user_type'] == "admin"){
				redirect('dashboard');
			}
			else
			{
			}
		}
		else
		{
		}

	}

}

/* End of file Login.php */
/* Location: ./application/controllers/Login.php */