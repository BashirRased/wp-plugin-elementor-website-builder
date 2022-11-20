<?php

// Style Tab Heading Text Shadow
$this->add_group_control(
    \Elementor\Group_Control_Text_Shadow::get_type(),
    [
        'name' => 'uniqe_id',
        'label' => esc_html__('Text Shadow', 'text-domain'),
        'selector' => '{{WRAPPER}} .rb-selector',
    ]
);