<?php
/*
	Template Name: Front Page
	SunRain Theme's Front Page to Display the Home Page if Selected
	Copyright: 2012-2013, D5 Creation, www.d5creation.com
	Based on the Simplest D5 Framework for WordPress
	Since SunRain 1.0
*/
?>

<?php get_header(); ?>

<div id="slide-container">
<div class="slider-wrapper">
<div class="slider">
<div class="fs_loader"></div>

<?php 
echo '

	<div class="slide">
	<img src="'. get_template_directory_uri() . '/images/waves.png" width="1449" height="115" data-position="240,17" data-in="left" data-delay="" data-out="left">
	<img src="'. esc_url(of_get_option('slide-image2', get_template_directory_uri() . '/images/cloud.png')).'"  data-position="50,30" data-in="top" data-step="1" data-out="top" data-ease-in="easeOutBounce">
	<img src="'. esc_url(of_get_option('slide-image3', get_template_directory_uri() . '/images/powered-by.png')).'" data-position="120,120" data-in="right" data-step="2" data-out="right" >
	<img src="'. esc_url(of_get_option('slide-image4', get_template_directory_uri() . '/images/logo-back.png')).'" data-position="175,80" data-in="bottom" data-step="3" data-out="bottom" >
	<img src="'. esc_url(of_get_option('slide-image5', get_template_directory_uri() . '/images/logo-small.png')).'" data-position="185,105" data-in="fade" data-step="4" data-out="fade"  >
	<img src="'. esc_url(of_get_option('slide-image1', get_template_directory_uri() . '/images/victory.png')).'" data-position="10,550" data-delay="500" data-in="left" data-step="0" data-out="right">
	</div>
	<div class="slide">
	<img src="'. get_template_directory_uri() . '/images/box2.png" width="361" height="354" data-position="-152,142" data-in="left" data-delay="200" data-out="right">
	<img src="'. get_template_directory_uri() . '/images/box1.png" width="422" height="454" data-position="138,-152" data-in="bottomRight" data-delay="200">
	<img src="'. get_template_directory_uri() . '/images/waves.png" width="1449" height="115" data-position="240,17" data-in="left" data-delay="" data-out="left">
	<p class="slide-text1" data-position="30,30" data-in="top" data-step="1" data-out="top" data-ease-in="easeOutBounce">'. esc_html(of_get_option('slide-text1', 'WordPress')) .'</p>
	<p class="slide-text2" data-position="90,30" data-in="left" data-step="2" data-delay="500" >'. esc_html(of_get_option('slide-text2', 'Most Userd CMS')) .'</p>		
	<p class="slide-text3" data-position="90,30" data-in="left" data-step="2" data-special="cycle" data-delay="3000">'. esc_html(of_get_option('slide-text3', 'Ultimate Freedom')) .'</p>
	<p class="slide-text4" data-position="90,30" data-in="left" data-step="2" data-special="cycle" data-delay="5500">'. esc_html(of_get_option('slide-text4', 'World Leading')) .'</p>	
	<p class="slide-text5" data-position="90,30" data-in="left" data-step="2" data-special="cycle" data-delay="8000">'. esc_html(of_get_option('slide-text5', 'Free to Use')) .'</p>			
	<img src="'. esc_url(of_get_option('slide-image4', get_template_directory_uri() . '/images/logo-back.png')).'" data-position="215,30" data-in="bottom" data-step="3" data-out="bottom" >
	<img src="'. esc_url(of_get_option('slide-image5', get_template_directory_uri() . '/images/logo-small.png')).'" data-position="225,55" data-in="fade" data-step="4" data-out="fade"  >
	<img src="'. esc_url(of_get_option('slide-image6', get_template_directory_uri() . '/images/success.png')).'" data-position="10,600" data-in="fade" data-delay="500" data-out="bottomRight">
	</div>

'; ?>
</div> </div>
</div> <!-- slide-container -->

<div id="heading1container"><div class="heading1vcenter">
<h1 id="heading1"><?php echo html_entity_decode(esc_textarea(of_get_option('heading_text1', 'WordPress is web <em>software you can use to create websites!</em> '))); ?></h1>
<p class="heading-desc1"><?php echo html_entity_decode(esc_textarea(of_get_option('heading_des1', 'It is Amazing! <em>Over 60 million people</em> have chosen WordPress to power the place on the web.'))); ?></p>
<?php if ( esc_url(of_get_option( 'heading_btn1_link', '#' )) != '' ): 
echo '<div class="vcenter"><a target="-blank" href="'.esc_url(of_get_option( 'heading_btn1_link', '#' )).'"><button>'.esc_html(of_get_option( 'heading_btn1_text', 'Learn More' )).'</button></a></div>';
endif; ?>
</div></div>

<h1 id="heading2"><?php echo html_entity_decode(esc_textarea(of_get_option('heading_text2', 'WordPress is web <em>software</em> you can use to create websits! '))); ?></h1>
<p class="heading-desc2"><?php echo html_entity_decode(esc_textarea(of_get_option('heading_des2', 'The core software is built by hundreds of community volunteers, and when you are ready for more there are thousands of plugins and themes available to transform your site into almost anything you can imagine. Over 60 million people have chosen WordPress to power the place on the web they call "home" <em>- we would love you to join the family.</em>'))); ?></p>

<?php get_template_part( 'featured-box' ); ?> 

<div id="heading3container">
<h1 id="heading3"><?php echo html_entity_decode(esc_html(of_get_option('heading_text3', 'WordPress is web <em>software</em> you can use to create websites! '))); ?></h1>
<p class="heading-desc3"><?php echo html_entity_decode(esc_html(of_get_option('heading_des3', 'It is Amazing! <em>Over 60 million people</em> have chosen WordPress to power the place on the web.'))); ?></p>
</div>

<div id="bqpcontainer"><div id="bqpcontainer-sub">

<h3 class="bqpheading">Latest <em>Blog</em> Posts</h3>

<?php  $sunrain_post_slide_args = array( 'post_type'=> 'post', 'orderby' => 'date', 'order' => 'DESC', 'ignore_sticky_posts' => 1, 'posts_per_page'  =>  4  );

$sunrain_post_slide_query = new WP_Query($sunrain_post_slide_args);
if (have_posts()) : while ( $sunrain_post_slide_query->have_posts()) :  $sunrain_post_slide_query->the_post(); ?>
<div class="post-slide-box">
<?php sunrain_post_date(); ?><div class="post-slide-title"><a href="<?php the_permalink(); ?>" target="_blank" ><h2><?php the_title(); ?></h2></a></div><div class="post-slide-content"><?php $blExcerptLength=30; the_excerpt(); ?></div>
</div>
<?php endwhile; endif; wp_reset_query(); ?>

</div></div>
<div id="container">

<?php if (esc_html(of_get_option('fpostex', '1')) != '1'): get_template_part( 'front-page-content' ); endif;?>

<?php get_footer(); ?>