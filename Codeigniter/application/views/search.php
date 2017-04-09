<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>

<h1><?php echo lang("search_title"); ?></h1>
<form id='searchform'>
  <div class="input-group">
    <input type="text" class="form-control" id="search" placeholder='<?php echo lang("search_field_search_title"); ?>' name="search">

    <div class="input-group-btn">
      <button class="btn btn-default" type="submit">
        <i class="glyphicon glyphicon-search"></i>
      </button>
    </div>
  </div>
</form>
<h5><?php echo lang("search_field_sorted_by"); ?> Date (default)</h5>
<button type="button" class="btn btn-default"><?php echo lang("search_button_advanced"); ?></button>
<a href = "" data-toggle = "tooltip" data-placement = "right" title = "<?php echo lang("advanced_search_help"); ?>"><img class="img" alt="#" src="<?php echo base_url(); ?>images/qmark.png"/></a>
<br>
<div class="container">
  <div id="searchresults"></div>
</div>