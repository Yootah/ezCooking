<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Logout extends CI_Controller {
	function __construct() {
		parent:: __construct();
		$this->load->library('facebook');
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
		unset($_SESSION['logged_in']);
		unset($_SESSION['username']);
		$this->facebook->destroy_session();
		header( "refresh:5;url=".base_url()."welcome" );
		$this->load->view('logout');
		//echo "You have successfully logged out, you will be redirected to main page now.";
		
		/* redirect('welcome');
		usleep(3000000); */
		/*echo "<script>
			   setTimeout('document.location.href=\"" . base_url() . "welcome" . "\";',5000);
			   </script>";*/
	}
}
?>