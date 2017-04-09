<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class News_model extends CI_model {
	public function getLatestNews($start) {
		$this -> db -> from('view_news_by_date');
		$this -> db -> limit(NEWS_TO_SHOW+1, $start);
		$query = $this -> db -> get();
		$result = $query -> result_array();
		if ($start>=NEWS_TO_SHOW) {
			return $result;
		}
		
		$ns = "http://ezcooking.cs.ut.ee/ns/news";
		$xs = '<?xml version="1.0" encoding="UTF-8"?><root xmlns:news="'.$ns.'"></root>';
		$xmldata = new SimpleXMLElement($xs, null, false, $ns);
		foreach($result as $i => $newspost) {
			$rowNode = $xmldata-> addChild('newspost', null, $ns);
			foreach ($newspost as $fieldname => $fieldvalue) {
				$rowNode -> addChild($fieldname, $fieldvalue, $ns);
			}
		}
		return $xmldata->asXML();
	}
}
?>