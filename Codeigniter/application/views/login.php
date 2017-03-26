<?php
defined('BASEPATH') OR exit('No direct script access allowed');

?><!DOCTYPE html>

<div class="col-sm-offset-2 col-sm-10">
<h1> Welcome Back! </h1>
</div>
<div>
	<?php echo validation_errors(); ?>
	<?php echo form_open('login'); ?>
		<div class="col-sm-offset-2 col-sm-10">
			<label class="control-label col-sm-2" for='username'>Username:</label>
			<input type='text' class="form-control" size='20' id='username' placeholder="Username" name='username'/>
			<br/>
			<label class="control-label col-sm-2" for='password'>Password:</label>
			<input type='password' class="form-control" size='20' id='password' placeholder="Password" name='password'/>
			<br/>
			<table>
			<tr>
				<td>
					<input type='submit' value='Login'/>
				</td>
				<td>
					<label><input type="checkbox"> Remember me</label>
				</td>
				<td align="right">
					<button type="button" class="btn btn-link">Forgot your password?</button>
				</td>
			</tr>
			</table>
		</div>
	</form>
	<!-- <div class="form-group">
		<label class="control-label col-sm-2" for="email">Username:</label>
		<div class="col-sm-10">
			<input type="username" class="form-control" id="username" placeholder="Enter username" required>
		</div>
	</div>
	<div class="form-group">
		<label class="control-label col-sm-2" for="pwd">Password:</label>
		<div class="col-sm-10"> 
			<input type="password" class="form-control" id="pwd" placeholder="Enter password" required>
		</div>
	</div>
	<div class="form-group"> 
		<div class="col-sm-offset-2 col-sm-10">
			<div class="checkbox">
				<label><input type="checkbox"> Remember me</label>
			</div>
		</div>
	</div>
	<div class="form-group"> 
		<div class="col-sm-offset-2 col-sm-10">
			<button type="login" class="btn btn-default">Log in</button>
		</div>
	</div>
	</form>
	<div class="col-sm-offset-2 col-sm-10">
		<button type="button" class="btn btn-link">Forgot your password?</button>
	</div>  -->
	<div class="col-sm-offset-2 col-sm-10">
		<h2> Or log in via: </h2>
		<p>Work in progress :S </p>
	</div>
</div>
<!-- </form> -->