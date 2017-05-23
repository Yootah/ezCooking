<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Aboutus extends CI_Controller {
	
	function __construct() {
		parent:: __construct();
		$this->load->model('Random_post_model', '', TRUE);
		$this->load->library('googlemaps');		
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
		if ($this->session->userdata('site_lang') == '') {
			$this->session->set_userdata('site_lang', 'english');
		}
		$this->load->library('googlemaps'); 
		
		$config = array();
		$config['center'] = 'tartu, estonia';
		$config['zoom'] = 17;
		
		$this->googlemaps->initialize($config);
		
		$marker = array();
		$marker['position'] = 'tartu, estonia';
		
		$this->googlemaps->add_marker($marker);
		
		
		
		$this -> googlemaps -> initialize();
		$data['map'] = $this-> googlemaps -> create_map();
		$title['title'] = lang('menu_aboutus');
		$this->load->view('navigation', $title); // DO NOT CHANGE
		$this->load->view('aboutus', $data); //
		$footdata['rand'] = $this->Random_post_model->getRandomID();  // RANDOM BUTTON DATA
		$this->load->view('footer', $footdata); // DO NOT CHANGE
	}
}