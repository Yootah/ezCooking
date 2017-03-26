<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>

<h1>Register</h1>
<?php echo validation_errors(); ?>
<?php echo form_open('register'); ?>
<div class="col-sm-offset-2 col-sm-10">
	<label class="control-label col-sm-2" for='username'>Username:</label>
			<input type='text' class="form-control" size='20' id='username' placeholder="Username" name='username'/>
			<br/>
	<label class="control-label col-sm-2" for='email'>Email:</label>
			<input type='text' class="form-control" size='20' id='email' placeholder="Email" name='email'/>
	<label class="checkbox-inline"><input type="checkbox" id="email_private"> Private</label>
	<br/>
	
	<label class="control-label col-sm-2" for='password'>Password:</label>
			<input type='password' class="form-control" size='20' id='password' placeholder="Password" name='password'/>
			<br/>
	<label class="control-label col-sm-2" for='passwordr'>Repeat Password:</label>
			<input type='password' class="form-control" size='20' id='passwordr' placeholder="PasswordR" name='passwordr'/>
			<br/>
	<div class="form-group"> 
		<div class="col-md-4">
			<div class="checkbox">
				<label><input type="checkbox"> Send notifications via Email</label>
			</div>
		</div>
	</div>
	<div class="form-group"> 
		<div class="col-md-4">
			<h2>Your Avatar</h2>
			<p>Coming soon!</p>
		</div>
	</div>
	<div class="form-group"> 
		<div class="col-md-4">
			<input type='submit' value='Register'/>
		</div>
		<br>
	</div>
</div>
</form>