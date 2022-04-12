<?php

// Text Control
$this->add_control(
    'control_unique_name',
    [
        'type' => \Elementor\Controls_Manager::TEXT,
        'label' => esc_html__('Control Title', 'text-domain'),
        'placeholder' => esc_html__('Enter your control title', 'text-domain'),
    ]
);

// Textarea Control
$this->add_control(
    'item_description',
    [
        'label' => esc_html__( 'Description', 'plugin-name' ),
        'type' => \Elementor\Controls_Manager::TEXTAREA,
        'rows' => 10,
        'default' => esc_html__( 'Default description', 'plugin-name' ),
        'placeholder' => esc_html__( 'Type your description here', 'plugin-name' ),
    ]
);

// Heading Control
$this->add_control(
    'more_options',
    [
        'label' => esc_html__( 'Additional Options', 'plugin-name' ),
        'type' => \Elementor\Controls_Manager::HEADING,
        'separator' => 'before',
    ]
);

// Number Control
$this->add_control(
    'control_unique_name',
    [
        'type' => \Elementor\Controls_Manager::NUMBER,
        'label' => esc_html__('Control Title', 'text-domain'),
        'placeholder' => '0',
        'min' => 0,
        'max' => 100,
        'step' => 1,
        'default' => 50,
    ]
);

// Select Control
$this->add_control(
    'control_unique_name',
    [
        'type' => \Elementor\Controls_Manager::SELECT,
        'label' => esc_html__('Control Title', 'text-domain'),
        'options' => [
            'option-1' => esc_html__('Option 1', 'text-domain'),
            'option-2' => esc_html__('Option 2', 'text-domain'),
            'option-3' => esc_html__('Option 3', 'text-domain'),
        ],
        'default' => 'option-1',
    ]
);

// Choose Control
$this->add_control(
    'control_unique_name',
    [
        'type' => \Elementor\Controls_Manager::CHOOSE,
        'label' => esc_html__('Alignment', 'text-domain'),
        'options' => [
            'left' => [
                'title' => esc_html__('Left', 'text-domain'),
                'icon' => 'eicon-text-align-left',
            ],
            'center' => [
                'title' => esc_html__('Center', 'text-domain'),
                'icon' => 'eicon-text-align-center',
            ],
            'right' => [
                'title' => esc_html__('Right', 'text-domain'),
                'icon' => 'eicon-text-align-right',
            ],
        ],
        'default' => 'center',
    ]
);

// Slider Control
$this->add_control(
    'font_size',
    [
        'type' => \Elementor\Controls_Manager::SLIDER,
        'label' => esc_html__('Size', 'text-domain'),
        'size_units' => ['px', 'em', 'rem'],
        'range' => [
            'px' => [
                'min' => 1,
                'max' => 200,
            ],
        ],
        'default' => [
            'unit' => 'px',
            'size' => 20,
        ],
    ]
);

// Color Control
$this->add_control(
    'text_color',
    [
        'type' => \Elementor\Controls_Manager::COLOR,
        'label' => esc_html__('Text Color', 'text-domain'),
        'default' => '#fefefe',
    ]
);

// Media Control
$this->add_control(
    'image',
    [
        'type' => \Elementor\Controls_Manager::MEDIA,
        'label' => esc_html__('Choose Image', 'text-domain'),
        'default' => [
            'url' => \Elementor\Utils::get_placeholder_image_src(),
        ]
    ]
);