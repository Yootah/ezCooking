<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Search_model extends CI_Model {
	public function getSearchArray($search_name){
		$names = explode(" ", $search_name);
		for($i=0;$i < count($names);$i++){
			if($i == 0){
				$str="lower(title) like '%" . $names[$i] . "%'";
			}
			else{
				$str.=" OR lower(title) like '%" . $names[$i] . "%'";
			}
		}
		$this -> db -> from('view_recipe_search where ' . $str);
		$query = $this -> db -> get();
		$arr = $query->result_array();
		return $arr;
	}
	
	public function searchAuth($auth) {
	    $this -> db -> from("view_recipe_search where lower(author) like '%" . $auth . "'%");
		$query = $this -> db -> get();
		$arr = $query->result_array();
		return $arr;
	}
}
?>