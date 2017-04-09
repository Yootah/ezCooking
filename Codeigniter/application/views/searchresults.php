<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>

<div class="searchresults">
<table class="table table-bordered">
	<thead>
      <tr>
        <th><?php echo lang("search_table_name"); ?></th>
        <th><?php echo lang("search_table_author"); ?></th>
        <th><?php echo lang("search_table_date"); ?></th>
      </tr>
    </thead>
    <tbody>
	<?
	foreach($db_resp as $response) : 
		$id = $response['id']; ?>
      <tr>
        <td><a href="<?php echo base_url(); ?>post/<? echo $id ?>"><?php echo $response['title']; ?></a></td>
        <td><?php echo $response['author']; ?></td>
        <td><?php echo $response['date']; ?></td>
      </tr>
	</tbody>
	<? endforeach; ?>
</table>
</div>