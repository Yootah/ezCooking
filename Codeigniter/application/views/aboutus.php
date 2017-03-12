<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="en">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
	<title>Post</title>
	<?php 
    if(isset($title)){
    echo "<title>" . $title . "</title>";
    } else {
    	echo "<title>Tiitli muutuja t端hi</title>";
	}
    ?>
	<link rel="stylesheet" href="<?php echo base_url(); ?>css/bootstrap.min.css"  type="text/css" />
	<link rel="stylesheet" href="<?php echo base_url(); ?>css/postStyle.css"  type="text/css" /> 
	<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
	<script src="<?php echo base_url(); ?>js/bootstrap.min.js"></script>
	
	
</head>
<body>
<h1>Cheers from ezCooking team </h1>
<h4><small><i>Disclaimer: Some of us have no idea whats going on</i></small></h4>
<a href="https://github.com/Yootah/ezCooking">Reference to our repository</a>
</body>
</html>