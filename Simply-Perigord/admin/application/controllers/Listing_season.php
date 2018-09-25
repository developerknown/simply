<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Listing_season extends CI_Controller {

	public function index()
	{
		$this->load->model('listing_season_m');
		$data['get_all_season'] = $this->listing_season_m->fetch_season();
		$this->load->view('listing_season',$data);
	}

	public function delete_season_id(){

		$this->load->model('listing_season_m');
		$del_season_id = $this->uri->segment(3);
		$delete_season = $this->listing_season_m->del_seson_id($del_season_id);		

		if($delete_season){
			$this->session->set_flashdata("delete_season_successfull", "The defined season has been deleted successfully...!");		
				redirect('listing_season');
		}else{
			$this->session->set_flashdata("delete_season_failed", "Failed to delete the defined season...!");
				redirect('listing_season');
		}
	}

}

/* End of file Listing_season.php */
/* Location: ./application/controllers/Listing_season.php */