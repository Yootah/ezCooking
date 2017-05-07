</td>
<? if (isset($rand)) { $id=$rand[array_rand($rand)]['ID']; } ?>
<td class = "td_blank_area"></td>
<td class = "td_action_bar">
	<h2><?php echo lang("footer_actions"); ?><a data-toggle = "tooltip" data-placement = "right" title = "<?php echo lang('footer_help'); ?>"><img class="img" alt="#" src="<?php echo base_url(); ?>images/qmark.png"/></a></h2>
    <table>
	<? 
	    if (isset($_SESSION['logged_in'])) {
    ?> 
    
	        <br><br>
	        <tr>
	        <td><input type="button" class="btn btn-info sidebar-button" value="<? echo lang('footer_new_post'); ?>" onclick="location.href='<? echo base_url() ?>newPost/'" /> </td>
	        <td><a data-toggle = "tooltip" data-placement = "right" title = "<?php echo lang('footer_new_post_help'); ?>"><img class="img qmark-footer" alt="#" src="<?php echo base_url(); ?>images/qmark.png"/></a></td>
	        </tr>
    <?
	    }
	?>
	<tr>
	        <td><input type="button" class="btn btn-info sidebar-button" value='<?php echo lang("footer_random"); ?>' onclick="location.href='<? echo base_url() ?>post/<? echo $id ?>';" /></td>
	        <td><a data-toggle = "tooltip" data-placement = "right" title = "<?php echo lang('footer_random_post_help'); ?>"><img class="img qmark-footer" alt="#" src="<?php echo base_url(); ?>images/qmark.png"/></a></td>
	        </tr>
	 </table>
	
</td>
<td class= "td_borders"></td>
</tr>
<tr>
<td class= "td_borders"></td>
	<td colspan="3">
		<div class="container text-center div_copyright_info">
			<hr>
			<blockquote>
				<p  class="footer text-left text-muted"><?php echo lang("footer_quote"); ?></p>
				<footer class="text-left text-muted">ezCooking team</footer>
				<a href="http://ezcooking.cs.ut.ee/welcome"><?php echo lang('welcome_page_sm'); ?></a>
  <a href="http://ezcooking.cs.ut.ee/login"><?php echo lang('login_page_sm'); ?></a>
  <a href="http://ezcooking.cs.ut.ee/register"><?php echo lang('register_page_sm'); ?></a>
  <a href="http://ezcooking.cs.ut.ee/search"><?php echo lang('search_page_sm'); ?></a>
  <a href="http://ezcooking.cs.ut.ee/aboutus"><?php echo lang('aboutus_page_sm'); ?></a>
  <a href="http://ezcooking.cs.ut.ee/newPost"><?php echo lang('newpost_page_sm'); ?></a>
  <a href="http://ezcooking.cs.ut.ee/post/2#/simple"><?php echo lang('post1_page_sm'); ?></a>
  <a href="http://ezcooking.cs.ut.ee/post/4"><?php echo lang('post2_page_sm'); ?></a>
  <a href="http://ezcooking.cs.ut.ee/post/5"><?php echo lang('post3_page_sm'); ?></a>
  <a href="http://ezcooking.cs.ut.ee/post/20#/simple"><?php echo lang('post4_page_sm'); ?></a>
  <a href="http://ezcooking.cs.ut.ee/post/17#/simple"><?php echo lang('post5_page_sm'); ?></a>
			</blockquote>
			<p class="footer">&copy; Copyright 2017</p>
		</div>
	</td>
<td class= "td_borders"></td>
</tr>

</table>
</body>
</html>