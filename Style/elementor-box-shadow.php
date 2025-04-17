<?php

$this->add_group_control(
    \Elementor\Group_Control_Box_Shadow::get_type(),
    [
        'name' => 'box_shadow',
        'label' => esc_html__( 'Box Shadow', 'textdomain' ),
        'selector' => '{{WRAPPER}} .your-class',
    ]
);