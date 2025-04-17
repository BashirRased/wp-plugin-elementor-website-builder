<?php
$this->add_control(
    'show_title',
    [
        'label' => esc_html__( 'Show Title', 'textdomain' ),
        'type' => Controls_Manager::SWITCHER,
        'label_on' => esc_html__( 'Show', 'textdomain' ),
        'label_off' => esc_html__( 'Hide', 'textdomain' ),
        'return_value' => 'yes',
        'default' => 'yes',
    ]
);