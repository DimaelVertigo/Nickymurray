<?php

/* 	SunRain Theme's Single Page to display Single Page or Post
	Copyright: 2012-2013, D5 Creation, www.d5creation.com
	Based on the Simplest D5 Framework for WordPress
	Since SunRain 1.0
*/


get_header(); ?>
<div id="container">
<div id="content">
          
		  <?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>
          	<?php sunrain_post_date(); ?><div class="post-container">
            <h1 class="page-title"><?php the_title(); ?></h1>
                                    
            <div class="content-ver-sep"> </div>
            <div class="entrytext"><?php the_post_thumbnail('thumbnail'); ?>
			<?php the_content(); ?>
            </div>
            <div class="clear"> </div>
            <div class="up-bottom-border">
            <?php  wp_link_pages( array( 'before' => '<div class="page-link"><span>' . '' . '</span>', 'after' => '</div><br/>' ) ); ?>
            <?php sunrain_post_meta(); ?>
            <div class="content-ver-sep"> </div>
            <div class="floatleft"><?php previous_post_link('&laquo; %link'); ?></div>
			<div class="floatright"><?php next_post_link('%link &raquo;'); ?></div><br /><br />
            <?php if ( is_attachment() ): ?>
            <div class="floatleft"><?php previous_image_link( false, '&laquo; ' . of_get_option('pi3', 'Previous Image') ); ?></div>
			<div class="floatright"><?php next_image_link( false,  of_get_option('ni3', 'Next Image') . ' &raquo;' ); ?></div> 
            <?php endif; ?>
          	</div>
			
			<?php endwhile;?>
          	            
          <!-- End the Loop. -->          
        	
			<?php comments_template(); ?>
            <?php if (get_post_meta( get_the_ID(), 'sb_pl', true ) == 'fullwidth' ): echo '<style>#content { width: 100%; } #right-sidebar { display: none; }</style>'; endif; ?>
            
</div></div>			
<?php get_sidebar(); ?>
<?php get_footer(); ?>