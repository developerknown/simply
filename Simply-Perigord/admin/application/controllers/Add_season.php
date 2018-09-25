<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Add_season extends CI_Controller {

	public function index()
	{
		$this->load->view('add_season');
	}

	public function add_new_season(){
		$this->load->model('add_season_m');
		$season_name = $this->input->post('season_name');
		$date_from = $this->input->post('date_from');
		$date_to = $this->input->post('date_to');
		$date = time();

		$records = array(
			"season_name" => $season_name,
			"date_from" => $date_from,
			"date_to" => $date_to,
			"status" => '1',
			"date_added" => $date
		);

		$insert_new_season = $this->add_season_m->add_new_season_table($records);
		if($insert_new_season){
			$this->session->set_flashdata("add_season_successfull", "The new season has been added successfully...!");
			redirect('add_season');
		}else{
			$this->session->set_flashdata("add_season_failed", "Failed to add new season...!");
			redirect('add_season');
		}
	}

}

/* End of file Add_season.php */
/* Location: ./application/controllers/Add_season.php */