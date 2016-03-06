$(function(){


  var startchange = $('.start-scroll');
  var offset = startchange.offset();
  console.log(offset);
  $(document).scroll(function() { 
		scroll_start = $(this).scrollTop();
		console.log(scroll_start);
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

});