<?php
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}
?>
<?php // PUT YOUR settings_fields name and your input // ?>
<?php settings_fields('ns_cc_options_group'); ?>
<div class="genRowNssdc">
 Insert your custom css here:<br><br>
 <textarea rows="10" cols="100" id="ns_code_to_add_cc_option" name="ns_code_to_add_cc_option"><?php echo get_option('ns_code_to_add_cc_option', ''); ?></textarea>	
</div>
