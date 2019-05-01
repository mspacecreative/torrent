(function ($, root, undefined) {
	
	$(function () {
		
		'use strict';

		$('.subscribe_tab').click(function() {
			$(this).parent().toggleClass('reveal');
			
			if ( $(this).parent().hasClass('reveal') ) {
				$(this).html('CLOSE').animate('slow');
			} else {
				$(this).html('SUBSCRIBE').animate('slow');
			}
		});
		
		$('.post-pagination li').each(function() {
		    var $this = $(this);
		    if($this.html().replace(/\s|&nbsp;/g, '').length == 0)
		        $this.remove();
		});
		
		function formSubmit() {
			$('#subscribe-blog-blog_subscription-2').submit(function() {
				$('body').addClass('success');
			});
		}
		
		//$('.post-pagination li:only-child').css('float', 'right');
		var $link = $('.post-pagination li:only-child');
		if ($link.hasClass('prev')) {
			$link.css('float', 'left');
		} else if ($link.hasClass('next')) {
			$link.css('float', 'right');
		}
		
		function wrapHeight() {
			var $body = $('body');
			if ($body.hasClass('single')) {
				$body.addClass('wrapheight');
			} else if ($body.hasClass('blog')) {
				$body.addClass('wrapheight');
			}else if ($body.hasClass('page-template-content-performance')) {
				$body.addClass('wrapheight');
			}
		}
		
		function addWrapHeight() {
			var $header = $('.banner.headhesive--stick');
			var $wrap = $('.wrapheight .wrap');
			$wrap.css('padding-top', $wrap.siblings($header).outerHeight());
		}
		
		$(document).ready(function() {
			wrapHeight();
			formSubmit();
		});
		
		$('.success').parent().parent().addClass('reveal');
		
		$(window).load(function() {
			addWrapHeight();
			formSubmit();
		});
		
		$(window).resize(function() {
			addWrapHeight();
		});
	
	});
		
})(jQuery, this);