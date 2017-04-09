</td>
<? if (isset($rand)) { $id=$rand[array_rand($rand)]['ID']; } ?>
<td class = "td_blank_area"></td>
<td class = "td_action_bar">
	<h2><?php echo lang("footer_actions"); ?></h2>
	<br><br><br>
	<input type="button" class="btn btn-info" value='<?php echo lang("footer_random"); ?>' onclick="location.href='<? echo base_url() ?>post/<? echo $id ?>';" />
	
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
			</blockquote>
			<p class="footer">&copy; Copyright 2017</p>
		</div>
	</td>
<td class= "td_borders"></td>
</tr>

</table>
</body>
</html>