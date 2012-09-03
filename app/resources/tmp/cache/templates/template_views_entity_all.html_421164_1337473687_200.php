<?php

$url = $this->_request->url;

$source = "/" . str_replace("all", "datagrid/.json", $url);

$id = 'test';

?>

<?php echo $this->_render( 'element', 'datagrid', compact( 'id', 'source', 'columns' ) ); ?>