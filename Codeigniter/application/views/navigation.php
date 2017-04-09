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
	<link rel="stylesheet" href="<? echo base_url() ?>css/bootstrap.min.css"  type="text/css" />
	<link rel="stylesheet" href="<? echo base_url() ?>css/theme1.css"  type="text/css" /> 
	<link rel="stylesheet" href="<? echo base_url() ?>css/dropdown.css"  type="text/css" /> 
	<link rel="stylesheet" href="<? echo base_url() ?>css/postStyle.css"  type="text/css" />
	
	<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
	<script src="<? echo base_url() ?>js/bootstrap.min.js"></script>
	<script src="<? echo base_url() ?>js/dropdown.js"></script>
	<script src="<? echo base_url() ?>js/newPostScript.js"></script>
	<script src="<? echo base_url() ?>js/post_search.js"></script>	
	<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBjb1xr0GjkW66pZ7wD2DevRU0kYCyecvk&callback=myMap"></script>
	<script type='text/javascript'>var php_NEWS_TO_SHOW = <? echo NEWS_TO_SHOW ?></script>
	<script src="<?php echo base_url(); ?>js/loadMoreNews.js"></script>
	

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
			<a href="<? echo base_url() ?>welcome"><img src = "<? echo base_url() ?>images/logo.png" width="100" height="100" alt="ezCooking logo"></a>
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
					
					<?php
					if (isset($_SESSION['logged_in'])) {
						echo '<li onclick="myFunction()" class="dropbtn dropdown" id="newsButton">' . lang("menu_news") . '<div id="myDropdown" class="dropdown-content">
							<a href="' . base_url() . 'welcome' . '">'. lang("menu_hot") . '</a>
							<!-- <a href="' . base_url() . 'subbed' . '">' . lang("menu_subs") . '</a> --></div></li>';
						echo '<li class="all"><a href="' . base_url() . 'profile' . '">' . lang("menu_profile") . '</a></li>';
						echo '<li class="all"><a href="' . base_url() . 'logout' . '">' . lang("menu_logout") . '</a></li>';
					}
					else {
						echo '<li class="all"><a href="' . base_url() . 'welcome' . '">' . lang("menu_news") . '</li>';
						echo '<li class="all"><a href="' . base_url() . 'login' . '">' . lang("menu_login") . '</a></li>';
						echo '<li class="all"><a href="' . base_url() . 'register' . '">' . lang("menu_register") . '</a></li>';
					}
					?>
	                <li class="all"><a href="./search"><?php echo lang("menu_search"); ?></a></li>
					<li class="all"><a href="<? echo base_url() ?>sitemap"><?php echo lang("sitemap_title"); ?></a></li>
	                
	                <li class="all"><a href="<? echo base_url() ?>aboutus"><?php echo lang("menu_aboutus"); ?></a></li>
					<li><a href="<?php echo base_url(); ?>index.php/welcome/changeLanguage/estonian"><img class="img" alt="estonian flag" src="<?php echo base_url(); ?>images/est.png"/></a></li>
					<li><a href="<?php echo base_url(); ?>index.php/welcome/changeLanguage/english"><img class="img" alt="union jack" src="<?php echo base_url(); ?>images/gb.png"/></a></li>
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
	

