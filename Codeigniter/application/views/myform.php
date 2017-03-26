<html>
<head>
<title>Login Form</title>
</head>
<body>

<?php echo validation_errors(); ?>

<?php echo form_open('verifylogin'); ?>
	<label for='username'>Username:</label>
	<input type='text' size='20' id='username' name='username'/>
	<br/>
	<label for='password'>Password:</label>
	<input type='password' size='20' id='password' name='password'/>
	<br/>
	<input type='submit' value='Login'/>
</form>
  <!--<div class="form-group">
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
  <div class="col-sm-offset-2 col-sm-10">
  <button type="button" class="btn btn-link">Forgot your password?</button>
  </div>
  <div class="col-sm-offset-2 col-sm-10">
  <h2> Or log in via: </h2>
  <p>Work in progress :S </p>
  </div> -->
</form>
</body>