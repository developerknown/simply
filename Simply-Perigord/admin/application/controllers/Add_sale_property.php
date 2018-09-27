<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Add_sale_property extends CI_Controller {

	public function index()
	{
		$this->load->model('add_sale_property_m');
		$data['get_seasons'] = $this->add_sale_property_m->fetch_seasons();
		$this->load->view('add_sale_property',$data);
	}

	public function add_new_sale_property(){

		$this->load->model('add_sale_property_m');
		$prop_name = $this->input->post('prop_name');
		$prop_location = $this->input->post('prop_location');
		
		$prop_size = $this->input->post('prop_size');
		/*$season = $this->input->post('season');
		$price = $this->input->post('price');*/
		$bedroom = $this->input->post('bedroom');
		$bathroom = $this->input->post('bathroom');
		$amenities = implode(",",$this->input->post('amenities'));
		
		$country = "France";
		$date = time();
		$property_type = 'sale';
		$rental_tags = implode(",",$this->input->post('property_tags'));

		$records = array(
				"name" => $prop_name,
				"location" => $prop_location,
				"size" => $prop_size,
				"property_type" => $property_type,
				"bedrooms" => $bedroom,
				"bathrooms" => $bathroom,
				"amenities" => $amenities,
				"booked_date" => $date,
				"status" => '1',
				"location_country" => $country,
				"tags" => $rental_tags
		);	


		$insert_new_sale_property = $this->add_sale_property_m->add_new_property_sale_table($records);
		if($insert_new_sale_property){

			$last_sale_property_id = $insert_new_sale_property;
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
			        'holiday_rental_id' => $last_sale_property_id,
			        'image' => $dataInfo[$i]['file_name'],
			        'date' => time(),
			        'status' => '1'
			    );
			    $insert_new_sale_property_images = $this->add_sale_property_m->add_new_sale_image_table($data);	
		    }
		    
		    if($insert_new_sale_property_images){
				$this->session->set_flashdata("add_sale_prop_successfull", "The new property has been added successfully...!");
				redirect('add_sale_property');
			}else{
				$this->session->set_flashdata("add_sale_prop_failed", "Failed to add new property for sale...!");
				redirect('add_sale_property');
			}

		}else{
			$this->session->set_flashdata("add_sale_prop_failed", "Failed to add new property for sale...!");
			redirect('add_sale_property');
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

/* End of file Add_sale_property.php */
/* Location: ./application/controllers/Add_sale_property.php */