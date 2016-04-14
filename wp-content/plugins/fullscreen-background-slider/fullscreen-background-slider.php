<?php
/**
* @package Fullscreen-background-slider
*/
/**
 * Plugin Name: Fullscreen background slider
 * Plugin URI: http://www.usbdesign.sk/fbslider/
 * Description: Lightweight background slider for your website
 * Version: 1.1
 * Author: usbecko
 * Author URI: http://usbdesign.sk/portfolio
 * License: GPL2
 */

/*  Copyright 2014 usbecko | USBdesign  (email : usbecko@gmail.com)

    This program is free software; you can redistribute it and/or modify
    it under the terms of the GNU General Public License, version 2, as 
    published by the Free Software Foundation.

    This program is distributed in the hope that it will be useful,
    but WITHOUT ANY WARRANTY; without even the implied warranty of
    MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
    GNU General Public License for more details.

    You should have received a copy of the GNU General Public License
    along with this program; if not, write to the Free Software
    Foundation, Inc., 51 Franklin St, Fifth Floor, Boston, MA  02110-1301  USA
*/

// instalation
global $fullbackslider_db_version;
$fullbackslider_db_version = "1.1";

function fullbackslider_install () {

    global $wpdb;
    global $fullbackslider_db_version;

    $table_name = $wpdb->prefix . "fullbackslider";

    $sql = "CREATE TABLE $table_name (
        id mediumint(9) NOT NULL AUTO_INCREMENT,
        name tinytext NOT NULL,
        slide_time mediumint(9) NOT NULL,
        timeOut mediumint(9) NOT NULL,
        UNIQUE KEY id (id)
    );";

    include_once( ABSPATH . 'wp-admin/includes/upgrade.php' );
    dbDelta( $sql );

    add_option( "fullbackslider_db_version", $fullbackslider_db_version );
}

function fullbackslider_install_data(){

    global $wpdb;

    $name = "BG Slider 1";
    $slide_time = 2000;
    $timeOut = 4000;
	$folder = "wp-content/uploads/fbslider/";

    $table_name = $wpdb->prefix . "fullbackslider";
    $rows_affected = $wpdb->insert( $table_name, array( 'name' => $name, 'slide_time' => $slide_time, 'timeOut' => $timeOut, 'folder' =>  $folder ) );

}

register_activation_hook( __FILE__, 'fullbackslider_install' );
register_activation_hook( __FILE__, 'fullbackslider_install_data' );


include_once dirname( __FILE__ ) . '/admin.php';
include_once dirname( __FILE__ ) . '/frontend.php';

?>