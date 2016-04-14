<?php
/* 	SunRain Theme's Footer
	Copyright: 2012-2013, D5 Creation, www.d5creation.com
	Based on the Simplest D5 Framework for WordPress
	Since SunRain 1.0
*/
?>


</div><!-- container -->


<div id="footer">

<div class="versep"></div>
<div id="footer-content">

<div id="social">
<a href="<?php echo esc_url(of_get_option('gplus-link', '#')); ?>" class="gplus-link" target="_blank"></a>
<a href="<?php echo esc_url(of_get_option('picassa-link', '#')); ?>" class="picassa-link" target="_blank"></a>
<a href="<?php echo esc_url(of_get_option('li-link', '#')); ?>" class="li-link" target="_blank"></a>
<a href="<?php echo esc_url(of_get_option('feed-link', '#')); ?>" class="feed-link" target="_blank"></a>
</div>

<?php
   	get_sidebar( 'footer' );
?>

<div id="creditline"><?php echo '&copy; ' . date("Y"). ': ' . get_bloginfo( 'name' ) . '  '; sunrain_creditline(); ?></div>

</div> <!-- footer-content -->
</div> <!-- footer -->
<div id="topdirection"><a href="#">^</a></div>
<div class="clear"> </div>
<?php wp_footer(); ?>
</body>
</html>