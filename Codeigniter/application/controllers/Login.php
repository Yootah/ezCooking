<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {
	function __construct() {
		parent:: __construct();
		$this->load->library('facebook');
		$this->load->model('user', '', TRUE);
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
	    $title['title'] = 'Login';
		$this->load->helper(array('form'));
		$this->load->view('navigation', $title); // DO NOT CHANGE
	    
	    /*if ($this->facebook->is_authenticated()) {
	    $this->facebook->destroy_session();
		$this->session->unset_userdata('userData');
	    }*/
	    
            /* FACEBOOK */
            $fbuser = '';
			
			// Get login URL
            $fbdata['authUrl'] =  $this->facebook->login_url();
            
            /* NON-FACEBOOK */
            // Load library and helper
            $this->load->helper(array('form','url'));
            $this->load->library('form_validation');
            
            // Set validation rules
            $this->form_validation->set_rules('username', 'Username', 'required');
            $this->form_validation->set_rules('password', 'Password', 'required|callback_check_database',
            	array('required' => 'You must provide a %s.'));
            	
            // Login failed	
    		if($this->form_validation->run() == FALSE) {
    			$this->load->view('login', $fbdata);
    		} else {                            // Login succeeded
    			$_SESSION['username']=$this->input->post('username');
    			redirect('profile');
    		}    
		
		$data['rand'] = $this->Random_post_model->getRandomID();
		$this->load->view('footer', $data);
	}
	
	function check_database($password) {
		$username = $this->input->post('username');
		$password = $this -> input ->post('password');
		$result = $this->user->login($username, $password);
		if($result) {
			$sess_array = array();
			foreach($result as $row) {
				$sess_array = array('username' => $row->username);
				$this->session->set_userdata('logged_in', $sess_array);
			}
			$this -> user -> updLastSeen($username);
			return TRUE;
		}
		else {
			$this->form_validation->set_message('check_database', 'Invalid username or password');
			return FALSE;
		}
	}
	
	function fb_login() {
	    if($this->facebook->is_authenticated()){
			// Get user facebook profile details
			try{
			    $userProfile = $this->facebook->request('get', '/me?fields=id,first_name,last_name,email');
			}
			catch (Exception $e){
			    redirect('login');
			}
			
			if (!isset($userProfile['id'])){
			    redirect('login');
			}

            // Preparing data for database insertion
            $userData['oauth_provider'] = 'facebook';
            
            $userData['oauth_uid'] = $userProfile['id'];
            $userData['first_name'] = $userProfile['first_name'];
            $userData['last_name'] = $userProfile['last_name'];
            $userData['email'] = $userProfile['email'];
			
            // Insert or update user data
            $userID = $this->user->checkFBUser($userData);
            
            // Check user data insert or update status
            if(!empty($userID)){
                $this->session->set_userdata('logged_in',$userData);
                $_SESSION['username']= $userData['first_name']." ". $userData['last_name'];
			    redirect('profile');
            } else {
                redirect('welcome');
            }
	    }
	    else redirect('login');
	}
}
?>