$(function(){

	var $grid = $('.books-container').masonry({
	  // options...
	  itemSelector: '.grid-item',
	  // columnWidth: 300,
	  fitWidth:true
	});
	// layout Masonry after each image loads
	$grid.imagesLoaded().progress( function() {
	  $grid.masonry('layout');
	});


  var startchange = $('.start-scroll');
  var offset = startchange.offset();
  $(document).scroll(function() { 
		scroll_start = $(this).scrollTop();
		if(scroll_start > (offset.top - 192)) {
		$('#navbar').addClass('nav-minified');
		} else {
		$('#navbar').removeClass('nav-minified');
		}
	});

	$(".cover-gallery").flickity({
			wrapAround:true,
			pageDots: false,
			imagesLoaded: true
			// autoPlay:2000
		});

var title = $('.testing').val();
console.log(title);

	// if ($('.testing').val() == 'Contact') {
	// 	$('.books-container').css('display', 'none');
	// 	console.log('flex');
	// };

});