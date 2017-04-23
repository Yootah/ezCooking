<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Post extends CI_Controller {

	function __construct() {
		parent:: __construct();
		$this->load->model('Post_model', '', TRUE);
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
	public function index($postid)
	{
		if(!isset($postid) || count($postid)==0){
			redirect('welcome');
		}

		$data['xml'] = $this->Post_model->getPostArray($postid);
		$data['postData'] = $this->Post_model->getPostData($postid);
		$data['stepdata'] = $this->Post_model->getStepdata($postid);

		if ($data['postData']==null || $data['stepdata']==null){
			redirect('welcome');
		}

		$title['title'] = $data['postData']['recipe_title'];
		$this->load->view('navigation', $title); // DO NOT CHANGE
		$this->load->view('post', $data);
		$data['rand'] = $this->Random_post_model->getRandomID();
		$this->load->view('footer', $data);
	}

	function _remap($param) {
        	$this->index($param);
    }

}
?>