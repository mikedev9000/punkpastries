<?php

?>

<?php echo $this->form->create( $task ); ?>

<?php foreach( $model::getFields() as $field => $field_options ):?>

	<?php echo $this->form->field( $field, $task->getFieldOptions( $field, compact( 'field_options' ) ) ); ?>
	
<?php endforeach;?>

	<?php echo $this->form->submit('Save'); ?>

<?php echo $this->form->end(); ?>