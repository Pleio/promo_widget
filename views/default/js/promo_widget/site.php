<?php
?>
//<script>
elgg.provide('elgg.promo_widget');

elgg.promo_widget_change_type = function(elem) {

	var $wrapper = $(elem).parents('.elgg-module:first');
	
	$wrapper.find('.promo-widget-type').toggleClass('hidden');
};
