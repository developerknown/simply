<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Edit_sale_property extends CI_Controller {

	public function index()
	{
		$this->load->model('edit_sale_property_m');
		$sale_prop_id = $this->uri->segment(2);
		$data['get_seasons'] = $this->edit_sale_property_m->fetch_seasons();
		$data['get_all_sale_property'] = $this->edit_sale_property_m->fetch_sale_property($sale_prop_id);
		
		$this->load->view('edit_sale_property',$data);
	}

	public function edit_defined_sale_property(){

		$this->load->model('edit_sale_property_m');
		$sale_prop_id = $this->input->post('sale_prop_id');
		$prop_name = $this->input->post('prop_name');
		$prop_location = $this->input->post('prop_location');
		$prop_size = $this->input->post('prop_size');
		/*$season = $this->input->post('season');
		$price = $this->input->post('price');*/
		$bedroom = $this->input->post('bedroom');
		$bathroom = $this->input->post('bathroom');
		$amenities = implode(",",$this->input->post('amenities'));
		$date = time();
		$tags = implode("," ,$this->input->post('property_tags'));

		$records = array(
				"property_type" => 'sale',
				"name" => $prop_name,
				"location" => $prop_location,
				"size" => $prop_size,
				"bedrooms" => $bedroom,
				"bathrooms" => $bathroom,
				"amenities" => $amenities,
				"status" => '1',
				"tags" => $tags
		);	


		$update_new_sale_property = $this->edit_sale_property_m->update_property_sale_table($records,$sale_prop_id);
		if($update_new_sale_property){

		 /********************************************************/
			$last_sale_property_id = $sale_prop_id;
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
			    $insert_new_sale_property_images = $this->edit_sale_property_m->add_new_sale_image_table($data);	
		    }

		    /***********************************************************************/
			$this->session->set_flashdata("update_sale_prop_successfull", "The defined property has been updated successfully...!");
				redirect('edit_sale_property/'.$sale_prop_id);
		}else{
			$this->session->set_flashdata("update_sale_prop_failed", "Failed to update the defined property for sale...!");
			redirect('edit_sale_property/'.$sale_prop_id);
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

	public function delete_image()
	{
		$this->load->model('edit_sale_property_m');
		$image_id = $this->uri->segment(3);
		$property_id = $this->uri->segment(4);
		$delete_image = $this->edit_sale_property_m->img_dlt($image_id);
		if($delete_image)
		{
			$this->session->set_flashdata("delt_img_sccful", "The image has been successfully deleted...!");
			redirect('edit_sale_property/'.$property_id);
		}
		else
		{
			$this->session->set_flashdata("delt_img_failed", "Failed to delete the image...!");
			redirect('edit_sale_property/'.$property_id);
		}
	}

}

/* End of file Edit_sale_property.php */
/* Location: ./application/controllers/Edit_sale_property.php */