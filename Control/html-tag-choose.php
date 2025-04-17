<?php

// html_tag
$this->add_control(
    'rbae_html_tag',
    [
        'label' => esc_html__('HTML Tag', 'rb-addons-for-elementor'),
        'type' => Controls_Manager::SELECT,
        'options' => [
            'h1' => [
                'title' => esc_html__('H1', 'rb-addons-for-elementor')
            ],
            'h2' => [
                'title' => esc_html__('H2', 'rb-addons-for-elementor')
            ],
            'h3' => [
                'title' => esc_html__('H3', 'rb-addons-for-elementor'),
                'icon' => 'eicon-editor-h3'
            ],
            'h4' => [
                'title' => esc_html__('H4', 'rb-addons-for-elementor')
            ],
            'h5' => [
                'title' => esc_html__('H5', 'rb-addons-for-elementor')
            ],
            'h6' => [
                'title' => esc_html__('H6', 'rb-addons-for-elementor')
            ],
            'p' => [
                'title' => esc_html__('P', 'rb-addons-for-elementor')
            ],
            'div' => [
                'title' => esc_html__('Div', 'rb-addons-for-elementor')
            ],
            'span' => [
                'title' => esc_html__('Span', 'rb-addons-for-elementor')
            ]
        ],
        'default' => 'h2',
        'toggle' => false,
    ]
);