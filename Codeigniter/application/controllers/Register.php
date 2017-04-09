<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Register extends CI_Controller {
	function __construct() {
		parent:: __construct();
		$this->load->model('user', '', TRUE);
		$this->load->model('Random_post_model', '', TRUE);
	}

	public function index()
	{		
		$title['title'] = 'Register - ezCooking';
		$this->load->view('navigation', $title);
		
		$this->load->helper(array('form'));
		$this->load->helper(array('form','url'));
		$this->load->library('form_validation');
		$this->form_validation->set_rules('username', 'Username', 'required|callback_check_database');
		$this->form_validation->set_rules('email', 'Email', 'required');
		$this->form_validation->set_rules('password', 'Password', 'required',
			array('required' => 'You must provide a %s.'));
		$this->form_validation->set_rules('passwordr', 'PasswordR', 'required',
			array('required' => 'You must provide a secondary %s.'));

		if($this->form_validation->run() == FALSE) {
			$this->load->view('register');
		}
		else {
			redirect('welcome');
		}
		$data['rand'] = $this->Random_post_model->getRandomID();  // RANDOM BUTTON DATA
		$this->load->view('footer', $data); // DO NOT CHANGE
		
		
	}
	function check_database($username) {
		$username = $this->input->post('username');
		$password = $this -> input ->post('password');
		$passwordR = $this -> input -> post('passwordr');
		$email = $this -> input -> post('email');
		if ($password != $passwordR) {
			return FALSE;
		}
		
		$result=$this->user->registerUser($username,$password,$email);
		if($result) {
			/*$sess_array = array();
			foreach($result as $row) {
				$sess_array = array('username' => $row->username);
				$this->session->set_userdata('logged_in', $sess_array);
			}
			$this -> user -> updLastSeen($username);*/
			$this -> form_validation -> set_message('check_database', 'Registered successfully!');
			return TRUE;
		}
		else {
			$this->form_validation->set_message('check_database', 'Username already exists');
			return FALSE;
		}
	}
}