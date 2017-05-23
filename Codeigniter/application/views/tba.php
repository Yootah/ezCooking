<?php
defined('BASEPATH') OR exit('No direct script access allowed');

?>
<!DOCTYPE html>
<html lang="en">
<head><meta http-equiv="Content-Type" content="text/html; charset=utf-8">
	<link rel="stylesheet" href="<? echo base_url() ?>css/theme1.css"  type="text/css" />
	<link rel="stylesheet" href="<? echo base_url() ?>css/bootstrap.css"  type="text/css" />
	<title>404 - <? echo lang('error-nothing-cool') ?>.</title> 
</head>

<body>
<h1 class="error-page">404 - <? echo lang('error-nothing-cool') ?>.</h1>
<h3 class="error-page">
 
 <blockquote>
	<i>Getting lost is just another way of saying 'going exploring'.</i> <footer class="text-muted">Justina Che</footer>
</blockquote>
 <br>
 <br>
 <? if(lang('mylang')=="English"){ ?>
 <p> But sadly, not in our case. You are lost. Literally. Period. </p>
 <br>
 Or.... There is a chance that it is our fault and here should be a page. Then yes, our fault, sorry. We will implement it as soon as possible... right?
 <br>
 <p> However, fret not, my friend, for there is a way out of this seemingly desperate situation. </p>
 <br>
 <p> For all you need to do is to head towards <a href="<? echo base_url() ?>welcome">the light</a>, that will help you reach new and amazing places!</p>
 <br>
 <? } else {?>
     <p>Paistab, et olete ära eksinud...</p>
     <br>
     <br>
     <p>Tagasi saab <a href='<? echo base_url() ?>welcome'>siit</a>.</p>
 <? } ?>
</h3>
</body>