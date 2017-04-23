<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Post_model extends CI_Model {
	public function getPostArray($id){
		
		$this -> db -> from("view_recipe_ingredients_amount");
		$this -> db -> where("recipe_id",$id);
		$query = $this -> db -> get();
		$arr = $query->result_array();
		
		$xs = '<?xml version="1.0" encoding="UTF-8"?><root></root>';
		$xmldata = new SimpleXMLElement($xs, null, false);
		
		$root = $xmldata ->addChild('table', null);
		
		$thead = $root -> addChild('thead', null);
		
		$labelsNode = $thead->addChild('tr', null);
		$labelsNode ->addChild('th', 'Amount');
		$labelsNode ->addChild('th', 'Name');
		$labelsNode ->addChild('th', 'Manufacturer');
		
		$tbody = $root -> addChild('tbody', null);
		
		foreach($arr as $ingr) {
			$rowNode = $tbody->addChild('tr', null);
			$rowNode->addChild('td', $ingr['amount'].' '.$ingr['unit']);
			$rowNode->addChild('td', $ingr['name']);
			$rowNode->addChild('td', $ingr['manufacturer']);
		}
		return $xmldata;
	}
	
	public function getPostData($postid) {
		if (!is_numeric($postid)) {
			return null;
		}
		$this -> db -> from('view_recipe_post');
		$this -> db -> where('recipe_id', $postid);
		$query = $this -> db -> get();
		if (count($query->result_array())==0) {
			return null;
		}
		$myPost = array_values($query->result_array())[0];
		return $myPost;
	}
	
	public function getStepdata($postid) {
	    if (!is_numeric($postid)) {
			return null;
		}
		$this -> db -> from('view_recipe_steps');
		$this -> db -> where('recipe_id', $postid);
		$query = $this -> db -> get();
		if (count($query->result_array())==0) {
			return null;
		}
		return $query->result_array();
	}
}
?>