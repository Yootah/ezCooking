<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>



<?php echo form_open('register'); ?>
<div class="col-md-offset-2 col-md-7">
    <h1><?php echo lang("register_title"); ?></h1>
    <? if (validation_errors()!="" && validation_errors()!=null){ ?>
        <div class="alert alert-warning col-sm-offset-2"><strong>Attention! <?php echo validation_errors(); ?></strong></div>
    <? } ?>
    <br>
    <br>
	<label for='username'><? echo lang("register_username"); ?></label>
			<input type='text' class="form-control" size='20' id='username' placeholder='<?php echo lang("register_field_username"); ?>' name='username'/>
			<br/>
	<label class="control-label col-md-2" for='email'><? echo lang("register_email"); ?></label>
			<input type='text' class="form-control" size='20' id='email' placeholder='<?php echo lang("register_field_email"); ?>' name='email'/>
	<br>
	
	<label class="control-label col-md-2" for='password'><? echo lang("register_password"); ?></label>
			<input type='password' class="form-control" size='20' id='password' placeholder='<?php echo lang("register_field_password"); ?>' name='password'/>
    <br>
	<label class="control-label col-md-2" for='passwordr'><? echo lang("register_password_confirm"); ?></label>
			<input type='password' class="form-control" size='20' id='passwordr' placeholder='<?php echo lang("register_field_password_confirm"); ?>' name='passwordr'/>
    <br>
    <br>
	<div class="form-group"> 
		<div class="col-md-4">
			<input class="btn btn-primary" type='submit' value='<? echo lang("register_button_register"); ?>'>
		</div>
		<br>
	</div>
</div>
</form>