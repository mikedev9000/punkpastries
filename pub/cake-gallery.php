<html lang="en"><head>
    <meta charset="utf-8">
    <title>Punk Pastries</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">

    <!-- Le styles -->
    <link href="css/lightbox.css" rel="stylesheet" />
    <link href="//netdna.bootstrapcdn.com/twitter-bootstrap/2.0.4/css/bootstrap.min.css" rel="stylesheet">
    <style type="text/css">
      body {
        padding-top: 60px;
        padding-bottom: 40px;
      }
      
      #cake-gallery {
      }
      
      #cake-gallery .row .gallery-item {
      	padding-bottom: 10px;
      }
      
      .gallery-item {
      	text-align: center;
      }
      
      .gallery-item img {
      	margin-left: auto;
      	margin-right: auto;
      	border: solid 1px green;
      }
    </style>
    <link href="//netdna.bootstrapcdn.com/twitter-bootstrap/2.0.4/css/bootstrap-responsive.min.css" rel="stylesheet">
    
    <!-- Le HTML5 shim, for IE6-8 support of HTML5 elements -->
    <!--[if lt IE 9]>
      <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->

  </head>

  <body>
  
  <?php include 'navbar.php' ?>

    <div class="container">
      
      	<div class="album" id="cake-gallery"></div>
      <hr>

      <footer>
        <p>© Punk Pastries 2012</p>
      </footer>

    </div> <!-- /container -->

    <!-- Le javascript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js"></script>
    <script src="js/lightbox.js"></script>
    <script src="//netdna.bootstrapcdn.com/twitter-bootstrap/2.0.4/js/bootstrap.min.js"></script>
    
    <script type="text/javascript">
    jQuery(function($){

		//load photos into the carusel
		var cakeOrdersAlbumUrl = "https://graph.facebook.com/217634341594056/photos?limit=30";

		$.getJSON(cakeOrdersAlbumUrl, function(photos){	
			var images = [];
					
			for( var i = 0; i < photos.data.length; i++ ){
				images[i] = {
					name: photos.data[i].name,
					source: photos.data[i].source,
					thumb: photos.data[i].picture
				};
			}

			var imageRows = [];

			var imagesPerRow = 6;

			//paginate the data
			for ( i = 0; i < images.length; i += imagesPerRow ) {
				imageRows.push( images.slice( i, i + imagesPerRow ) );
			}

			for ( var rowIndex = 0; rowIndex < imageRows.length; rowIndex++ ){
				var rowHtml = '<div class="row">';

				for( var columnIndex = 0; columnIndex < imageRows[rowIndex].length; columnIndex++ ){
					rowHtml += '<div class="gallery-item span' + 12 / imagesPerRow + '">';
					rowHtml += '	<a href="' + imageRows[rowIndex][columnIndex].source + '" rel="lightbox[cakes]">';
					rowHtml += '		<img src="' + imageRows[rowIndex][columnIndex].thumb + '"/>';
					rowHtml += '	</a>';
					rowHtml += '</div>';
				}
				
				rowHtml += '</div>';

				$('#cake-gallery').append( rowHtml );
			}
		});
    });
    </script>
</body></html>