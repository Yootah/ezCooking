<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html lang="en">
<head><meta http-equiv="Content-Type" content="text/html; charset=utf-8">
	<link rel="stylesheet" href="<? echo base_url() ?>css/theme1.css"  type="text/css" />
	<title> <?php echo lang('menu_logout') ?></title>
</head>

<body>

 <p class="logout-text"><? echo lang('logout_msg_success'); ?></p>
 <br>
 <br>
 <p class="logout-text"> <? echo lang('logout_msg_redirect'); ?> <a href="<? echo base_url() ?>welcome"><? echo lang('logout_msg_link'); ?></a><? echo lang('logout_msg_please'); ?> </p>

</body>