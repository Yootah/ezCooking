<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<link href='http://fonts.googleapis.com/css?family=Oleo+Script' rel='stylesheet' type='text/css'>
<? if (isset($n))
	    foreach ($n[0] as $k=>$v) {
	        $count = $v;
	    } 
	?>
<div class="well">
	<table class="rec_table"><tr><td><h1 class="greeting"><? echo lang("your_profile_greeting") ?><? echo $_SESSION['username'] ?>!</h1></td><td class="btn-new"> <? echo lang("your_profile_recipe_count") ?><strong class="rec-count"><? echo $count ?></strong></td></tr></table>
	
	<table class= "rec_table">
	<hr>
	<h2 class="ur_rec"><? echo lang('your_rec')?> </h2>
	
	<?
	    foreach($myrecipes as $i => $arr) :
	        $id = $arr['recipe_id'];
	        $name = $arr['title'];
	        $imgurl = $arr['img_url'];
	        $datecreated = $arr['date_created']; 
	        ?>
	        
	        <div class= "div_recipe" onClick="location.href='<? echo base_url() ?>post/<? echo $id ?>'">
			
				<tr>
				<td><img class="media-object news_pic" src= "<? echo $imgurl ?>" alt="Reference picture" onClick="location.href='http://ezcooking.cs.ut.ee/post/<?echo $id; ?>'">		</td>
				<td class="myrecipe-title" onClick="location.href='http://ezcooking.cs.ut.ee/post/<?echo $id; ?>'"><? echo $name ?> </td>
				<td><em class="myrecipet-date"><? echo $datecreated ?></em></td>
				<td class="deltab"><input class=delbutton type="image" onClick="location.href='http://ezcooking.cs.ut.ee/profile/delPost/<? echo $id ?>'" src="<?php echo base_url(); ?>images/delete_post.png"></td>
				</tr>
			
			</div>
			
            <!-- <button onclick="location.href='http://ezcooking.cs.ut.ee/profile/delPost/<? echo $id ?>'" type="button"> 
            <? echo lang("your_profile_postdel") ?></button> -->
        
	   <? endforeach ?>
	    <br>
	    <tr>
	        <td></td>
	        <td></td>
	        <td></td>
	        <td class="btn-new">
    	    <input 
    	        type="button" 
    	        class="btn btn-primary sidebar-button" 
    	        value="<? echo lang('footer_new_post'); ?>" 
    	        onClick="location.href='http://ezcooking.cs.ut.ee/newPost/'"
    	    />
            <a 
                data-toggle = "tooltip" 
                data-placement = "right" 
                title = "<?php echo lang('footer_new_post_help'); ?>"
            >
                <img class="img qmark-footer" alt="#" src="<?php echo base_url(); ?>images/qmark.png"/>
            </a>
        </td>
        </tr>
        </table>
	<br>
</div>