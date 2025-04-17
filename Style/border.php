<?php
use Elementor\Group_Control_Border;
use Elementor\Core\Kits\Documents\Tabs\Global_Colors;

// unique_id
$this->add_group_control(
    Group_Control_Border::get_type(),
    [
        'name' => 'unique_id',
        'fields_options' => [
			'border' => [
				'default' => 'solid',
			],
			'width' => [
				'default' => [
					'top' => '1',
					'right' => '1',
					'bottom' => '1',
					'left' => '1',
					'isLinked' => true,
				],
			],
			'color' => [
				'global' => [
                    'default' => Global_Colors::COLOR_TEXT,
                ],
			],
		],
        'selector' => '{{WRAPPER}}',
    ]
);

// COLOR_PRIMARY
// COLOR_SECONDARY
// COLOR_TEXT
// COLOR_ACCENT

// border_radius
$this->add_responsive_control(
    'border_radius',
    [
        'label' => esc_html__( 'Border Radius', 'rb-addons-for-elementor' ),
        'type' => Controls_Manager::DIMENSIONS,
        'size_units' => [ 'px', '%', 'em', 'rem' ],
        'default' => [
            'top' => '0',
            'right' => '0',
            'bottom' => '0',
            'left' => '0',
            'unit' => 'px',
            'isLinked' => true,
        ],
        'selectors' => [
            '{{WRAPPER}} .your-class' => 'border-radius: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
        ],
    ]
);