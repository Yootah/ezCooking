<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<div>
	<h1> <? echo lang('main_title') ?> </h1>
	<div id="newsbody">
	<?
		$newsdata = new SimpleXMLElement($newsXML);
		$i = 0;
		$j = 0;
		$hasMoreData = false;
		foreach( $newsdata->xpath('//news:newspost') as $npost ):  
        		if($j < NEWS_TO_SHOW) {
        		$id = $npost->xpath('//news:recipe_id')[$i]; 
        		$imgurl = $npost->xpath('//news:img_url')[$i];
        		$name = $npost->xpath('//news:title')[$i];
        		$descr = $npost->xpath('//news:descr')[$i]; ?>
        		
        		
        		<div class= "div_recipe" onClick="location.href='<? echo base_url() ?>post/<? echo $id ?>'">
			<table>
				<tr>
				<td><img class="media-object news_pic" src= "<? echo $imgurl ?>" alt="Reference picture">		</td>
				<td class="newspost-title"><? echo $name ?><br>
					<em class="newspost-descr"><? echo $descr ?></em></td>
				</tr>
			</table>
			</div>
			
			<? $j++; } 
			else { $hasMoreData = true; }
        		
		$i++; endforeach; ?>
		</div>
		<? if($hasMoreData) {?>
		<button id="loadMoreButton" class="btn btn-primary"><?php echo lang('main_button_load_news') ?></button>
	<?} ?>
</div>