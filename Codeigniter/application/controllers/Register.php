<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Register extends CI_Controller {

	public function index()
	{
		$title['title'] = 'Register - ezCooking';
		$this->load->view('navigation', $title);
		$this->load->view('register');
		$this->load->view('footer');
	}
}