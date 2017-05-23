<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<div>
    <table><tr>
	<th><img class="title-deco" alt="cooking-hat" src="<? echo base_url(); ?>images/cooking-hat.png"/> </th><td><h1><? echo lang('main_title') ?> </h1></td></tr>
	</table>
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
        		$descr = $npost->xpath('//news:descr')[$i];
        		$date = $npost->xpath('//news:posted')[$i]; ?>
        		
        		
        	<div class= "div_recipe" onClick="location.href='<? echo base_url() ?>post/<? echo $id ?>'">
				<table class="news-table"> 
					<tr>
						<td class="image-column"><img class="media-object news_pic" src= "<? echo $imgurl ?>" alt="Reference picture"></td>
						<td class="newspost-title"><? echo $name ?><br>
							<em class="newspost-descr"><? echo $descr ?></em></td>
						<td class="newspost-date"><? echo $date ?></td>
					</tr>
				</table>
			</div>
			
			<? $j++; } 
			else { $hasMoreData = true; }
        		
		$i++; endforeach; 
		$last_id = $npost->xpath('//news:recipe_id')[0]
		?>
		</div>
		<br>
		<? if($hasMoreData) {?>
		<button id="loadMoreButton" class="btn btn-primary sidebar-button"><img class="btn-icon" alt="kell" src="<? echo base_url(); ?>images/kell.png"/><?php echo lang('main_button_load_news') ?></button>
	
	<?}	?>
	<button class="btn btn-primary sidebar-button" onclick="location.href='<? echo base_url() ?>post/<? echo $id ?>';" ><img class="btn-icon" alt="random" src="<? echo base_url(); ?>images/random.png"/><?php echo lang("footer_random"); ?></button>
	        <a data-toggle = "tooltip" data-placement = "right" title = "<?php echo lang('footer_random_post_help'); ?>"><img class="img qmark-footer" alt="#" src="<?php echo base_url(); ?>images/qmark.png"/></a>
</div>
<img class="deco-img" alt="kitty cook" src="<? echo base_url(); ?>images/kitty_cook.png"/>
<script>
    $(document).ready(function() { 
        setInterval(function() {
            $.ajax({
    			type: "POST",
    			dataType: "json",
    			url: "Welcome/check_news/"+<? echo $last_id ?>,
    			success: 
    			    function(vastus_id) {
				        var last = <? echo $last_id ?>;
				        if (last != vastus_id) {
				            window.location.replace("http://ezcooking.cs.ut.ee");
				        }
    				}
            });
        }, 10000);
    });
</script>