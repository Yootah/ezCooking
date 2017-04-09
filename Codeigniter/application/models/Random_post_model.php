<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Random_post_model extends CI_Model {

	public function getRandomID() {
		$this -> db -> from('view_recipe_idlist');
		$query = $this -> db -> get();
		$arr = array_values($query->result_array());
		return	$arr;
	}
}
?>