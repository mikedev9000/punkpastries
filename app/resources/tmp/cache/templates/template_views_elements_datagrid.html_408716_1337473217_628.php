<?php
/**
 * @property string $id
 * @property string $source
 * @property array  $columns
 */
?>
<table id="<?php echo $h($id); ?>" class="datagrid">
	<thead>
		<tr>
<?php foreach( $columns as $column => $options ):?>
			<th><?php echo $h($options['title']); ?></th>
<?php endforeach;?>
		</tr>
	</thead>
	<tbody>
		<tr>
			<td colspan="<?php echo $h(count($columns)); ?>" class="dataTables_empty">Loading data from server</td>
		</tr>
	</tbody>
</table>

<script type="text/javascript">
$(document).ready(function() {
    $('#<?php echo $h($id); ?>').dataTable( {
        "bProcessing": true,
		"bServerSide": true,
        "sAjaxSource": '<?php echo $h($source); ?>'
    } );
} );
</script>