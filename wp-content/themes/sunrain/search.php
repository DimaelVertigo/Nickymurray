<?php 
/* 	SunRain Theme's Search Page
	Copyright: 2014, D5 Creation, www.d5creation.com
	Based on the Simplest D5 Framework for WordPress
	Since SunRain 1.0
*/

get_header(); ?>
<div id="container">
	<?php if (have_posts()) : ?>
		<div id="content">
        <h1 class="arc-post-title">Search Results</h1>
		
		<?php $counter = 0; global $more; $more = 0; ?>
		
		<?php while (have_posts()) : the_post();
			if($counter == 0) {
				$numposts = $wp_query->found_posts; // count # of search results ?>
				<h3 class="arc-src"><span>Search Term</span><?php the_search_query(); ?></h3>
				<h3 class="arc-src"><span>Number of Results</span><?php echo $numposts; ?></h3><br />
				<?php } //endif ?>
			
				<div <?php post_class(); ?> id="post-<?php the_ID(); ?>">
				<h2 class="post-title"><a href="<?php the_permalink(); ?>"><?php the_title();?></a></h2>
				<div class="content-ver-sep"></div>
  				<div class="entrytext">
 				<?php the_post_thumbnail('thumbnail'); ?>
 				<?php sunrain_content(); ?>
 				<div class="clear"> </div>
 				<div class="up-bottom-border">
 				<?php sunrain_post_meta(); ?>
 				</div></div></div>
				
		<?php $counter++; ?>
 		
		<?php endwhile; ?>
        <div id="page-nav">
		<div class="alignleft"><?php previous_posts_link('&laquo;  Previous Entries' ) ?></div>
		<div class="alignright"><?php next_posts_link('Next Entries &raquo;') ?></div>
		</div>
        
		</div>		
		<?php get_sidebar(); ?>
        <?php else: ?>
		<br /><br /><h1 class="arc-post-title">Sorry, we could not find anything that matched your search.</h1>
		<h3 class="arc-src"><span>You Can Try Another Search...</span></h3>
		<?php get_search_form(); ?>
		<p><a href="<?php echo home_url(); ?>" title="Browse the Home Page">&laquo; Or Return to the Home Page</a></p><br />
		<h2 class="post-title-color">You can also Visit the Following. These are the Featured Contents</h2>
		<div class="content-ver-sep"></div></div>
		<?php get_template_part( 'featured-box' ); ?>

	<?php endif; ?>
	
<?php get_footer(); ?>