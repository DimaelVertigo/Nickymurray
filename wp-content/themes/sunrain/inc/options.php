<?php
/**
 * SunRain Options Page
 * @ Copyright: D5 Creation, All Rights, www.d5creation.com
 */

function optionsframework_option_name() {

	// This gets the theme name from the stylesheet
	$themename = 'sunrain';
	$optionsframework_settings = get_option( 'optionsframework' );
	$optionsframework_settings['id'] = $themename;
	update_option( 'optionsframework', $optionsframework_settings );
}
function optionsframework_options() {
	
	$options[] = array(
		'name' => 'General Options', 
		'type' => 'heading');
	
	$sunain_theme_data = wp_get_theme(); 
	$sunain_author_uri = $sunain_theme_data->get( 'AuthorURI' );
	$sunain_theme_uri = $sunain_theme_data->get( 'ThemeURI' );
	$sunain_author_uri_clean = parse_url($sunain_author_uri, PHP_URL_HOST);
		
	$options[] = array(
		'desc' => '<div class="infohead"><span class="donation">If you like this FREE Theme You can consider for a small Donation to us. Your Donation will be spent for the Disadvantaged Children and Students. You can visit our <a href="'.$sunain_author_uri.'donate/" target="_blank"><strong>DONATION PAGE</strong></a> and Take your decision.</span><br /><br /><span class="donation"> We appreciate an <a href="http://wordpress.org/support/view/theme-reviews/sunrain" target="_blank">Honest Review</a> of this Theme if you Love our Work.</span><br /> 
		<span class="donation">Need More Features and Options including Unlimited Slides, Slide Items, Links and 100+ Advanced Features? Try <a href="'.$sunain_theme_uri.'" target="_blank"><strong>SunRain Extend</strong></a>.</span><br /> <br /><span class="donation"> You can Visit the SunRain Extend Demo <a href="http://demo.'.$sunain_author_uri_clean.'/wp/themes/sunrain/" target="_blank"><strong>Here</strong></a>.</span><a href="'.$sunain_theme_uri.'" target="_blank" class="extendlink"> </a></div>',
		'type' => 'info');
	
	$options[] = array(
		'name' => 'Use Responsive Layout', 
		'desc' => 'Check the Box if you want the Responsive Layout of your Website', 
		'id' => 'responsive',
		'std' => '0',
		'type' => 'checkbox');
	
	$options[] = array(
		'name' => 'Front Page Posts Title Heading', 
		'desc' => 'Input the Front Page Post Title Heading here.', 
		'id' => 'latest-blog-text',
		'std' => 'Latest <em>Blog</em> Post',
		'type' => 'text' );
		
	$fposttype = array( '1' => 'Do not Show any Post or Page in the Front Page.', '2' => 'Show Posts or Page and Left/Right Sidebar.');
	
	$options[] = array(
		'name' => 'Front Page Post/Page Visibility', 
		'desc' => 'Select Option how you want to show or do not want to show Posts/Pages in the Front Page as per WordPress Reading Settings', 
		'id' => 'fpostex',
		'std' => '1',
		'type' => 'radio',
		'options' => $fposttype);


	$options[] = array(
		'desc' => '<span class="featured-area-title">Front Page Heading 01</span>', 
		'type' => 'info');
		
	$options[] = array(
		'name' => 'Front Page Heading 01', 
		'desc' => 'Input your heading text here.  Please limit it within 30 Letters.', 
		'id' => 'heading_text1',
		'std' => 'WordPress is web <em>software you can use to create websites!</em> ',
		'type' => 'text' );
		
	$options[] = array(
		'name' => 'Front Page Heading 01 Description', 
		'desc' => 'Input your heading description here. Please limit it within 100 Letters.', 
		'id' => 'heading_des1',
		'std' => 'It is Amazing!  <em>Over 60 million people</em> have chosen WordPress to power the place on the web.',
		'type' => 'text' );
		
	$options[] = array(
		'name' => 'Heading 01 Button Text', 
		'desc' => 'Input the Button Text Here', 
		'id' => 'heading_btn1_text',
		'std' => 'Learn More',
		'type' => 'text',
		'class' => 'mini' );
		
	$options[] = array(
		'name' => 'Heading 01 Button URL', 
		'desc' => 'Input the Button URL Here', 
		'id' => 'heading_btn1_link',
		'std' => '#',
		'type' => 'text' );		

	$options[] = array(
		'desc' => '<span class="featured-area-title">Front Page Heading 02</span>', 
		'type' => 'info');
		
	$options[] = array(
		'name' => 'Front Page Heading 02', 
		'desc' => 'Input your heading text here.  Please limit it within 30 Letters.', 
		'id' => 'heading_text2',
		'std' => 'WordPress is web <em>software</em> you can use to create websites! ',
		'type' => 'text' );
		
	$options[] = array(
		'name' => 'Front Page Heading 02 Description', 
		'desc' => 'Input your heading description here. Please limit it within 100 Letters.', 
		'id' => 'heading_des2',
		'std' => 'The core software is built by hundreds of community volunteers, and when you are ready for more there are thousands of plugins and themes available to transform your site into almost anything you can imagine. Over 60 million people have chosen WordPress to power the place on the web they call "home" <em>- we would love you to join the family.</em>',
		'type' => 'text' );

	$options[] = array(
		'desc' => '<span class="featured-area-title">Front Page Heading 03</span>', 
		'type' => 'info');
		
	$options[] = array(
		'name' => 'Front Page Heading 03', 
		'desc' => 'Input your heading text here.  Please limit it within 30 Letters.', 
		'id' => 'heading_text3',
		'std' => 'WordPress is web <em>software</em> you can use to create websites! ',
		'type' => 'text' );
		
	$options[] = array(
		'name' => 'Front Page Heading 03 Description', 
		'desc' => 'Input your heading description here. Please limit it within 100 Letters.', 
		'id' => 'heading_des3',
		'std' => 'It is Amazing!  <em>Over 60 million people</em> have chosen WordPress to power the place on the web.',
		'type' => 'text' );
		
	$options[] = array(
		'name' => 'Front Page Heading 03 Background Image', 
		'desc' => 'Upload an image for the Front Page Heading 03 Background Image.', 
		'id' => 'heading3back',
		'std' => get_template_directory_uri() . '/images/heading3back.png',
		'type' => 'upload');


	$options[] = array(
		'desc' => '<span class="featured-area-title">Front Page Featured Boxes</span>', 
		'type' => 'info');
		
	foreach (range(1, 5 ) as $fbsinumber) {
	
	$options[] = array(
		'desc' => '<b>FEATURED BOX: ' . $fbsinumber . '</b>',
		'type' => 'info');
	
	$options[] = array(
		'name' => 'Image', 
		'desc' => 'Upload an image for the Featured Box. 200px X 200px image is recommended.  If you do not want to show anything here leave the box blank.', 
		'id' => 'featured-image' . $fbsinumber,
		'std' => get_template_directory_uri() . '/images/featured-image' . $fbsinumber . '.png',
		'type' => 'upload');	
	
	$options[] = array(
		'name' => 'Title', 
		'desc' => 'Input your Featured Title here. Please limit it within 30 Letters. If you do not want to show anything here leave the box blank.', 
		'id' => 'featured-title' . $fbsinumber,
		'std' => 'SunRain Theme for Small Business',
		'type' => 'text');
	
	$options[] = array(
		'name' => 'Description', 
		'desc' => 'Input the description of Featured Areas. Please limit the words within 30 so that the layout should be clean and attractive. You can also input any HTML, Videos or iframe here. But Please keep in mind about the limitation of Width of the box.', 
		'id' => 'featured-description' . $fbsinumber,
		'std' => 'The Color changing options of SunRain will give the WordPress Driven Site an attractive look. SunRain is super elegant and Professional Responsive Theme which will create the business widely expressed.',
		'type' => 'text' );

	}
	
	$options[] = array(
		'desc' => '<span class="featured-area-title">Social Links</span>', 
		'type' => 'info');

	$options[] = array(
		'name' => 'Google Plus Link', 
		'desc' => 'Input your Google Plus URL here.', 
		'id' => 'gplus-link',
		'std' => '#',
		'type' => 'text');	
		
	$options[] = array(
		'name' => 'Picassa Web Album Link', 
		'desc' => 'Input your Picassa URL here.', 
		'id' => 'picassa-link',
		'std' => '#',
		'type' => 'text');
	
	$options[] = array(
		'name' => 'Linked In Link', 
		'desc' => 'Input your Linked In URL here.', 
		'id' => 'li-link',
		'std' => '#',
		'type' => 'text');

	$options[] = array(
		'name' => 'Feed or Blog Link', 
		'desc' => 'Input your Feed or Blog URL here.', 
		'id' => 'feed-link',
		'std' => '#',
		'type' => 'text');
		
	
// Slider Settings
	$options[] = array(
		'name' => 'Slider', 
		'type' => 'heading');
		
	$options[] = array(
		'desc' => '<div class="infohead"><span class="donation">If you like this FREE Theme You can consider for a small Donation to us. Your Donation will be spent for the Disadvantaged Children and Students. You can visit our <a href="'.$sunain_author_uri.'donate/" target="_blank"><strong>DONATION PAGE</strong></a> and Take your decision.</span><br /><br /><span class="donation"> We appreciate an <a href="http://wordpress.org/support/view/theme-reviews/sunrain" target="_blank">Honest Review</a> of this Theme if you Love our Work.</span><br /> 
		<span class="donation">Need More Features and Options including Unlimited Slides, Slide Items, Links and 100+ Advanced Features? Try <a href="'.$sunain_theme_uri.'" target="_blank"><strong>SunRain Extend</strong></a>.</span><br /> <br /><span class="donation"> You can Visit the SunRain Extend Demo <a href="http://demo.'.$sunain_author_uri_clean.'/wp/themes/sunrain/" target="_blank"><strong>Here</strong></a>.</span><a href="'.$sunain_theme_uri.'" target="_blank" class="extendlink"> </a></div>',
		'type' => 'info');
		
	$options[] = array(
		'desc' => '<span class="featured-area-title">Slide 01</span>', 
		'type' => 'info');
		
	$options[] = array(
		'name' => 'Image 01', 
		'desc' => 'Upload an image. 500px X 420px PNG image is recommended.', 
		'id' => 'slide-image1',
		'std' => get_template_directory_uri() . '/images/victory.png',
		'type' => 'upload');
		
	$options[] = array(
		'name' => 'Image 02', 
		'desc' => 'Upload an image. 400px X 300px PNG image is recommended.', 
		'id' => 'slide-image2',
		'std' => get_template_directory_uri() . '/images/cloud.png',
		'type' => 'upload');	
		
	$options[] = array(
		'name' => 'Image 03', 
		'desc' => 'Upload an image. 200px X 60px PNG image is recommended.', 
		'id' => 'slide-image3',
		'std' => get_template_directory_uri() . '/images/powered-by.png',
		'type' => 'upload');
		
	$options[] = array(
		'name' => 'Image 04', 
		'desc' => 'Upload an image. 290px X 100px PNG image is recommended.', 
		'id' => 'slide-image4',
		'std' => get_template_directory_uri() . '/images/logo-back.png',
		'type' => 'upload');
		
	$options[] = array(
		'name' => 'Image 05', 
		'desc' => 'Upload an image. 250px X 70px PNG image is recommended.', 
		'id' => 'slide-image5',
		'std' => get_template_directory_uri() . '/images/logo-small.png',
		'type' => 'upload');
		
	$options[] = array(
		'desc' => '<span class="featured-area-title">Slide 02</span>', 
		'type' => 'info');
		
	$options[] = array(
		'name' => 'Image', 
		'desc' => 'Upload an image. 350px X 450px PNG image is recommended.', 
		'id' => 'slide-image6',
		'std' => get_template_directory_uri() . '/images/success.png',
		'type' => 'upload');
		
	$options[] = array(
		'name' => 'Text 01', 
		'desc' => 'Input Some Text for the Title.', 
		'id' => 'slide-text1',
		'std' => 'WordPress',
		'type' => 'text');	
		
	$options[] = array(
		'name' => 'Text 02', 
		'desc' => 'Input Some Text.', 
		'id' => 'slide-text2',
		'std' => 'Most Userd CMS',
		'type' => 'text');	
		
	$options[] = array(
		'name' => 'Text 03', 
		'desc' => 'Input Some Text.', 
		'id' => 'slide-text3',
		'std' => 'Ultimate Freedom',
		'type' => 'text');	
		
	$options[] = array(
		'name' => 'Text 04', 
		'desc' => 'Input Some Text.', 
		'id' => 'slide-text4',
		'std' => 'World Leading',
		'type' => 'text');	
		
	$options[] = array(
		'name' => 'Text 05', 
		'desc' => 'Input Some Text.', 
		'id' => 'slide-text5',
		'std' => 'Free to Use',
		'type' => 'text');				


	return $options;
}

/*
 * This is an example of how to add custom scripts to the options panel.
 * This example shows/hides an option when a checkbox is clicked.
 */

add_action('optionsframework_custom_scripts', 'optionsframework_custom_scripts');

function optionsframework_custom_scripts() { ?>


<?php
}
