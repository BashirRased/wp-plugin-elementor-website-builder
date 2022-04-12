<?php

// Custom Widget Category
function add_elementor_widget_categories($elements_manager) {

	$elements_manager->add_category(
		'rb-widgets',
		[
			'title' => esc_html__('RB Widgets', 'text-domain'),
			'icon' => 'fa fa-plug'
		]
	);

}
add_action('elementor/elements/categories_registered', 'add_elementor_widget_categories');