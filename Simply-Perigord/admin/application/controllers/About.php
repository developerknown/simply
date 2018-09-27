<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class About extends CI_Controller {

	public function index()
	{
		$this->load->model('about_m');
		$data['get_footer_data'] = $this->about_m->fetch_footer_data();
		$this->load->view('about',$data);
	}

	public function footer_info(){
		$this->load->model('about_m');
		$contact_address = $this->input->post('contact_address');
		$contact_phone = $this->input->post('contact_phone');
		$contact_email = $this->input->post('contact_email');
		$fb_link = $this->input->post('fb_link');
		$insta_link = $this->input->post('insta_link');
		$twitter_link = $this->input->post('twitter_link');
		$pinterest_link = $this->input->post('pinterest_link');
		$about_title = $this->input->post('about_title');
		$about_content = $this->input->post('about_content');
		
		$records = array(
			"about_title" => $about_title,
			"about_details" => $about_content,
			"contact_address" => $contact_address,
			"contact_phone" => $contact_phone,
			"contact_email" => $contact_email,
			"facebook_link" => $fb_link,
			"insta_link" => $insta_link,
			"twitter_link" => $twitter_link,
			"pinterest_link" => $pinterest_link,

			

		);

		$update_fttr_details= $this->about_m->updte_fttr_info($records);
		if($update_fttr_details){
			$this->session->set_flashdata("fttr_update_sccs", "The footer data has been updated successfully...!");
			redirect('about');
		}else{
			$this->session->set_flashdata("pass_update_failed", "Failed to update the footer data...!");
			redirect('about');
		}
	}

}

/* End of file Add_season.php */
/* Location: ./application/controllers/Add_season.php */