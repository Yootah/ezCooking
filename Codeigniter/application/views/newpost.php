<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>

	<h1>Creating a new post</h1>
	<form class="form-horizontal">
  		<div class="form-group">
    			<div class="col-md-6">
     				 <input type="text" class="form-control" id="name" placeholder="Name your recipe">
    			</div>
    		</div>
    		<h2>Ingredients</h2>
    		<div class="form-group" id="ingredients-list">
    		<div class="form-group" id="ingredients-list-elem1">
    			<div class="col-md-1">
    				<input type="text" class="form-control" id="amount" placeholder="Amount">
    				
    			</div>
    			<div class="col-md-1">
    			<input type="text" class="form-control" id="unit" placeholder="Unit">
    			</div>
    			<div class="col-md-2">
    				<input type="text" class="form-control" id="manufacturer" placeholder="Manufacturer">
    			</div>
    			<div class="col-md-1">
    				<input type="text" class="form-control" id="type" placeholder="Type">
    			</div>
    		</div>
    		<div class="form-group" id="ingredients-list-elem2">
    			<div class="col-md-1">
    				<input type="text" class="form-control" id="amount" placeholder="Amount">
    				
    			</div>
    			<div class="col-md-1">
    			<input type="text" class="form-control" id="unit" placeholder="Unit">
    			</div>
    			<div class="col-md-2">
    				<input type="text" class="form-control" id="manufacturer" placeholder="Manufacturer">
    			</div>
    			<div class="col-md-1">
    				<input type="text" class="form-control" id="type" placeholder="Type">
    			</div>
    		</div>
    		</div>
    		<button type="button" class="btn btn-default" onclick="addIngredient()">Click to add more</button>
    		<div class="form-group" id="step-list">
    			<h2>Steps</h2>
    			<div class="form-group" id="step-list-elem">
    				<div class="col-md-1">
    					<label class="steplabel"> Step1</label>
    				</div>
    				<div class="col-md-6">
    					<textarea class="form-control" maxlength="100" rows="1" id="step1" placeholder="Describe the step but make it short!"></textarea>	
    				</div>
    			</div>
    		
    		</div>
    		<button type="button" class="btn btn-default" onclick="addStep()">Click to add more</button>
    		
    		<div class="form-group" id="image-upload-area">
    			<div class="col-md-6">
    				<h2>Image</h2>
    				<p>Coming soon!</p>
    			</div>
    		</div>
    		<div class="form-group" id="image-desc-area">
    			<div class="col-md-6">
    				<textarea class="form-control" maxlength="100" rows="3" id="description" placeholder="Write a short description to be shown in the news feed!"></textarea>
    			</div>
    		</div>
    		</div>
	</form>