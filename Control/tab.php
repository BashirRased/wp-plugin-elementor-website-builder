<?php

$this->start_controls_tabs(
	'style_tabs'
);

$this->start_controls_tab(
	'style_normal_tab',
	[
		'label' => esc_html__( 'Normal', 'rb-addons-for-elementor' ),
	]
);

$this->end_controls_tab();

$this->end_controls_tabs();