<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>

	<h1>Register</h1>
	<form class="form-horizontal">
  <div class="form-group">
    <div class="col-md-4">
      <input type="text" class="form-control" id="username" placeholder="Username">
    </div>
  </div>
  <div class="form-group">
    <div class="col-md-4">
      <input type="email" class="form-control" id="email" placeholder="Email">
    </div>
    <label class="checkbox-inline"><input type="checkbox" id="email_private"> Private</label>
  </div>
  <div class="form-group">
    <div class="col-md-4"> 
      <input type="password" class="form-control" id="pwd" placeholder="Password">
    </div>
  </div>
  <div class="form-group">
    <div class="col-md-4"> 
      <input type="password" class="form-control" id="repwd" placeholder="Repeat Password">
    </div>
  </div>
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
    <button type="button" class="btn btn-default">Sign me up!</button>
    </div>
    <br>
  </div>
</form>