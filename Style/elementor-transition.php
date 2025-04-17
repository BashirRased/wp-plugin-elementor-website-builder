<?php

// transition_property
$this->add_responsive_control(
    'transition_property',
    [
        'label' => esc_html__( 'Transition Property', 'rb-addons-for-elementor' ),
        'type' => Controls_Manager::SELECT2,
        'multiple' => true,
        'label_block' => true,
        'options' => [
            '' => esc_html__( 'Default', 'rb-addons-for-elementor' ),
            'none' => esc_html__( 'None', 'rb-addons-for-elementor' ),
            'all'  => esc_html__( 'All', 'rb-addons-for-elementor' ),
            'color'  => esc_html__( 'Color', 'rb-addons-for-elementor' ),
            'background-color'  => esc_html__( 'Background Color', 'rb-addons-for-elementor' ),
            'width'  => esc_html__( 'Width', 'rb-addons-for-elementor' ),
        ],
        'default' => 'all',
        'selectors' => [
            '{{WRAPPER}} .your-class' => 'transition-property: {{VALUE}};',
        ],
    ]
);

// transition_duration
$this->add_responsive_control(
    'transition_duration',
    [
        'label' => esc_html__( 'Transition Duration', 'rb-addons-for-elementor' ),
        'type' => Controls_Manager::SLIDER,
        'size_units' => [ 's' ],
        'range' => [
            's' => [
                'min' => 0.4,
                'max' => 1,
                'step' => 0.1,
            ]
        ],
        'default' => [
            'unit' => 's',
            'size' => 0.4,
        ],
        'selectors' => [
            '{{WRAPPER}} .your-class' => 'transition-duration: {{SIZE}}{{UNIT}};',
        ],
    ]
);

// transition_timing_function
$this->add_responsive_control(
    'transition_timing_function',
    [
        'label' => esc_html__( 'Transition Timing Function', 'rb-addons-for-elementor' ),
        'type' => Controls_Manager::SELECT,
        'label_block' => true,
        'options' => [
            '' => esc_html__( 'Default', 'rb-addons-for-elementor' ),
            'ease' => esc_html__( 'Ease', 'rb-addons-for-elementor' ),
            'ease-in'  => esc_html__( 'Ease In', 'rb-addons-for-elementor' ),
            'ease-out'  => esc_html__( 'Ease Out', 'rb-addons-for-elementor' ),
            'ease-in-out'  => esc_html__( 'Ease In Out', 'rb-addons-for-elementor' ),
            'linear'  => esc_html__( 'Linear', 'rb-addons-for-elementor' ),
            'step-start'  => esc_html__( 'Step Start', 'rb-addons-for-elementor' ),
            'step-end'  => esc_html__( 'Step End', 'rb-addons-for-elementor' ),
        ],
        'default' => 'ease-in-out',
        'selectors' => [
            '{{WRAPPER}} .your-class' => 'transition-timing-function: {{VALUE}};',
        ],
    ]
);

// transition_delay
$this->add_responsive_control(
    'transition_delay',
    [
        'label' => esc_html__( 'Transition Delay', 'rb-addons-for-elementor' ),
        'type' => Controls_Manager::SLIDER,
        'size_units' => [ 's' ],
        'range' => [
            's' => [
                'min' => 0.4,
                'max' => 1,
                'step' => 0.1,
            ]
        ],
        'default' => [
            'unit' => 's',
            'size' => 0.4,
        ],
        'selectors' => [
            '{{WRAPPER}} .your-class' => 'transition-delay: {{SIZE}}{{UNIT}};',
        ],
    ]
);