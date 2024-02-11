	(function($) {
		"use strict";
	
	
	$(document).ready(function() {

	
	/*scroll to top*/
	$(window).scroll(function() {
	if ($(this).scrollTop() > 100) {
	$('.scrollup').fadeIn();
	} else {
	$('.scrollup').fadeOut();
	}
	});
	
	$('.scrollup').on("click",function() {
	$("html, body").animate({
	scrollTop: 0
	}, 500);
	return false;
	
	});


// Page Loading 
    $(window).load(function(){
      setTimeout(function(){

        $('.loader-live').fadeOut();
      },1000);
    })


// Flicker Photos 
	$('#basicuse').jflickrfeed({
	limit: 6,
	qstrings: {
	id: '133294431@N08'
	},
	itemTemplate: 
	'<li>' +
	'<a href="{{image_b}}"><img src="{{image_s}}" alt="{{title}}" /></a>' +
	'</li>'
	});

	
	
	


		});
	
	})(jQuery);