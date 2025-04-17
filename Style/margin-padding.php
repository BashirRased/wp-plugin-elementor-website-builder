<?php

// selector_id
$this->add_responsive_control(
    'selector_id',
    [
        'label' => esc_html__( 'Margin', 'rb-addons-for-elementor' ),
        'type' => Controls_Manager::DIMENSIONS,
        'size_units' => [ 'px', '%', 'em', 'rem' ],
        'default' => [
            'top' => '0',
            'right' => '0',
            'bottom' => '0',
            'left' => '0',
            'unit' => 'px',
            'isLinked' => false,
        ],
        'selectors' => [
            '{{WRAPPER}}' => 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
        ],
    ]
);

// selector_id
$this->add_responsive_control(
    'selector_id',
    [
        'label' => esc_html__( 'Padding', 'rb-addons-for-elementor' ),
        'type' => Controls_Manager::DIMENSIONS,
        'size_units' => [ 'px', '%', 'em', 'rem' ],
        'default' => [
            'top' => '0',
            'right' => '0',
            'bottom' => '0',
            'left' => '0',
            'unit' => 'px',
            'isLinked' => false,
        ],
        'selectors' => [
            '{{WRAPPER}}' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
        ],
    ]
);