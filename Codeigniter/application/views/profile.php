<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<div class="well">
	<h1><? echo lang("your_profile_greeting") ?><? echo $_SESSION['username'] ?>!<a href = "" data-toggle = "tooltip" data-placement = "right" title = "<?php echo lang('your_profile_help'); ?>"><img class="img" alt="#" src="<?php echo base_url(); ?>images/qmark.png"/></a></h1>
	
	<? if (isset($n))
	    foreach ($n[0] as $k=>$v) {
	        $count = $v;
	    } 
	?>
	<p><? echo lang("your_profile_recipe_count").$count ?></p>
	<?
	    foreach($myrecipes as $i => $arr) :
	        $id = $arr['recipe_id'];
	        $name = $arr['title'];
	        $imgurl = $arr['img_url'];
	        $datecreated = $arr['date_created']; 
	        ?>
	        
	        <div class= "div_recipe" onClick="location.href='<? echo base_url() ?>post/<? echo $id ?>'">
			<table>
				<tr>
				<td><img class="media-object news_pic" src= "<? echo $imgurl ?>" alt="Reference picture">		</td>
				<td class="myrecipe-title"><? echo $name ?> <em class="myrecipet-date"><? echo $datecreated ?></em></td>
				</tr>
			</table>
			</div>
        
	   <? endforeach ?>
	    <br>
	
	<p><em><? echo lang("your_profile_is_secret")?></em><a href = "" data-toggle = "tooltip" data-placement = "right" title = "<?php echo lang('your_profile_secret_help'); ?>"><img class="img" alt="#" src="<?php echo base_url(); ?>images/qmark.png"/></a></p>
	
</div>