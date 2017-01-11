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

    var isDesktop = ( function() { return !( 'ontouchstart' in window ) || !( 'onmsgesturechange' in window ); } )();
    window.isDesktop = isDesktop;
    if( isDesktop ) {
        $('.latest .meta').hide();
        $( '.preview-link' ).hover(
            function() {
                $(this).find('.meta').slideDown();
            }, function() {
                $(this).find('.meta').slideUp();
            }
        );
    }

});
