<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class NewPost extends CI_Controller {

	function __construct() {
		parent:: __construct();
		$this->load->model('Random_post_model', '', TRUE);
		$this->load->model('NewPost_model', '', TRUE);
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
		$title['title'] = lang('menu_newPost');
		$this->load->view('navigation', $title); // DO NOT CHANGE
		$this->load->view('newpost'); //
		$data['rand'] = $this->Random_post_model->getRandomID();
		$this->load->view('footer', $data);
	}
	
	public function submit_recipe(){
	    $pdata = $this->input->post();
	    $recid = $this->NewPost_model->createRecipe($pdata);
	    $this->NewPost_model->saveIngredients($pdata, $recid);
	    $this->NewPost_model->saveSteps($pdata, $recid);
	    redirect("post/".$recid);
	    
	}
}
