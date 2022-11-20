<?php

$this->add_group_control(
    \Elementor\Group_Control_Background::get_type(),
    [
        'label' => esc_html__('Background Color', 'tpcore'),
        'types' => [ 'classic', 'gradient', 'video' ],
        'selectors' => '{{WRAPPER}} .service-item'
    ]
);