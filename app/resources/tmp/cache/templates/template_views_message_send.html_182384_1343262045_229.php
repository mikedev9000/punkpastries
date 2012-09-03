<?php
/**
 * @property $message
 */
var_dump( \mikedev9000im\models\Message::all()->data() );
?>

<?php echo $this->form->create($message); ?>

	<?php echo $this->form->text('body'); ?>

	<?php echo $this->form->submit('Send'); ?>

<?php echo $this->form->end(); ?>