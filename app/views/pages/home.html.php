<?php
?>
<style type="text/css">
  body {
    padding-top: 60px;
    padding-bottom: 40px;
  }
  
  #cake-photos-carousel .item {
  	text-align: center;
  }
  
  #cake-photos-carousel .item img {
  	margin-left: auto;
  	margin-right: auto;
  }
</style>
      <!-- Main hero unit for a primary marketing message or call to action -->
      <div class="hero-unit">
		<div id="cake-photos-carousel" class="carousel slide">
		  <!-- Carousel items -->
		  <div class="carousel-inner">
		    <div class="active item">slide 1</div>
		    <div class="item">slide 2</div>
		    <div class="item">slide 3</div>
		  </div>
		</div>
      </div>

      <!-- Example row of columns -->
      <div class="row">
        <div class="span4">
          <h2>Heading</h2>
           <p>Donec id elit non mi porta gravida at eget metus. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Etiam porta sem malesuada magna mollis euismod. Donec sed odio dui. </p>
          <p><a class="btn" href="#">View details »</a></p>
        </div>
        <div class="span4">
          <h2>Heading</h2>
           <p>Donec id elit non mi porta gravida at eget metus. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Etiam porta sem malesuada magna mollis euismod. Donec sed odio dui. </p>
          <p><a class="btn" href="#">View details »</a></p>
       </div>
        <div class="span4">
          <h2>Heading</h2>
          <p>Donec sed odio dui. Cras justo odio, dapibus ac facilisis in, egestas eget quam. Vestibulum id ligula porta felis euismod semper. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus.</p>
          <p><a class="btn" href="#">View details »</a></p>
        </div>
      </div>
      
      <img src="img/logo-transparent.png"/>
      
      <script type="text/javascript">
    	jQuery(function($){
    		$('#cake-photos-carousel').carousel({
	    		interval: 5000
	    	});
        });
    </script>
      
      