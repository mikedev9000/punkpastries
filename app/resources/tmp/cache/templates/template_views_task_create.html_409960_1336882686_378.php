<?php

?>

<?php echo $this->form->create( $entity ); ?>

<?php foreach( $model::getFields() as $field => $field_options ):?>

<?php 

    $options = $entity ? $entity->getFieldOptions( $field, compact( 'field_options' ) ) : compact( 'field_options' );

?>

	<?php echo $this->form->field( $field, $options ); ?>
	
<?php endforeach;?>

	<?php echo $this->form->submit('Save'); ?>

<?php echo $this->form->end(); ?>