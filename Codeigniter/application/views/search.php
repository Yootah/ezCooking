<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<script type="text/javascript" src="<? echo base_url() ?>js/jquery.history.min.js"></script>
<script type="text/javascript">
    var lang_simple='<?php echo lang("search_simple"); ?>'; 
    var lang_advanced='<?php echo lang("search_button_advanced"); ?>';
    var lang_hide = '<? echo lang("search_button_simple"); ?>';
    console.log(lang_simple);
</script>
<script src="<? echo base_url() ?>js/post_search.min.js"></script>

<form id='searchform'>
    <table><td><image class="title-deco" src="<? echo base_url(); ?>images/sher.png"></image> </td><td><h1><?php echo lang("search_title"); ?></h1></td></table>
    <br>
  <div class="input-group container">
    
    <input type="text" class="form-control" id="search" placeholder='<?php echo lang("search_field_search_title"); ?>' name="search">

    <div class="input-group-btn">
      <button class="btn btn-default" type="submit">
        <i class="glyphicon glyphicon-search"></i>
      </button>
    </div>
  </div>
  <br>
<div class="container">
<label><?php echo lang("search_field_sorted_by"); ?></label><br>
<form-group class="sort-type-select">
    <label class="radio-inline"><input type="radio" value="date" name="order" checked ><? echo lang("search_table_date"); ?></label>
    <label class="radio-inline"><input type="radio" value="title" name="order"><? echo lang("search_table_name"); ?></label>
    <label class="radio-inline"><input type="radio" value="author" name="order"><? echo lang("search_table_author"); ?></label>
</form-group>
</div>
<br>
<div class="container">
  <div id="advancedSearch"> 
      <input type="text" name="Author" class="form-control" id="auth-name" placeholder="<? echo lang('search_table_author'); ?>">
      <br>
  </div>
  
  <button type="button" id="advanced-btn" class="btn btn-default"><a href="#/advanced"><?php echo lang("search_button_advanced"); ?></a></button>
</div>


</form>
<br>
<div class="container">
  <div id="searchresults"></div>
</div>