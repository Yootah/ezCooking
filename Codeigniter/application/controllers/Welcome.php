<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	function __construct() {
		parent:: __construct();
		$this->load->model('Random_post_model', '', TRUE);
		$this->load->model('News_model', '', TRUE);
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
		if(!isset($_SESSION)) { 
			session_start();
		}
		if ($this->session->userdata('site_lang') == '') {
			$this->session->set_userdata('site_lang', 'english');
		}
		
		$title['title'] = lang('menu_news');//'Welcome to ezCooking web app';
		$this->load->view('navigation', $title);
		
		$data['newsXML'] = $this -> News_model -> getLatestNews(0);
		$this->load->view('welcome_message', $data);
		
		$footdata['rand'] = $this->Random_post_model->getRandomID();
		$this->load->view('footer', $footdata);
	}
	
	public function loadmorenews($start) {
		$this->data['uudistekogu'] = $this->News_model->getLatestNews($start);
		$this->output->set_content_type('application/json')->set_output(json_encode($this->data['uudistekogu']));
	}
	
	public function changeLanguage($language = "") {
		if(!isset($_SESSION)) { 
			session_start();
		}
		if($language == "")
			$language = "english";
		
        $this->session->set_userdata('site_lang', $language);
		redirect(base_url());
    	}
}  