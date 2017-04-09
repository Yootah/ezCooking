<?php
defined('BASEPATH') OR exit('No direct script access allowed');

?>

<div class="col-sm-offset-2 col-sm-10">
<h1> <? echo lang('login_title') ?> </h1>
</div>
<div>
	<?php echo validation_errors(); ?>
	<?php echo form_open('login'); ?>
		<div class="col-sm-offset-2 col-sm-10">
			<label class="control-label col-md-2" for='username'><?php echo lang("login_username"); ?></label>
			<input type='text' class="form-control" id="username" name="username" placeholder="<?php echo lang('login_field_username'); ?>"/>
			<br/>
			<label class="control-label col-md-2" for='password'><?php echo lang("login_password"); ?></label>
			<input type='password' class="form-control" id='password' name="password" placeholder='<?php echo lang("login_field_password"); ?>'/>
			<br/>
			<table>
			<tr>
				<td>
					<input type='submit' value='<?php echo lang("login_button_log_in"); ?>'/>
				</td>
				<td>
					<label><input type="checkbox"><?php echo lang("login_checkbox"); ?></label>
				</td>
				<td>
					<button type="button" class="btn btn-link"><?php echo lang("login_forgot"); ?></button>
				</td>
			</tr>
			</table>
		</div>
	</form>
	<div class="col-sm-offset-2 col-sm-10">
		<h2> <?php echo lang("login_alter_login"); ?> </h2>
		<p> <?php echo lang("login_tba"); ?> </p>
	</div>
</div>
<!-- </form> -->