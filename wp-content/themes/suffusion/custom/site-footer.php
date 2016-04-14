<?php
/**
 * The site footer. This file should not be loaded by itself, but should instead be included using get_template_part or locate_template.
 * Replacing this file in a child theme is the easiest and upgrade-safe way to "get rid of" the footer credits!
 * Users can override this in a child theme.
 *
 * @since 3.8.3
 * @package Suffusion
 * @subpackage Custom
 */
global $suf_footer_left, $suf_footer_center, $suf_footer_layout_style;
$display = apply_filters('suffusion_can_display_site_footer', true);
if (!$display) {
	return;
}
?>
<footer class="site-footer">
	<ul class="footer-nav">
		<li class="footer-nav__item">
			<a href="<?php echo home_url(); ?>" class="footer-nav__link">home</a>
		</li>
		<li class="footer-nav__item">
			<a href="<?php echo home_url(); ?>/about-us" class="footer-nav__link">about us</a>
		</li>
		<li class="footer-nav__item">
			<a href="<?php echo home_url(); ?>/portfolio" class="footer-nav__link">portfolio</a>
		</li>
		<li class="footer-nav__item">
			<a href="<?php echo home_url(); ?>/services-2" class="footer-nav__link">services</a>
		</li>
		<!-- <li class="footer-nav__item">
			<a href="<?php echo home_url(); ?>/news-2" class="footer-nav__link">news</a>
		</li> -->
		<li class="footer-nav__item">
			<a href="<?php echo home_url(); ?>/contact" class="footer-nav__link">contact us</a>
		</li>
	</ul>
	<div class="site-footer__logo">nicky murray design</div>
	<a href="#" class="site-footer__burger"><span class="site-footer__burger-item"></span></a>

</footer>
<!-- <?php echo get_num_queries(); ?> queries, <?php suffusion_get_memory_usage(); ?> in <?php timer_stop(1); ?> seconds. -->
