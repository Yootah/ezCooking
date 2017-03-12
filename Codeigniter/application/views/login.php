<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>

<div class="col-sm-offset-2 col-sm-10">
<h1> Welcome Back! </h1>
</div>
<form class="form-horizontal">
  <div class="form-group">
    <label class="control-label col-sm-2" for="email">Username:</label>
    <div class="col-sm-10">
      <input type="username" class="form-control" id="username" placeholder="Enter username">
    </div>
  </div>
  <div class="form-group">
    <label class="control-label col-sm-2" for="pwd">Password:</label>
    <div class="col-sm-10"> 
      <input type="password" class="form-control" id="pwd" placeholder="Enter password">
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
  </div>
</form>