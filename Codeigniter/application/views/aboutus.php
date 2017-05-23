<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<? echo $map['js'] ?>
<div>
<table><td><image class="title-deco" src="<? echo base_url(); ?>images/nerd.png"></image> </td><td><h1><?php echo lang('aboutus_title'); ?></h1></td></table>
<p><em><?php echo lang('aboutus_disclaimer'); ?></em></p>
<p><a href="https://github.com/Yootah/ezCooking"><?php echo lang('aboutus_repo'); ?></a></p>
<div id="googleMap" >
<? echo $map['html'] ?>
</div>
<li><a href="./donation">Donation!</a></li>
</div>
