<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Profile extends CI_Controller {

	function __construct() {
		parent:: __construct();
		$this->load->model('Random_post_model', '', TRUE);
		$this->load->model('Profile_model', '', TRUE);
        
		
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
		if (!isset($_SESSION['username'])) {
			echo 'You are not logged in!';
			redirect('welcome');
		}
		//$this->load->view('first');
		$title['title'] = lang('menu_profile');
		$this->load->view('navigation', $title); // DO NOT CHANGE
		
        $profdata['n'] = $this->Profile_model->getPostNum();
        $profdata['myrecipes'] = $this->Profile_model->getAllMyRecipes();
		$this->load->view('profile', $profdata); //
		
		$data['rand'] = $this->Random_post_model->getRandomID();  // RANDOM BUTTON DATA
		$this->load->view('footer', $data); // DO NOT CHANGE
	}
	
	public function delPost($recid){
	    $this->Profile_model->delete_Recipe($recid);
	    redirect("profile/");
	}
}
