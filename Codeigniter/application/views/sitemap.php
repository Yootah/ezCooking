<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>

<div>
<h1><?echo lang('sitemap_title')?></h1>
<ul>
  <li><a href="http://ezcooking.cs.ut.ee/welcome"><?php echo lang('welcome_page_sm'); ?></a></li>
  <li><a href="http://ezcooking.cs.ut.ee/login"><?php echo lang('login_page_sm'); ?></a></li>
  <li><a href="http://ezcooking.cs.ut.ee/register"><?php echo lang('register_page_sm'); ?></a></li>
  <li><a href="http://ezcooking.cs.ut.ee/search"><?php echo lang('search_page_sm'); ?></a></li>
  <li><a href="http://ezcooking.cs.ut.ee/aboutus"><?php echo lang('aboutus_page_sm'); ?></a></li>
  <li><a href="http://ezcooking.cs.ut.ee/newPost"><?php echo lang('newpost_page_sm'); ?></a></li>
</ul>
<h2><?php echo lang('sitemap_logged_in'); ?></h2>
<ul>
    <li><a href="http://ezcooking.cs.ut.ee/profile#/simple"><?php echo lang('profile_page_sm'); ?></a></li>
</ul>
</div>