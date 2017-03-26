<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Post_model extends CI_Model {
	public function getPostArray(){
		$this -> db -> select(
		"amount_value, unit, ingredient.name, ingredient.manufacturer 
		FROM (ingredient JOIN amount ON amount.ingredient_id = ingredient.ID)
		WHERE recipe_id=2"
		);
		$query = $this -> db -> get();
		$arr = $query->result_array();
		$xs = '<?xml version="1.0" encoding="UTF-8"?><root></root>';
		$xml_data = new SimpleXMLElement($xs);
		$root = $xml_data->addChild('ingr_table');
		$subnode = $root->addChild('ingredient');
		$subnode->addChild('ilabel', 'Amount');
		$subnode->addChild('ilabel', 'Name');
		$subnode->addChild('ilabel', 'Manufacturer');
		foreach($arr as $ingr) {
			$subnode = $root->addChild('ingredient');
			$subnode->addChild('cell', $ingr['amount_value'] . " " . $ingr['unit']);
			$subnode->addChild('cell', $ingr['name']);
			$subnode->addChild('cell', $ingr['manufacturer']);
		}
		return $xml_data->asXML();
	}	
}
?>