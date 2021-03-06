<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Profile_model extends CI_Model {
    public function getPostNum() {
        $uname = $_SESSION['username'];
        $query = $this->db->query("select f_count_recipes('$uname')");
        return $query->result_array();
    }
    
    public function getAllMyRecipes() {
        $uname = $_SESSION['username'];
        $this->db->from('view_recipes_by_author');
        $this->db->where('username', $uname);
        $query = $this -> db -> get();
		$result = $query -> result_array();
		return $result;
    }
    
    public function delete_Recipe($recid) {
        $uname = $_SESSION['username'];
        $this->db->trans_start();
        $this->db->query("call sp_delIngredient('$recid')");
        $this->db->query("call sp_delSteps('$recid')");
        $this->db->query("call sp_delRecipe('$recid')");
        $this->db->trans_complete();
    }
}
?>