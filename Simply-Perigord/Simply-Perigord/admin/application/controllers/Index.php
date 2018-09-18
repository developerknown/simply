<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Index extends CI_Controller {
    function __construct() {
        parent::__construct();
        // Load form helper library
        $this->load->helper('form');


// Load session library
        $this->load->library('session');

// Load database
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
		$this->load->view('index');
	}


// Check for user login process
    public function Login() {
            $data = array(
                'email' => $this->input->post('email'),
                'password' => $this->input->post('password')
            );
            $result = $this->Login_database->login($data);
            if ($result == TRUE) {
                $email = $this->input->post('email');
                $result = $this->Login_database->read_user_information($email);
                if ($result != false) {
                    $session_data = array(
                        'email' => $result[0]->email,
                        'id' => $result[0]->id,
                    );
                    // Add user data in session
                    $this->session->set_userdata('logged_in', $session_data);
                    $user_id = $this->session->userdata['logged_in']['id'];

                    redirect('Dashboard');
                }
            } else {
                $data = array(
                    'error_message' => 'Invalid Username or Password'
                );
                $this->load->view('index', $data);
            }
       
    }
}
