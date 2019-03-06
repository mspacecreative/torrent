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
	var $body = $('body');
	if ($body.hasClass('single')) {
		$body.addClass('wrapheight');
	} else if ($body.hasClass('blog')) {
		$body.addClass('wrapheight');
	}
}

var $header = $('.headhesive--clone');
var $wrap = $('.wrapheight .wrap');
$wrap.css('padding-top', $wrap.siblings($header).height());

$(document).ready(function() {
	wrapHeight();
});