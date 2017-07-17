<?php
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

function ns_cc_activate_set_options()
{
    add_option('ns_code_to_add_cc_option', '');
}

register_activation_hook( __FILE__, 'ns_cc_activate_set_options');



function ns_cc_register_options_group()
{
    register_setting('ns_cc_options_group', 'ns_code_to_add_cc_option');   
}
 
add_action ('admin_init', 'ns_cc_register_options_group');

?>