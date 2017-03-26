<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE 

<link rel="stylesheet" href="./css/ingr_table.css"  type="text/css" />
<div class="well well-lg">
	
	<h1> Peeled banana </h1>
		
	<div class="media">
		<div class="media-left">
			<img src="<?php echo base_url(); ?>images/banana-og.png" id="recept" class="media-object" width="200px" height="200px">
		</div>
		<div class="media-body">
			<h4 class="media-heading">Banana for dummies</h4>
			<h5> Rating comes here </h5>
			<p></p>
			<div class="media">
				<div class="media-right">
					<img src="<?php echo base_url(); ?>images/avatar.png" class="media-object" id="avatar" width="60px" height="60px">
				</div>
				<div class="media-body">
					<h4 class="media-heading"> by JohnSmith123 <small id="posted_on">Posted on February 20, 2017</small></h4>
					<p> Peel the banana fast and efficiently</p>
					<p> Estimated time: 10seconds </p>
					<p> Category: Breakfast </p>
				</div>
			</div>
		</div>
	</div>
	<h1>Ingredients</h1>
	<?php
		echo $xmlstr;
	?>
	<h1>Steps</h1>
	<p>1. Just peel the banana.<p>
	<div class="col-sm-offset-2 col-sm-20">
		<button type="button" class="btn btn-default">Subscribe to category!</button>
	</div>
</div>