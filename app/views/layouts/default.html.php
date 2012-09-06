<?php
/**
 * Lithium: the most rad php framework
 *
 * @copyright     Copyright 2012, Union of RAD (http://union-of-rad.org)
 * @license       http://opensource.org/licenses/bsd-license.php The BSD License
 */
?>
<!doctype html>
<html lang="en"><head>
	<?php echo $this->html->charset();?>
    <title>Punk Pastries<?php echo $this->title() ? " &gt; {$this->title()}" : null; ?></title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">

    <!-- Le styles -->
    <?php echo $this->html->style(array(
    	'bootstrap',
        'bootstrap-responsive',
        'lightbox',
        //'screen',
    ));?>
    <?php echo '';//$this->html->style(array('debug', 'lithium')); ?>
    
    <!-- Le HTML5 shim, for IE6-8 support of HTML5 elements -->
    <!--[if lt IE 9]>
      <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->
    <?php echo $this->html->script(array(
        '/js/jquery-1.7.1.min.js',
        '/js/bootstrap.js',
        '/js/lightbox.js',
    ));?>
	<?php echo $this->html->link('Icon', null, array('type' => 'icon')); ?>

  </head>
  <body class="app">
  
    <div id="header" class="navbar navbar-fixed-top">
      <div class="navbar-inner">
        <div class="container">
          <a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </a>
          <a class="brand" href="/">Punk Pastries</a>
          <div class="nav-collapse">
            <ul class="nav">
            <?php 
                $menu = array(
                    //'home',
                    'come-in' => 'Come In',
                    'about-us' => 'About Us',
                    'flavours' => 'Flavours',
                    'cake-gallery' => 'Cake Gallery',
                    'contact-us' => 'Contact Us',
                );
            ?>
            <?php foreach( $menu as $slug => $title ): ?>
            	<li class="<?=( $this->_request->url == $slug ) ? 'active' : '';?>">
            		<a href="/<?=$slug;?>"><?=$title;?></a>
            	</li>
            <?php endforeach;?>
            </ul>
          </div><!--/.nav-collapse -->
        </div>
      </div>
    </div><!-- .navbar -->
  
	<div id="content" class="container">
	
      <?php echo $this->content(); ?>

      <hr>

      <footer>
        <p>© Punk Pastries 2012</p>
      </footer>

    </div> <!-- /container -->
    
    <script type="text/javascript">
    	jQuery(function($){
    		$('#cake-photos-carousel').carousel({
	    		interval: 5000
	    	});
        });
    </script>
    
</body></html>
