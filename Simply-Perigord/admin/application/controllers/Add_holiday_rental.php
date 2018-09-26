<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Add_holiday_rental extends CI_Controller {

	public function index()
	{
		$this->load->model('add_holiday_rental_m');
		$data['get_seasons'] = $this->add_holiday_rental_m->fetch_seasons();
		$this->load->view('add_holiday_rental',$data);
	}

	public function add_new_rental(){
		$this->load->model('add_holiday_rental_m');
		$prop_name = $this->input->post('prop_name');
		$prop_location = $this->input->post('prop_location');
		$house_sleeping = $this->input->post('house_sleeping');
		$date_from = "";
		$date_to = "";
		$season = $this->input->post('season');
		$price = $this->input->post('price');
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
		/*$prop_images = $this->input->post('prop_images');*/
		$date = time();
		$country = "France";
		$rental_tags = implode(",",$this->input->post('property_tags'));
		

		$records = array(
				"property_type" => 'rental',
				"name" => $prop_name,
				"location" => $prop_location,
				"max_guest" => $house_sleeping,
				"booking_start_date" => $date_from,
				"booking_end_date" => $date_to,
				"season" => $season,
				"price" => $price,
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
				"status" => '1',
				"location_country" => $country,
				"tags" => $rental_tags,
		);	

		$insert_new_holiday_rental = $this->add_holiday_rental_m->add_new_rental_table($records);
		if($insert_new_holiday_rental){
			
			$last_holiday_rental_id = $insert_new_holiday_rental;
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
			        'holiday_rental_id' => $last_holiday_rental_id,
			        'image' => $dataInfo[$i]['file_name'],
			        'date' => time(),
			        'status' => '1'
			    );	
			    $insert_new_holiday_rental_images = $this->add_holiday_rental_m->add_new_rental_image_table($data);	
		    }
		    if($insert_new_holiday_rental_images){
				$this->session->set_flashdata("add_holiday_rental_successfull", "The holiday rental has been added successfully...!");
				redirect('add_holiday_rental');
			}else{
				$this->session->set_flashdata("add_holiday_rental_failed", "Failed to add new holiday rental...!");
				redirect('add_holiday_rental');
			}
		}else{
			$this->session->set_flashdata("add_holiday_rental_failed", "Failed to add new holiday rental...!");
			redirect('add_holiday_rental');
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

/* End of file Add_holiday_rental.php */
/* Location: ./application/controllers/Add_holiday_rental.php */