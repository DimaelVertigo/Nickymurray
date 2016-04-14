<?php
/* 	SunRain Theme's Featured Box to show the Featured Items of Front Page
	Copyright: 2014, D5 Creation, www.d5creation.com
	Based on the Simplest D5 Framework for WordPress
	Since SunRain 1.0
*/
?>
<div id="featured-boxscontainer">
<div id="featured-boxs">
<?php 
foreach (range(1, 5) as $fboxn) { ?>
<span class="featured-box"> 
<img class="box-image" src="<?php echo esc_url(of_get_option('featured-image' . $fboxn, get_template_directory_uri() . '/images/featured-image' . $fboxn . '.png')) ?>"/>
<h3><?php echo esc_html(of_get_option('featured-title' . $fboxn, 'SunRain Theme for Small Business')); ?></h3>
<div class="content-ver-sep"></div><br />
<p><?php echo esc_html(of_get_option('featured-description' . $fboxn , 'The Color changing options of SunRain will give the WordPress Driven Site an attractive look. SunRain is super elegant and Professional Responsive Theme which will create the business widely expressed.')); ?></p>
</span>

<?php }  ?>
<div class="clear"><br /></div><div class="lsep">
</div><br />
</div> <!-- featured-boxs -->
</div>