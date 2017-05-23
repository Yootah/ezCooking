<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>

<div class="col-sm-offset-2 col-sm-10">
<h1> <? echo lang('login_title') ?> </h1>
</div>
<div>
    <? if (validation_errors()!="" && validation_errors()!=null){ ?>
    <div class="alert alert-warning col-sm-offset-2"> <strong>Attention!</strong> <?php echo validation_errors(); ?></div>
	<?}?>
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
					<input type='submit' class="btn btn-primary" value='<?php echo lang("login_button_log_in"); ?>'/>
				</td>
			</tr>
			</table>
		</div>
	</form>
	<div class="col-sm-offset-2 col-sm-10">
		<h2> <?php echo lang("login_alter_login"); ?> </h2>
		<?
		if(!empty($authUrl)) { ?>
		    <a id="fb-login-link" href="<? echo $authUrl ?>"><img class="img" id="fbbtn" src = "<? echo base_url() ?>images/fbbutton.png" alt="Log in via Facebook"></a>
		    
        <?
        }
        ?>
	</div>
</div>
<!-- </form> -->