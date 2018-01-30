$(function() {

	var stripeBut = $('.stripe-button-el');
	console.log(stripeBut);
	stripeBut.css({"text-align": "center", "padding": "8px"});
	$('.stripe-button-el span').css({"background": "#A41275", "box-shadow": "none"});


	var hamburger = $('#menu-hamb');
	var filter = $('#black-filter')
	var activatedClass = 'hamburger-activated';
	
	hamburger.click(function() {
		$('.link').toggle('slow');

		$(this).parent().attr('class', activatedClass);
	}); 

	filter.click(function() {
		$(this).parent().attr('class', '');
	})


	//$('[data-toggle="tooltip"]').tooltip();

	$('.block-icon').mouseover(function() {
		if($(this).attr('title')==='') {
			return false;
		}

		$('body').append('<span class="infobulle"></span>');
		var bulle = $('.infobulle:last');
		bulle.append($(this).attr('title'));
		$(this).attr('title', '');
		var top = $(this).offset().top - $(this).height();
		var left = $(this).offset().left - $(this).width()/4;
		bulle.css({
			left: left + 20,
			top: top,
			opacity: 0
		});
		bulle.animate({
			left: left - 5,
			opacity: 0.99
		});
	});

	$('.block-icon').mouseout(function() {
		var bulle = $('.infobulle:last');
		var bulles = $('.infobulle');

		if(bulles.length > 2) {
			$('.infobulle:first').remove();
		}

		$(this).attr('title', bulle.text());
		bulle.animate({
			left: bulle.offset().left + 15,
			opacity: 0
		}), 500, 'linear', function() {
			bulle.remove();
		}
		
	});
})