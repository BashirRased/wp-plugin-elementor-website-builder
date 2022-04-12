<?php

// Text Color
$this->add_control(
    'unique_id',
    [
        'type' => \Elementor\Controls_Manager::COLOR,
        'label' => esc_html__('Text Color', 'rb-ewo'),
        'default' => '#6EC1E4',
        'selectors' => ['{{WRAPPER}} selector' => 'color: {{VALUE}}']
    ]
);