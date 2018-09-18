<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Add_Rental_Property extends CI_Controller {
    function __construct() {
        parent::__construct();
        // Load form helper library
        $this->load->helper('form');
        $this->load->helper('url');

        // Load session library
        $this->load->library('session');

        // Load database
        $this->load->model('Rental_Property');
		$this->load->model('Login_database');
    }
    /**
     * Index Page for this controller.
     *
     * Maps to the following URL
     * 		http://example.com/index.php/welcome
     *	- or -
     * 		http://example.com/index.php/welcome/index
     *	- or -
     * Since this controller is set as the default controller in
     * config/routes.php, it's displayed at http://example.com/
     *
     * So any other public methods not prefixed with an underscore will
     * map to /index.php/welcome/<method_name>
     * @see https://codeigniter.com/user_guide/general/urls.html
     */
    public function index()
    {
        $this->load->view('add_rental_property');
    }
    public function View_Rental()
    {

        $this->load->view('view_rental_property');
    }

    
    public function Add_Rental_Property() {

        $config['upload_path']          = 'assets/uploads/';
        $config['allowed_types']        = 'gif|jpg|png|jpeg';
        $this->load->library('upload', $config);

        if ( ! $this->upload->do_upload('primary_image'))
        {
            $error = array('error' => $this->upload->display_errors());
            $this->load->view('Add_Rental_Property', $error);
        }
        else
        {
            $primary_image  = $this->upload->data('file_name');

        }

        $filesCount = count($_FILES['multiple_images']['name']);
        $multiple_image =array();
        for($i = 0; $i < $filesCount; $i++) {
            if(isset($_FILES['multiple_images']['name']) && $_FILES['multiple_images']['name'][$i] != ""){
                $_FILES['userFile']['name'] = $_FILES['multiple_images']['name'][$i];
                $_FILES['userFile']['type'] = $_FILES['multiple_images']['type'][$i];
                $_FILES['userFile']['tmp_name'] = $_FILES['multiple_images']['tmp_name'][$i];
                $_FILES['userFile']['error'] = $_FILES['multiple_images']['error'][$i];
                $_FILES['userFile']['size'] = $_FILES['multiple_images']['size'][$i];


                $config['upload_path']          = 'assets/uploads/';
                $config['allowed_types']        = 'gif|jpg|png|jpeg';

                $this->load->library('upload', $config);
                $this->upload->initialize($config);
                if ($this->upload->do_upload('userFile')) {
                    $multiple_image[$i]  = $this->upload->data('file_name');


                }
            }
        }

		$data = array(
			'property_id' => $this->input->post('property_id'),
			'property_name' => $this->input->post('property_name'),
			'address' => $this->input->post('address'),
			'town' => $this->input->post('town'),
			'phone' => $this->input->post('phone'),
			'email' => $this->input->post('email'),
			'listed_on' => $this->input->post('listed_on'),
			'maximum_guests' => $this->input->post('maximum_guests'),
            'low_guests' => $this->input->post('low_guests'),
            'low_season_under' => $this->input->post('low_season_under'),
            'low_season_full' => $this->input->post('low_season_full'),
            'mid_season_under' => $this->input->post('mid_season_under'),
            'mid_season_full' => $this->input->post('mid_season_full'),
            'high_season_under' => $this->input->post('high_season_under'),
            'high_season_full' => $this->input->post('high_season_full'),
			'beds' => $this->input->post('beds'),
			'bathroom' => $this->input->post('bathroom'),
			'pool_size' => $this->input->post('pool_size'),
			'washer' => $this->input->post('washer'),
			'tv' => $this->input->post('tv'),
			'aircon' => $this->input->post('aircon'),
			'wifi' => $this->input->post('wifi'),
			'bbq' => $this->input->post('bbq'),
			'private_parking' => $this->input->post('private_parking'),
			'private_garden' => $this->input->post('private_garden'),
			'private_pool' => $this->input->post('private_pool'),
			'pets_allowed' => $this->input->post('pets_allowed'),
			'family_friendly' => $this->input->post('family_friendly'),
			'village_house' => $this->input->post('village_house'),
			'rural_setting' => $this->input->post('rural_setting'),
			'romatic_for_two' => $this->input->post('romatic_for_two'),
			'cosy_cottage' => $this->input->post('cosy_cottage'),
			'description' => $this->input->post('description'),
            'feature_name' => $this->input->post('feature_name'),
            'feature_value' => $this->input->post('feature_value'),
            'primary_image' => $primary_image,
            'multiple_images' => $multiple_image
		);
		$result = $this->Rental_Property->Add_Rental_Property1($data);
		
		if ($result == TRUE) {
            $this->session->set_flashdata('msg', '<div class="alert alert-success text-center">Your Rental Property has been successfully added.</div>');
			redirect('Add_Rental_Property');

		} else {
            $this->session->set_flashdata('msg', '<div class="alert alert-danger text-center">Oops! Something went wrong. Please try again.</div>');
            redirect('Add_Rental_Property');
		}
	}
}
