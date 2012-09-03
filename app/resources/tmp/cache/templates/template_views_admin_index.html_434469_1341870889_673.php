<?php
/**
 * Displays list of links that will take the user to the records route for that model.
 *
 * @property $models
 */
?>
<dl>
<?php foreach( $models as $data ):?>
    <dt><?php echo $this->html->link( $data['model'], array( 'Admin::records' ) + array( 'model_slug' => $data['model_slug'] ) ); ?></dt>
    <?php
        unset($data['model_slug']);
        unset($data['model']);
    ?>
    <dd>
    <?php if( !empty($data)):?>
        <dl>
        <?php foreach( $data as $key => $value):?>
            <dt><?php echo $h(\lithium\util\Inflector::humanize($key)); ?></dt><dd><?php echo $h($value); ?></dd>
        <?php endforeach;?>
        </dl>
    <?php endif;?>
    </dd>
<?php endforeach;?>
</dl>
