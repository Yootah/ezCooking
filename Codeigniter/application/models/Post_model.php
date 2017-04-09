<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Post_model extends CI_Model {
	public function getPostArray($id){
		$this -> db -> from("view_recipe_ingredients_amount");
		$this -> db -> where("recipe_id",$id);
		$query = $this -> db -> get();
		$i = "http://ezcooking.cs.ut.ee/ns/ingr";
		$arr = $query->result_array();
		$xs = '<?xml version="1.0" encoding="UTF-8"?><root xmlns:ingr="'.$i.'"></root>';
		$xmldata = new SimpleXMLElement($xs, null, false,$i);
		$root = $xmldata ->addChild('table', null, $i);
		$labelsNode = $root->addChild('row', null, $i);
		$labelsNode ->addChild('label', 'Amount', $i);
		$labelsNode ->addChild('label', 'Name', $i);
		$labelsNode ->addChild('label', 'Manufacturer', $i);
		foreach($arr as $ingr) {
			$rowNode = $root->addChild('row', null, $i);
			$rowNode->addChild('cell', $ingr['amount_value'].' '.$ingr['unit'], $i);
			$rowNode->addChild('cell', $ingr['name'], $i);
			$rowNode->addChild('cell', $ingr['manufacturer'], $i);
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
}
?>