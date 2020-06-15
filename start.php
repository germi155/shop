<?php
 
function elgg_shop_ecommerce_elgg_init() {
	
    // Replace the default index page
    elgg_register_plugin_hook_handler('index','system','new_index',1);
	
	if (elgg_is_logged_in()){
	
			elgg_unextend_view('page/elements/sidebar_alt', 'page/elements/profile','700');
			
}
	
	
 }
 
function new_index() {
    if (!include_once(dirname(dirname(__FILE__)) . "/elgg_shop_ecommerce/index.html"))
        return false;
 
    return true;
}
 
// register for the init, system event when our plugin start.php is loaded
elgg_register_event_handler('init','system','elgg_shop_ecommerce_elgg_init');

?>

