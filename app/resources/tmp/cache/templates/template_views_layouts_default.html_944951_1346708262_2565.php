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
    <link href="//netdna.bootstrapcdn.com/twitter-bootstrap/2.0.4/css/bootstrap.min.css" rel="stylesheet">
    
    <link href="//netdna.bootstrapcdn.com/twitter-bootstrap/2.0.4/css/bootstrap-responsive.min.css" rel="stylesheet">
    
    <!-- Le HTML5 shim, for IE6-8 support of HTML5 elements -->
    <!--[if lt IE 9]>
      <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->
    <?php echo $this->scripts();?>
	<script src="//ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js"></script>
    <script src="//netdna.bootstrapcdn.com/twitter-bootstrap/2.0.4/js/bootstrap.min.js"></script>
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
              <li class="active"><a href="#">Come In</a></li>
              <li><a href="#about">About Us</a></li>
              <li><a href="#contact">Flavours</a></li>
              <li><a href="cake-gallery.php">Cake Gallery</a></li>
              <li><a href="#contact">Contact Us</a></li>
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
