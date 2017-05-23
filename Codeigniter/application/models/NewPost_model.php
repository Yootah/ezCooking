<?php
defined('BASEPATH') OR exit('No direct script access allowed');


class NewPost_model extends CI_Model {
    
    public function saveSteps($form_data, $recid) {
        $i = 1;
        foreach($form_data as $k=>$v) {
            if ($k == "step".$i){
                $onr = $i;
                $desc = filter_var($form_data[$k], FILTER_SANITIZE_SPECIAL_CHARS);
                $this->db->trans_start();
                $this->db->query("call sp_addStep('$recid', '$onr', '$desc')");
                $this->db->trans_complete();
                $i++;
            }
        }
    }
    
    public function saveIngredients($form_data, $recid) {
        
        $i = 1;
        foreach($form_data as $k=>$v) {
            if ($k == "type".$i){
                $t = filter_var($form_data['type'.$i], FILTER_SANITIZE_SPECIAL_CHARS);
                $m = filter_var($form_data['manufacturer'.$i], FILTER_SANITIZE_SPECIAL_CHARS);
                $this->db->trans_start();
                $this->db->query("call sp_addIngredient('$t', '$m', @newid)");
                $query = $this->db->query('select @newid as out_param');
                $this->db->trans_complete();
                $myid = $query->row()->out_param;
                
                $a = $form_data['amount'.$i];
                $u = $form_data['unit'.$i];
                $this->db->trans_start();
                $this->db->query("call sp_addAmount('$a', '$u', '$recid', '$myid')");
                $this->db->trans_complete();
                $i++;
            }
        }
    }
    
    public function createRecipe($form_data) {
        $rname = filter_var($form_data['recipeName'], FILTER_SANITIZE_SPECIAL_CHARS);
        $author = $_SESSION['username'];
        $etime = $form_data['estimatedTime'];
        $sdesc = filter_var($form_data['shortDescription'], FILTER_SANITIZE_SPECIAL_CHARS);
        $iurl = filter_var($form_data['imageURL'], FILTER_SANITIZE_SPECIAL_CHARS);
        $this->db->trans_start();
        $this->db->query("call sp_addRecipe('$rname', '$author', '$etime','$sdesc','$iurl', @newid)");
        $query = $this->db->query('select @newid as out_param');
        $this->db->trans_complete();
        return $query->row()->out_param;
        
        //return array($rname, $author,$etime, $sdesc, $iurl);
    }
}
?>