<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Edit_holiday_rental extends CI_Controller {

	public function index()
	{
		$this->load->model('edit_holiday_rental_m');
		$rental_prop_id = $this->uri->segment(2);
		$data['fetch_seasons'] = $this->edit_holiday_rental_m->fetch_seasons();
		$data['get_all_rental_property'] = $this->edit_holiday_rental_m->fetch_rental_property($rental_prop_id);		
		$this->load->view('edit_holiday_rental',$data);
	}

	public function edit_defined_rental_property(){

		$this->load->model('edit_holiday_rental_m');
		$rental_prop_id = $this->input->post('rental_prop_id');;
		$prop_name = $this->input->post('prop_name');
		$prop_location = $this->input->post('prop_location');
		$season = $this->input->post('season');
		$price = $this->input->post('price');
		$house_sleeping = $this->input->post('house_sleeping');
		$date_from = $this->input->post('date_from');
		$date_to = $this->input->post('date_to');
		$guest_allowed = $this->input->post('guest_allowed');
		$bedroom = $this->input->post('bedroom');
		$bathroom = $this->input->post('bathroom');
		$washer = $this->input->post('washer');
		$television = $this->input->post('television');
		$aircon = $this->input->post('aircon');
		$wifi = $this->input->post('wifi');
		$bbq = $this->input->post('bbq');
		$private_pool = $this->input->post('private_pool');
		$private_parking = $this->input->post('private_parking');
		$private_garden = $this->input->post('private_garden');
		$pet_allowed = $this->input->post('pet_allowed');
		$family_friendly = $this->input->post('family_friendly');
		$village_house = $this->input->post('village_house');
		$rural_setting = $this->input->post('rural_setting');
		$romantic_for_two = $this->input->post('romantic_for_two');
		$cosy_cottage = $this->input->post('cosy_cottage');
		$date = time();

		$records = array(
				"property_type" => 'rental',
				"name" => $prop_name,
				"location" => $prop_location,
				"max_guest" => $house_sleeping,
				"season" => $season,
				"price" => $price,
				"booking_start_date" => $date_from,
				"booking_end_date" => $date_to,
				"guest_number" => $guest_allowed,
				"bedrooms" => $bedroom,
				"bathrooms" => $bathroom,
				"washer" => $washer,
				"television" => $television,
				"aircon" => $aircon,
				"wifi" => $wifi,
				"bbq" => $bbq,
				"private_pool" => $private_pool,
				"private_parking" => $private_parking,
				"private_garden" => $private_garden,
				"pet_allowed" => $pet_allowed,
				"family_friendly" => $family_friendly,
				"village_house" => $village_house,
				"rural_setting" => $rural_setting,
				"romantic_for_two" => $romantic_for_two,
				"cosy_cottage" => $cosy_cottage,
				"booked_date" => $date,
				"status" => '1'
		);	


		$update_new_rental_property = $this->edit_holiday_rental_m->update_property_rental_table($records,$rental_prop_id);
		if($update_new_rental_property){

			/********************************************************/
			$last_rent_property_id = $rental_prop_id;
			$this->load->library('upload');
		    $dataInfo = array();
		    $files = $_FILES;
		    $cpt = count($_FILES['userfile']['name']);
		    
		    for($i=0; $i<$cpt; $i++){           
		        
		        $_FILES['userfile']['name']= $files['userfile']['name'][$i];
		        $_FILES['userfile']['type']= $files['userfile']['type'][$i];
		        $_FILES['userfile']['tmp_name']= $files['userfile']['tmp_name'][$i];
		        $_FILES['userfile']['error']= $files['userfile']['error'][$i];
		        $_FILES['userfile']['size']= $files['userfile']['size'][$i];    

		        $this->upload->initialize($this->set_upload_options());
		        $this->upload->do_upload();
		        $dataInfo[] = $this->upload->data();
		    }
		   
		    for($i=0; $i<$cpt; $i++){
		    	$data = array(
			        'holiday_rental_id' => $last_rent_property_id,
			        'image' => $dataInfo[$i]['file_name'],
			        'date' => time(),
			        'status' => '1'
			    );
			   
			    $insert_new_rental_property_images = $this->edit_holiday_rental_m->add_new_rental_image_table($data);	
		    }

		    /***********************************************************************/

			$this->session->set_flashdata("update_rent_prop_successfull", "The defined property has been updated successfully...!");
				redirect('edit_holiday_rental/'.$rental_prop_id);
		}else{
			$this->session->set_flashdata("update_rent_prop_failed", "Failed to update the defined property for sale...!");
			redirect('edit_holiday_rental/'.$rental_prop_id);
		}	
	}

	private function set_upload_options()
	{   
	    //upload an image options
	    $config = array();
	    $config['upload_path'] = 'uploads/';
	    $config['allowed_types'] = 'gif|jpg|png|jpeg|bmp';
	    return $config;
	}

}

/* End of file Edit_holiday_rental.php */
/* Location: ./application/controllers/Edit_holiday_rental.php */