<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>

<!DOCTYPE html>
<html lang="en">
<head><meta http-equiv="Content-Type" content="text/html; charset=utf-8">
	
	
	<?php 
    if(isset($title)){
    echo "<title>" . $title . "</title>";
    } else {
    	echo "<title>Tiitli muutuja tyhi</title>";
	}
    ?>
	<link rel="stylesheet" href="./css/bootstrap.min.css"  type="text/css" />
	<link rel="stylesheet" href="./css/theme1.css"  type="text/css" /> 
	<link rel="stylesheet" href="./css/dropdown.css"  type="text/css" /> 
	<link rel="stylesheet" href="./css/postStyle.css"  type="text/css" /> 
	<link rel="stylesheet" href="./css/ingr_table.css"  type="text/css" /> 
	
	<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
	<script src="./js/bootstrap.min.js"></script>
	<script src="./js/dropdown.js"></script>
	<script src="./js/newPostScript.js"></script>
	

<!-- <style>
table, th, td {
    border: 1px solid black;
    padding: 5px;
}
</style> -->

</head>
<body>
<table class = "global-table">
<tr>
<td class= "td_borders"></td>
<td colspan="3">
	<nav class="navbar navbar-default">
	    <div class="container-fluid">
	    <table>
	<tr>
	<td>
			<a href="./welcome"><img src = "./images/logo.png" width="100" height="100" alt="ezCooking logo"></a>
	</td>
	<td>
			<!-- Hamburger icon -->
			<div class="navbar-header">
				<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
					<span class="sr-only">Toggle navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
			</div>
	        <!-- Menu Items-->
	        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
	            <ul class="nav navbar-nav">
					<!-- <li><a href="" class="navbar-brand">Uudised</a></li> -->
					<!--
					
					<li class="all"><a href="./welcome">News</a></li>
					-->
					<li onclick="myFunction()" class="dropbtn dropdown" id="newsButton">News
					<div id="myDropdown" class="dropdown-content">
						<a href="./welcome">Hot</a>
						<a href="./subbed">Subs</a>
						</div>
						</li>
	                <li class="all"><a href="./search">Search</a></li>
	                <li class="all"><a href="./login">Log in</a></li>
	                <li class="all"><a href="./register">Register</a></li>
	                <li class="all"><a href="./aboutus">About us</a></li>
	            </ul>
	        </div>
	</td></tr></table>
	    </div>
	</nav>
</td>
<td class= "td_borders"></td>
</tr>
<tr>
<td class= "td_borders"></td>
<td class= "td_body">
	
<script>
/* When the user clicks on the button, 
toggle between hiding and showing the dropdown content */
function myFunction() {
    document.getElementById("myDropdown").classList.toggle("show");
}

// Close the dropdown if the user clicks outside of it
window.onclick = function(event) {
  if (!event.target.matches('.dropbtn')) {

    var dropdowns = document.getElementsByClassName("dropdown-content");
    var i;
    for (i = 0; i < dropdowns.length; i++) {
      var openDropdown = dropdowns[i];
      if (openDropdown.classList.contains('show')) {
        openDropdown.classList.remove('show');
      }
    }
  }
}
</script>
