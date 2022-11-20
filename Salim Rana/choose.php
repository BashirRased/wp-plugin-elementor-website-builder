<?php

$this->add_control(
    'tp_title_tag',
    [
        'label' => esc_html__('Title HTML Tag', 'tpcore'),
        'type' => Controls_Manager::CHOOSE,
        'options' => [
            'h1' => [
                'title' => esc_html__('H1', 'tpcore'),
                'icon' => 'eicon-editor-h1'
            ],
            'h2' => [
                'title' => esc_html__('H2', 'tpcore'),
                'icon' => 'eicon-editor-h2'
            ],
            'h3' => [
                'title' => esc_html__('H3', 'tpcore'),
                'icon' => 'eicon-editor-h3'
            ],
            'h4' => [
                'title' => esc_html__('H4', 'tpcore'),
                'icon' => 'eicon-editor-h4'
            ],
            'h5' => [
                'title' => esc_html__('H5', 'tpcore'),
                'icon' => 'eicon-editor-h5'
            ],
            'h6' => [
                'title' => esc_html__('H6', 'tpcore'),
                'icon' => 'eicon-editor-h6'
            ]
        ],
        'default' => 'h2',
        'toggle' => false,
    ]
);