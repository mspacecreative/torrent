$('.post-pagination li').each(function() {
    var $this = $(this);
    if($this.html().replace(/\s|&nbsp;/g, '').length == 0)
        $this.remove();
});

//$('.post-pagination li:only-child').css('float', 'right');
var $link = $('.post-pagination li:only-child');
if ($link.hasClass('prev')) {
	$link.css('float', 'left');
} else if ($link.hasClass('next')) {
	$link.css('float', 'right');
}

function wrapHeight() {
	$('.single .wrap, .blog .wrap').css('padding-top', $('header').height());
}

$(document).ready(function() {
	wrapHeight();
});

$(window).resize(function() {
	wrapHeight();
});