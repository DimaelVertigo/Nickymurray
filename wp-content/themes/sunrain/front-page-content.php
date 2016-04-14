<?php 
/* 	SunRain Theme's part for showing blog or page in the front page
	Copyright: 2012-2013, D5 Creation, www.d5creation.com
	Based on the Simplest D5 Framework for WordPress
	Since SunRain 1.0
*/

?>
<div id="content">
<?php if (have_posts()) : while (have_posts()) : the_post();?>
<div <?php post_class(); ?> id="post-<?php the_ID(); ?>">
 <?php sunrain_post_date(); ?><div class="post-container">	
 <h2 class="post-title"><a href="<?php the_permalink(); ?>"><?php the_title();?></a></h2>
 <div class="content-ver-sep"> </div>
 <div class="entrytext">
 <?php the_post_thumbnail('thumbnail'); ?>
 <?php sunrain_content(); ?>
 <div class="clear"> </div>
 <div class="up-bottom-border">
 <?php sunrain_post_meta(); ?>
 </div>
 </div></div></div><div class="clear"> </div>
 
 <?php endwhile; endif; ?>

<div id="page-nav">
<div class="alignleft"><?php previous_posts_link('&laquo;  Previous Entries' ) ?></div>
	<div class="alignright"><?php next_posts_link('Next Entries &raquo;') ?></div>
</div>
</div>
<?php get_sidebar();  ?>
<div class="clear"></div>