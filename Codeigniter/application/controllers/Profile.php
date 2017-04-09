<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Profile extends CI_Controller {

	function __construct() {
		parent:: __construct();
		$this->load->model('Random_post_model', '', TRUE);
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
		if (!isset($_SESSION['username'])) {
			redirect('welcome');
		}
		//$this->load->view('first');
		$title['title'] = 'Page Title';
		$this->load->view('navigation', $title); // DO NOT CHANGE
		$this->load->view('profile'); //
		$data['rand'] = $this->Random_post_model->getRandomID();  // RANDOM BUTTON DATA
		$this->load->view('footer', $data); // DO NOT CHANGE
	}
}
