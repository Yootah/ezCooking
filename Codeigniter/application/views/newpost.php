<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<div class = "well">
	<h1><?php echo lang('post_recp_create_new'); ?></h1>
	<form action="http://ezcooking.cs.ut.ee/newPost/submit_recipe" method="post" accept-charset="utf-8" class="form-horizontal" id="new_recipe_form">
  		<div class="form-group">
    			<div class="col-md-6">
     				 <input type="text" name="recipeName" class="form-control" id="name" placeholder= "<?php echo lang('post_recp_nameing'); ?>">
     				 <input type="text" name="estimatedTime" class="form-control" id="time" placeholder= "<?php echo lang('post_recp_length'); ?>">
    			</div>
    		</div>
    		<h2><?php echo lang('post_ingredients'); ?></h2>
    		<div class="ingredients-list">
	    		<div class="row">
	    			<div class="ingredient-data" id="ingredients-list-elem1">
		    			<div class="col-md-1" id="order-nr">
		    				1
		    			</div>
		    			<div class="col-md-2">
		    				<input type="text" class="form-control" name="amount1" id="amount" placeholder="<?php echo lang('post_recp_amount'); ?>">
		    				
		    			</div>
		    			<div class="col-md-2">
		    				<input type="text" class="form-control" name="unit1" id="unit" placeholder="<?php echo lang('post_recp_unit'); ?>">
		    			</div>
		    			<div class="col-md-3">
		    				<input type="text" class="form-control" name="manufacturer1" id="manufacturer" placeholder="<?php echo lang('post_recp_manufacturer'); ?>">
		    			</div>
		    			<div class="col-md-2">
		    				<input type="text" class="form-control" name="type1" id="type" placeholder="<?php echo lang('post_recp_type'); ?>">
		    			</div>
	    			</div>
	    		</div>
	    	</div>
    		    <button type="button" class="btn" onclick="addIngredient()"><?php echo lang('post_recp_addingr'); ?></button>
    		<div class="form-group" id="step-list">
    			<h2><?php echo lang('post_steps'); ?></h2>
    			<div class="form-group" id="step-list-elem">
    				<div class="col-md-1">
    					<label class="steplabel"> Step1</label>
    				</div>
    				<div class="col-md-6">
    					<textarea class="form-control" maxlength="100" name="step1" rows="1" id="step1" placeholder="<?php echo lang('post_recp_desc'); ?>"></textarea>	
    				</div>
    			</div>
    		
    		</div>
    		<button type="button" class="btn" onclick="addStep()"><?php echo lang('post_recp_addsteps'); ?></button>
    		
    		<div class="form-group" id="image-upload-area">
    			
    			<h2><?php echo lang('post_recp_image'); ?></h2>
    			<div class="col-md-6">
    				<input type="text" class="form-control" name="imageURL" id="img-url" placeholder="<?php echo lang('post_recp_imageurl'); ?>">
    			</div>
    		</div>
    		<div class="form-group" id="recipe-desc-area">
    		    <h2><?php echo lang('post_recp_shortdesc'); ?></h2>
    			<div class="col-md-6">
    				<textarea class="form-control" maxlength="100" rows="3" name="shortDescription" id="description" placeholder="<?php echo lang('post_recp_shortdescdesc'); ?>"></textarea>
    			</div>
    		</div>
    		</div>
    		<input type="submit" value="<?php echo lang('post_me'); ?>" class="btn btn-info">
	</form>
</div>