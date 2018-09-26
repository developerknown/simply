<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Settings extends CI_Controller {

	public function index()
	{
		$this->load->view('settings');
	}

	public function chng_password(){
		$this->load->model('settings_m');
		$new_pass = $this->input->post('new_password');
		$user_id = $this->session->userdata['logged_in']['user_id'];
		$records = array(
			"password" => $new_pass
		);

		$update_password= $this->settings_m->updte_pass($records,$user_id);
		if($update_password){
			$this->session->set_flashdata("pass_update_sccs", "The password has been updated successfully...!");
			redirect('settings');
		}else{
			$this->session->set_flashdata("pass_update_failed", "Failed to update the password...!");
			redirect('settings');
		}
	}

}

/* End of file Add_season.php */
/* Location: ./application/controllers/Add_season.php */