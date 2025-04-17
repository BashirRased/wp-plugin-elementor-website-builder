<?php

// width
$this->add_responsive_control(
    'width',
    [
        'label' => esc_html__( 'Width', 'rb-addons-for-elementor' ),
        'type' => Controls_Manager::SLIDER,
        'size_units' => [ 'px', '%', 'em', 'rem' ],
        'range' => [
            'px' => [
                'min' => 10,
                'max' => 100,
                'step' => 1,
            ],
            '%' => [
                'min' => 10,
                'max' => 100,
                'step' => 1,
            ],
            'em' => [
                'min' => 10,
                'max' => 100,
                'step' => 1,
            ],
            'rem' => [
                'min' => 10,
                'max' => 100,
                'step' => 1,
            ],
        ],
        'default' => [
            'unit' => 'px',
            'size' => 20,
        ],
        'selectors' => [
            '{{WRAPPER}} .your-class' => 'width: {{SIZE}}{{UNIT}};',
        ],
    ]
);

// height
$this->add_responsive_control(
    'height',
    [
        'label' => esc_html__( 'Height', 'rb-addons-for-elementor' ),
        'type' => Controls_Manager::SLIDER,
        'size_units' => [ 'px', '%', 'em', 'rem' ],
        'range' => [
            'px' => [
                'min' => 10,
                'max' => 100,
                'step' => 1,
            ],
            '%' => [
                'min' => 10,
                'max' => 100,
                'step' => 1,
            ],
            'em' => [
                'min' => 10,
                'max' => 100,
                'step' => 1,
            ],
            'rem' => [
                'min' => 10,
                'max' => 100,
                'step' => 1,
            ],
        ],
        'default' => [
            'unit' => 'px',
            'size' => 20,
        ],
        'selectors' => [
            '{{WRAPPER}} .your-class' => 'height: {{SIZE}}{{UNIT}};',
        ],
    ]
);