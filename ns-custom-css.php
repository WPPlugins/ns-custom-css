<?php
/*
Plugin Name: NS Custom Css
Plugin URI: https://wordpress.org/plugins/ns-custom-css/
Description: This plugin allow to add your custom css
Version: 1.0.2
Author: NsThemes
Author URI: http://www.nsthemes.com
License: GNU General Public License v2.0
License URI: http://www.gnu.org/licenses/gpl-2.0.html
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}


if ( ! defined( 'CC_NS_PLUGIN_DIR' ) )
    define( 'CC_NS_PLUGIN_DIR', untrailingslashit( dirname( __FILE__ ) ) );

if ( ! defined( 'CC_NS_PLUGIN_DIR_URL' ) )
    define( 'CC_NS_PLUGIN_DIR_URL', plugin_dir_url( __FILE__ ) );


/* *** plugin options *** */
require_once( CC_NS_PLUGIN_DIR.'/ns_custom_css_for_wp_option.php');

/* *** plugin settings page *** */
require_once( CC_NS_PLUGIN_DIR.'/ns-admin-options/ns-admin-options-setup.php');

/* *** write css style *** */
function ns_write_cc_style(){
	$ns_cc_to_print = get_option('ns_code_to_add_cc_option', '');
	if ($ns_cc_to_print != '') {
		echo '<!-- Start Custom Css Code -->';
		echo "\r\n";
		echo '<style>';
		echo "\r\n";
		echo  $ns_cc_to_print;
		echo "\r\n";
		echo '</style>';
		echo "\r\n";
		echo '<!-- End Custom Css Code -->';
		echo "\r\n";
	}
}
add_action('wp_head', 'ns_write_cc_style');