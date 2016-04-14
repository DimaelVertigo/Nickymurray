<?php

function fullbackslider_js_css(){
	wp_enqueue_script(
		'fbslider-script',
		plugin_dir_url(__FILE__) . 'fullscreen-background-slider.js',
		array('jquery')
	);

	wp_register_style( 'fullbackslider_css', plugin_dir_url(__FILE__) . 'fullscreen-background-slider.css' );
	wp_enqueue_style( 'fullbackslider_css');
}
add_action('wp_enqueue_scripts', 'fullbackslider_js_css');

// SLIDER
add_action('wp_head', 'fullbackslider_detectImages');
function fullbackslider_detectImages(){

	global $wpdb;
	$fbsliderdb = $wpdb->get_row("SELECT * FROM " . $wpdb->prefix . "fullbackslider WHERE id = 1");

	$upload_dir = wp_upload_dir();
	$folder = $upload_dir['baseurl'] . '/fbslider/';
	$filetype = '*.*';
	$files = glob($fbsliderdb->folder.$filetype);

	for ($i=0; $i<count($files); $i++) {
	    echo '<div slidetime="' . $fbsliderdb->slide_time . '" timeout="'. $fbsliderdb->timeOut .'" class="background background' . $i . ' " style="background-image: url(' . $files[$i] . ' )"></div> ';
	}

}

?>