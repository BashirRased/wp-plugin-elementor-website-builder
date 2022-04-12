<?php

// Text Alignment
$this->add_responsive_control(
    'unique_id',
    [
        'label' => esc_html__('Alignment', 'text-domain'),
        'type' => \Elementor\Controls_Manager::CHOOSE,
        'options' => [
            'left' => [
                'title' => esc_html__('Left', 'text-domain'),
                'icon' => 'eicon-text-align-left',
            ],
            'center' => [
                'title' => esc_html__('Center', 'text-domain'),
                'icon' => 'eicon-text-align-center',
            ],
            'right' => [
                'title' => esc_html__('Right', 'text-domain'),
                'icon' => 'eicon-text-align-right',
            ],
            'justified' => [
                'title' => esc_html__('Justified', 'text-domain'),
                'icon' => 'eicon-text-align-justify',
            ]
        ],
        'default' => 'left',
        'devices' => ['desktop', 'tablet', 'mobile'],
        'toggle' => true,
        'selectors' => [
            '{{WRAPPER}} .elementor-widget-container' => 'text-align: {{VALUE}};',
        ]
    ]
);	