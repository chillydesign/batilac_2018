(function ($, root, undefined) {

	$(function () {

		'use strict';

		function matchelementheight(){
			$('.section_photo_columns').each(function(){
				$('.photo_column').matchHeight();
			})
		}

		matchelementheight();

		$( window ).resize(function(){
			matchelementheight();
		})

		$('#show_mobile_nav').on('click', function(e){
			e.preventDefault();
			$('header nav').toggle();
		});


		$('.bxslider').bxSlider({
			'pager': false,
			'controls' : true,
			// 'mode' : 'fade',
			 'auto' : false
		});

		// $("#slider_realisations").tiksluscarousel({width:640,height:480, nav:'thumbnails',current:1,});

		$('.plus').on('click', function(){
			var $myClass = $(this).attr('class').split(' ')[0];
			var $slidetd = $('#' + $myClass);

			if ($slidetd.hasClass('active')) {
				$(this).parents('tr').removeClass('parenttd');
				$slidetd.removeClass('active');
				$slidetd.hide();
			} else {
				$('tr').removeClass('parenttd');
				$(this).parents('tr').addClass('parenttd');
				$('.hidden').hide();
				$slidetd.show();
				$slidetd.addClass('active');
			}

		})

	});

})(jQuery, this);
