$(document).ready( function() {

    var windowWidth = 750;

    $('#site-title, #header-menu, #site-description').hide();
    $('#site-title').slideDown();
    $('#site-description').delay(400).fadeIn('slow');
    if ( $(window).width() > windowWidth ) { $('#header-menu').slideDown(); }

	// if foreign link load in another window
    $('a').click(function(){
		var domain = window.location.hostname;
		var reg_expr = new RegExp("(http:\/\/"+domain+"\/[.]*)|(mailto:[.]*)|(https:\/\/drive.google.com\/[.]*)");
		if(!reg_expr.exec(this.href)) {
			window.open(this.href);
			return false;
		}
	});

    // site navigation
    $('.menu-button').click(function() {
        $('#header-menu').slideDown();
    })
    $('.cancel-menu').click(function() {
        $('#header-menu').slideUp();
    })

    // if media query size changes also edit in style.css
    $(window).resize(function() {
        if ( $(window).width() > windowWidth ) {
            $('#header-menu').slideDown();
        } else if ( $(window).width() < windowWidth ) {
            $('#header-menu').hide();
        }
    });

    // show featured image on hover for latest posts
    $( '.latest-thumbs .preview-link' ).hover(
        function() {
            $(this).find('.meta').slideUp();
        }, function() {
            $(this).find('.meta').slideDown();
        }
    );

    $('iframe[src*="youtube.com"]').wrap('<div class="video-wrapper">').parent();

});

// Find all YouTube videos
var $videos = $('iframe[src*="youtube.com"]'),
    // The element that is fluid width
    $body = $("body");

// Figure out and save aspect ratio for each video
$allVideos.each(function() {
  $(this)
    .data('aspectRatio', this.height / this.width)
    // and remove the hard coded width/height
    .removeAttr('height')
    .removeAttr('width');
});

// When the window is resized
$(window).resize(function() {
    var newWidth = $body.width();
    // Resize all videos according to their own aspect ratio
    $videos.each(function() {
        var $video = $(this);
        $video
        .width(newWidth)
        .height(newWidth * $el.data('aspectRatio'));
    });
// Kick off one resize to fix all videos on page load
}).resize();
