<?php

// Text Stroke
$this->add_control(
    'unique_id',
    [
        'label' => esc_html__('Text Stroke', 'text-domain'),
        'type' => \Elementor\Controls_Manager::POPOVER_TOGGLE,
        'label_off' => esc_html__('Default', 'text-domain'),
        'label_on' => esc_html__('Edit', 'text-domain'),
        'return_value' => 'yes',
        'default' => 'yes',
    ]
);

// Text Stroke Popover Start
$this->start_popover();

// Text Stroke Width
$this->add_responsive_control(
    'unique_id',
    [
        'label' => esc_html__('Text Stroke', 'text-domain'),
        'type' => \Elementor\Controls_Manager::SLIDER,
        'size_units' => ['px', 'em', 'rem'],
        'range' => [
            'px' => [
                'min' => 0,
                'max' => 10,
                'step' => 1						
            ],
            'em' => [
                'min' => 0,
                'max' => 1,
                'step' => .01	
            ],
            'rem' => [
                'min' => 0,
                'max' => 1,
                'step' => .01
            ]
        ],
        'default' => [
            'unit' => 'px',
            'size' => 0,
        ],				
        'devices' => ['desktop', 'tablet', 'mobile'],
        'selectors' => [
            '{{WRAPPER}} selector' => '-webkit-text-stroke-width: {{SIZE}}{{UNIT}};
            stroke-width: {{SIZE}}{{UNIT}};',
        ]
    ]
);

// Text Stroke Color
$this->add_control(
    'unique_id',
    [
        'type' => \Elementor\Controls_Manager::COLOR,
        'label' => esc_html__('Stroke Color', 'text-domain'),
        'default' => '#000000',
        'selectors' => ['{{WRAPPER}} selector' => '-webkit-text-stroke-color: {{VALUE}};
        stroke: {{VALUE}};']
    ]
);

$this->end_popover();
// Text Stroke Popover End