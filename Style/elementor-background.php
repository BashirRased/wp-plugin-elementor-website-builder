<?php

$this->add_group_control(
    \Elementor\Group_Control_Background::get_type(),
    [
        'name' => 'background',
        'types' => [ 'classic', 'gradient', 'video' ],
        'selector' => '{{WRAPPER}} .your-class',
    ]
);