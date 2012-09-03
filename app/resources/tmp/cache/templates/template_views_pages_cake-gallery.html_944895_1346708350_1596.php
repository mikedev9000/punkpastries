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

<div class="album" id="cake-gallery"></div>

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