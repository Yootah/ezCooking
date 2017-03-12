<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>

<h1>Quick search for your specified recipes</h1>
<form>
  <div class="input-group">
    <input type="text" class="form-control" placeholder="Search">
    <div class="input-group-btn">
      <button class="btn btn-default" type="submit">
        <i class="glyphicon glyphicon-search"></i>
      </button>
    </div>
  </div>
</form>
<h5>Sorted by:Date (default)</h5>
<button type="button" class="btn btn-default">Advanced Search</button><br></br>
<div class="container">
<table class="table table-bordered">
    <thead>
      <tr>
        <th>Recipe name</th>
        <th>Author</th>
        <th>Date added</th>
      </tr>
    </thead>
    <tbody>
    </tbody>
  </table>
</div>