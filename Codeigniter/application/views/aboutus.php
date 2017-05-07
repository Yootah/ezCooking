<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<? echo $map['js'] ?>
<div>
<h1><?php echo lang('aboutus_title'); ?></h1>
<p><em><?php echo lang('aboutus_disclaimer'); ?></em></p>
<p><a href="https://github.com/Yootah/ezCooking"><?php echo lang('aboutus_repo'); ?></a></p>
<div id="googleMap">
<? echo $map['html'] ?>
</div>
<br><br><br><br><br>
<li><a href="./donation">Donation!</a></li>
</div>
