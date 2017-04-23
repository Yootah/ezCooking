<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Search extends CI_Controller {
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
		
		//$this->load->view('first');
		$title['title'] = 'Search';
		$this->load->view('navigation', $title); // DO NOT CHANGE
		$data['db_resp'] = null;
		$this->load->view('search', $data); //
		$data['rand'] = $this->Random_post_model->getRandomID();
		$this->load->view('footer', $data); // DO NOT CHANGE
	}
	
	public function show_search(){
		$search = $this->input->post('search');
		$author = $this->input->post('author');
		$this->load->model("Search_model");
		$data['db_resp']=$this->Search_model->getSearchArray($search);
		if (count($data['db_resp'])>0) {
			echo $this->load->view('searchresults',$data, TRUE);
		}
		else echo "No posts found, sry wrong litterbox";
		
		$title['title'] = 'Search';
		
		
	}
}