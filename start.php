<?php
/**
 * Main plugin file
 *
 */

// register default elgg events
elgg_register_event_handler('init', 'system', 'promo_widget_init');

/**
 * Called during system init
 *
 * @return void
 */
function promo_widget_init() {
	
	// extend css/js
	elgg_extend_view('css/elgg', 'css/promo_widget/site');
	elgg_extend_view('js/elgg', 'js/promo_widget/site');
	
	// regsiter widget
	elgg_register_widget_type('promo_widget', elgg_echo('promo_widget:widget:title'), elgg_echo('promo_widget:widget:description'), 'index', true);
}