<?php

// Style Tab Heading Blend Mode
$this->add_control(
    'unique_id',
    [
        'label' => esc_html__('Blend Mode', 'text-domain'),
        'type' => \Elementor\Controls_Manager::SELECT,
        'default' => 'normal',
        'options' => [
            'normal'  => esc_html__('Normal', 'text-domain'),
            'multiply'  => esc_html__('Multiply', 'text-domain'),
            'screen'  => esc_html__('Screen', 'text-domain'),
            'overlay'  => esc_html__('Overlay', 'text-domain'),
            'darken'  => esc_html__('Darken', 'text-domain'),
            'lighten'  => esc_html__('Lighten', 'text-domain'),
            'color-dodge'  => esc_html__('Color Dodge', 'text-domain'),
            'saturation'  => esc_html__('Saturation', 'text-domain'),
            'color'  => esc_html__('Color', 'text-domain'),
            'difference'  => esc_html__('Difference', 'text-domain'),
            'exclusion'  => esc_html__('Exclusion', 'text-domain'),
            'hue'  => esc_html__('Hue', 'text-domain'),
            'luminosity'  => esc_html__('Luminosity', 'text-domain')
        ],
        'selectors' => [
            '{{WRAPPER}} selector' => 'mix-blend-mode: {{VALUE}};',
        ]
    ]
);