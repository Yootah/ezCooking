<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Search_model extends CI_Model {
	public function getSearchArray($search_name, $auth, $order){
	    $arr = array();
	    $this -> db -> from('view_recipe_search');
	    if($auth!="")
    	    $this->db->like("author", $auth);
	
	    if ($search_name!="") {
    	    
    		$names = explode(" ", $search_name);
    		for($i=0;$i < count($names);$i++){
    			if($i == 0){
    			    $this->db->like("title", $names[$i]);
    			}
    			else{
    			    $this->db->or_like("title", $names[$i]);
    			}
    		}
    		
	    }
		
		switch($order){
		    case "title":
		        $this->db->order_by("lower(title)", "ASC");break;
		    case "author":
		        $this->db->order_by("lower(author)", "ASC");break;
		    default:
		        $this->db->order_by("date", "DESC");
		}
		
		$query = $this -> db -> get();
    	$arr = $query->result_array();
		
		return $arr;
	}
}
?>