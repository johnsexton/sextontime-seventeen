	</div><!-- #content -->

	<footer id="site-footer" role="contentinfo">
		<div id="footer-wrapper">
	        <nav id="footer-menu" role="navigation">
	            <h1 class="visuallyhidden">Main Menu</h1>
	            <?php wp_nav_menu( array( 'theme_location' => 'footer' ) ); ?>
	        </nav><!-- #access -->

			Copyright &copy; <?php echo date("Y");?> - John Sexton. <br />All Rights Reserved.
		</div><!-- .footer-wrapper -->
	</footer><!-- #site-footer -->

</div><!-- #page -->

<script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
<script>window.jQuery || document.write('<script src="<?php bloginfo('template_url'); ?>/js/vendor/jquery-1.12.0.min.js"><\/script>')</script>
<script src="<?php bloginfo('template_url'); ?>/js/plugins.js"></script>
<script src="<?php bloginfo('template_url'); ?>/js/main.js"></script>

<!-- Google Analytics: change UA-XXXXX-X to be your site's ID. -->
<script>
    (function(b,o,i,l,e,r){b.GoogleAnalyticsObject=l;b[l]||(b[l]=
    function(){(b[l].q=b[l].q||[]).push(arguments)});b[l].l=+new Date;
    e=o.createElement(i);r=o.getElementsByTagName(i)[0];
    e.src='https://www.google-analytics.com/analytics.js';
    r.parentNode.insertBefore(e,r)}(window,document,'script','ga'));
    ga('create','UA-XXXXX-X','auto');ga('send','pageview');
</script>
<?php wp_footer(); ?>

</body>
</html>
