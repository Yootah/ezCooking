<?php
Class User extends CI_Model {
	function login($username, $password) {
		$this -> db -> select('username', 'password');
		$this -> db -> from('Users');
		$this -> db -> where('username', $username);
		$this -> db -> where('PW', MD5($password));
		$this -> db -> limit(1);
		
		$query = $this -> db -> get();
		
		if($query -> num_rows() == 1) {
			return $query -> result();
		}
		else {
			return false;
		}
	}
	
	function updLastSeen($username) {
		$this -> db -> set('Date_LastSeen', date('Y-m-d', time()));
		$this -> db -> where('username', $username);
		return $this -> db -> update('ezcookingcsut_DB.Users');
		// UPDATE  `ezcookingcsut_DB`.`Users` SET  `Date_LastSeen` =  '2017-03-26 18:00:13' WHERE  `Users`.`ID` =1;
	}
	
	function registerUser($username, $password, $email) {
		$userExists = $this -> checkIfUserExists($username);
		if ($userExists == FALSE) {
			$data = array(
				'UserName' => $username,
				'PW' => MD5($password),
				'Email' => $email
				);
			//$this->db->insert('Users', $data);
			$password = MD5($password);
			$this->db->query("call sp_register('$username', '$password', '$email')");
			return TRUE;
		}
		else {
			return FALSE;
		}
	}
	
	function checkIfUserExists($username) {
		$this -> db -> select('username');
		$this -> db -> from('Users');
		$this -> db -> where('username', $username);
		$this -> db -> limit(1);
		
		$query = $this -> db -> get();
		if($query -> num_rows() > 0) {
			return TRUE;
		}
		else {
			return FALSE;
		}
	}
	
	function checkFBUser($data=array()){
	    $this->db->select('id');
	    $this->db->from('Users');
	    $this->db->where(array('oauth_uid'=>$data['oauth_uid']));
	    $prevQuery = $this->db->get();
	    $prevCheck = $prevQuery->num_rows();
	    
	    $ouid = $data['oauth_uid'];
	    $uname = $data['first_name']." ".$data['last_name'];
	    $mail = $data['email'];
	    
	    
	    if($prevCheck > 0){
			$prevResult = $prevQuery->row_array();
			$this->db->query("call sp_updateFBUser('$ouid')");
			$userID = $prevResult['id'];
	    }
	    else{
	        $this->db->trans_start();
	        $this->db->query("call sp_addFBUser('$uname', '$mail', '$ouid', @newid)");
	        $query = $this->db->query('select @newid as out_param');
	        $this->db->trans_complete();
	        $userID = $query->row()->out_param;
	    }
	    return $userID ? $userID : FALSE;
	}
}
?>