<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Search_model extends CI_Model {
	public function getSearchArray($search_name){
		$this -> db -> select("*");
		$this -> db -> from('recipe');
		$this -> db -> where('title', $search_name);
		$query = $this -> db -> get();
		$arr = $query->result_array();
		return $arr;
	}	
}
?>