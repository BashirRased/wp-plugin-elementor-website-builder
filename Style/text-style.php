<?php
use Elementor\Core\Kits\Documents\Tabs\Global_Typography;
use Elementor\Core\Kits\Documents\Tabs\Global_Colors;

// rbae_text_typography
$this->add_group_control(
    Group_Control_Typography::get_type(),
    [
        'name' => 'rbae_text_typography',
        'global' => [
            'default' => Global_Typography::TYPOGRAPHY_TEXT
            // You can use us : [TYPOGRAPHY_PRIMARY, TYPOGRAPHY_SECONDARY, TYPOGRAPHY_TEXT, TYPOGRAPHY_ACCENT]
        ],
        'selector' => '{{WRAPPER}} .class-name'
    ]
);

// rbae_item_style_tabs
$this->start_controls_tabs(
	'rbae_item_style_tabs'
);

// rbae_normal_tab
$this->start_controls_tab(
	'rbae_normal_tab',
	[
		'label' => esc_html__( 'Normal', 'rb-addons-for-elementor' ),
	]
);

// rbae_item_color
$this->add_control(
    'rbae_item_color',
    [
        'type' => Controls_Manager::COLOR,
        'label' => esc_html__('Item Color', 'rb-addons-for-elementor'),
        'global' => [
            'default' => Global_Colors::COLOR_PRIMARY
            // You can use us : [COLOR_PRIMARY, COLOR_SECONDARY, COLOR_TEXT, COLOR_ACCENT]
        ],
        'selectors' => ['{{WRAPPER}} .class-name' => 'color: {{VALUE}}']
    ]
);

// rbae_item_bg_color
$this->add_control(
    'rbae_item_bg_color',
    [
        'type' => Controls_Manager::COLOR,
        'label' => esc_html__('Item Background Color', 'rb-addons-for-elementor'),
        'global' => [
            'default' => Global_Colors::COLOR_PRIMARY
            // You can use us : [COLOR_PRIMARY, COLOR_SECONDARY, COLOR_TEXT, COLOR_ACCENT]
        ],
        'selectors' => ['{{WRAPPER}} .class-name' => 'color: {{VALUE}}']
    ]
);

$this->end_controls_tab();

// rbae_hover_tab
$this->start_controls_tab(
	'rbae_hover_tab',
	[
		'label' => esc_html__( 'Hover', 'rb-addons-for-elementor' ),
	]
);

// rbae_item_hover_color
$this->add_control(
    'rbae_item_hover_color',
    [
        'type' => Controls_Manager::COLOR,
        'label' => esc_html__('Item Color', 'rb-addons-for-elementor'),
        'global' => [
            'default' => Global_Colors::COLOR_PRIMARY
            // You can use us : [COLOR_PRIMARY, COLOR_SECONDARY, COLOR_TEXT, COLOR_ACCENT]
        ],
        'selectors' => ['{{WRAPPER}} .class-name' => 'color: {{VALUE}}']
    ]
);

// rbae_item_bg_color
$this->add_control(
    'rbae_item_hover_bg_color',
    [
        'type' => Controls_Manager::COLOR,
        'label' => esc_html__('Item Background Color', 'rb-addons-for-elementor'),
        'global' => [
            'default' => Global_Colors::COLOR_PRIMARY
            // You can use us : [COLOR_PRIMARY, COLOR_SECONDARY, COLOR_TEXT, COLOR_ACCENT]
        ],
        'selectors' => ['{{WRAPPER}} .class-name' => 'color: {{VALUE}}']
    ]
);

$this->end_controls_tab();

$this->end_controls_tabs();

// rbae_item_alignment
$this->add_responsive_control(
    'rbae_item_alignment',
    [
        'label' => esc_html__('Alignment', 'rb-addons-for-elementor'),
        'type' => Controls_Manager::CHOOSE,
        'options' => [
            'left' => [
                'title' => esc_html__('Left', 'rb-addons-for-elementor'),
                'icon' => 'eicon-text-align-left',
            ],
            'center' => [
                'title' => esc_html__('Center', 'rb-addons-for-elementor'),
                'icon' => 'eicon-text-align-center',
            ],
            'right' => [
                'title' => esc_html__('Right', 'rb-addons-for-elementor'),
                'icon' => 'eicon-text-align-right',
            ],
            'justified' => [
                'title' => esc_html__('Justified', 'rb-addons-for-elementor'),
                'icon' => 'eicon-text-align-justify',
            ]
        ],
        'default' => 'left',
        'devices' => ['desktop', 'tablet', 'mobile'],
        'toggle' => true,
        'selectors' => [
            '{{WRAPPER}} .class-name' => 'text-align: {{VALUE}};',
        ]
    ]
);