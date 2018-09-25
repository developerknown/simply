<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Edit_season extends CI_Controller {

	public function index()
	{
		$this->load->model('edit_season_m');
		$season_id = $this->uri->segment(2);
		$data['get_all_season'] = $this->edit_season_m->fetch_season($season_id);
		$this->load->view('edit_season',$data);
	}

	public function update_season(){
		$this->load->model('edit_season_m');
		$season_name = $this->input->post('season_name');
		$season_id = $this->input->post('season_id');
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


		$update_new_season = $this->edit_season_m->update_season_table($records,$season_id);
		if($update_new_season){
		
			$this->session->set_flashdata("update_season_successfull", "The defined season has been updated successfully...!");
				redirect('edit_season/'.$season_id);
		}else{
			$this->session->set_flashdata("update_season_failed", "Failed to update the defined season..!");
			redirect('edit_season/'.$season_id);
		}
	}

}

/* End of file Edit_season.php */
/* Location: ./application/controllers/Edit_season.php */