<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<div class="well">
	<h1><? echo lang("your_profile") ?><a href = "" data-toggle = "tooltip" data-placement = "right" title = "<?php echo lang('your_profile_help'); ?>"><img class="img" alt="#" src="<?php echo base_url(); ?>images/qmark.png"/></a></h1>
	<p><? echo lang("your_profile_greeting") ?><? echo $_SESSION['username'] ?>!</p>
	<p><em><? echo lang("your_profile_is_secret")?></em></p>
</div>