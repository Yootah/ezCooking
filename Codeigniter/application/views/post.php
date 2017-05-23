<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<?
	if(!isset($postData)){
		redirect('welcome');
	}
?>
<div class="well well-lg">
	<div class="well">
		<h1><? echo $postData['recipe_title'] ?></h1>
		
		
		<div class="media">
			<div class="media-left">
				<img src="<?php echo $postData['image_url'] ?>" id="recipe_pic" class="media-object" alt="A photo of <? echo $postData['recipe_title'] ?>">
			</div>
			<div class="media-body">
				<p></p>
				<div class="media">
					<div class="media-right">
						<img src="<?php echo base_url(); ?>images/avatar.png" class="media-object" id="avatar" alt="<? echo $postData['author'] ?>'s avatar picture">
					</div>
					<div class="media-body">
						<h4 class="media-heading"><?php echo lang('post_author'); ?><? echo $postData['author'] ?> <small id="posted_on"><?php echo lang('post_posted_on'); ?><? echo $postData['date_posted'] ?></small></h4>
						<p> <? echo $postData['short_description'] ?></p>
						<p> <?php echo lang('post_eta'); ?>: <? echo $postData['estimated_time'] ?> </p>
						<!--<p> Category: Breakfast </p>-->
					</div>
				</div>
			</div>
		</div>
		<h1><?php echo lang('post_ingredients'); ?></h1>
		<table class="table" id="ingr-table"><thead><tr>
		<th><?php echo lang('post_recp_amount'); ?></th>
		<th><?php echo lang('post_recp_type'); ?></th>
		<th><?php echo lang('post_recp_manufacturer'); ?></th>
		</tr></thead><tbody>
		    <? foreach ($xml->table->tbody->tr as $tablerow) {
		        echo "<tr>"; 
		        foreach ($tablerow as $cell=>$val) {
		            echo "<td>".$val."</td>";
		        }
		        echo "</tr>";
		    }
		    ?>
		</tbody>
		</table>
		
		<h1><?php echo lang('post_steps'); ?></h1>
		<ol class="step-list">
		    <?
		    if (isset($stepdata)) {
		        foreach($stepdata as $key=>$value) {
		            echo "<li>".$value['description']."</li>";
		        }
		    }
		    ?>
		</ol>
	</div>
</div>