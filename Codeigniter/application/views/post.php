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
				<h5> Rating comes here </h5>
				<p></p>
				<div class="media">
					<div class="media-right">
						<img src="<?php echo base_url(); ?>images/avatar.png" class="media-object" id="avatar" alt="<? echo $postData['author'] ?>'s avatar picture">
					</div>
					<div class="media-body">
						<h4 class="media-heading"> by <? echo $postData['author'] ?> <small id="posted_on">Posted on <? echo $postData['date_posted'] ?></small></h4>
						<p> <? echo $postData['short_description'] ?></p>
						<p> Estimated time: <? echo $postData['estimated_time'] ?> </p>
						<!--<p> Category: Breakfast </p>-->
					</div>
				</div>
			</div>
		</div>
		<h1>Ingredients</h1>
		<!--<?php
			echo $xmlstr->asXML();
		?> -->
		<h1>Steps</h1>
		<!-- <p>1. Just peel the banana.<p>
		<div class="col-sm-offset-2 col-sm-20">
			<button type="button" class="btn btn-default">Subscribe to category!</button>
		</div> -->
	</div>
</div>