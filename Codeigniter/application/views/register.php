<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>

<h1><?php echo lang("register_title"); ?></h1>
<?php echo validation_errors(); ?>
<?php echo form_open('register'); ?>
<div class="col-sm-offset-2 col-sm-10">
	<label class="control-label col-sm-2" for='username'><?php echo lang("register_username"); ?></label>
			<input type='text' class="form-control" size='20' id='username' placeholder='<?php echo lang("register_field_username"); ?>' name='username'/>
			<br/>
	<label class="control-label col-sm-2" for='email'><?php echo lang("register_email"); ?></label>
			<input type='text' class="form-control" size='20' id='email' placeholder='<?php echo lang("register_field_email"); ?>' name='email'/>
	<label class="checkbox-inline"><input type="checkbox" id="email_private"> <?php echo lang("register_checkbox_private"); ?></label>
	<br/>
	
	<label class="control-label col-sm-2" for='password'><?php echo lang("register_password"); ?></label>
			<input type='password' class="form-control" size='20' id='password' placeholder='<?php echo lang("register_field_password"); ?>' name='password'/>
			<br/>
	<label class="control-label col-sm-2" for='passwordr'><?php echo lang("register_password_confirm"); ?></label>
			<input type='password' class="form-control" size='20' id='passwordr' placeholder='<?php echo lang("register_field_password_confirm"); ?>' name='passwordr'/>
			<br/>
	<div class="form-group"> 
		<div class="col-md-4">
			<div class="checkbox">
				<label><input type="checkbox"> <?php echo lang("register_checkbox_notify"); ?></label>
			</div>
		</div>
	</div>
	<div class="form-group"> 
		<div class="col-md-4">
			<h2><?php echo lang("register_avatar"); ?></h2>
			<p><?php echo lang("register_tba"); ?></p>
		</div>
	</div>
	<div class="form-group"> 
		<div class="col-md-4">
			<input type='submit' value='<? echo lang("register_button_register"); ?>'>
		</div>
		<br>
	</div>
</div>
</form>