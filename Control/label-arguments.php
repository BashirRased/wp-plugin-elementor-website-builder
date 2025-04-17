<?php

'type' => \Elementor\Controls_Manager::TEXT,

'label' => esc_html__( 'Control Label', 'textdomain' ),
'title' => esc_html__( 'Control Label', 'textdomain' ),
'description' => esc_html__( 'Short control description.', 'textdomain' ),
'default' => esc_html__( 'Control Label', 'textdomain' ),

'show_label' => true,
'label_block' => false,
'separator' => 'after', // default, before, after, none

'condition' => [
    'border' => 'yes',
],

'condition' => [
    'dependent-control-name' => [ 'value-1', 'value-2' ],
],

'condition' => [
    'dependent-control-1-name' => 'dependent-control-1-value',
    'dependent-control-2-name' => 'dependent-control-2-value',
    'dependent-control-3-name' => 'dependent-control-3-value',
],

'dynamic' => [
    'active' => true,
],

public function get_script_depends() {
    wp_register_script(
        'test-widget-handler',
        plugins_url( 'js/test-widget.js', __FILE__ ),
        [ 'elementor-frontend' ] // Dependent on 'elementor-frontend' script.
    );
    return [ 'test-widget-handler' ];
},

'frontend_available' => true,

'input_type' => 'text', // button, checkbox, color, date, datetime-local, email, file, hidden, image, month, number, password, radio, range, reset, search, submit, tel, text, time, url, week

'placeholder' => esc_html__( 'Control Label', 'textdomain' ),

'classes' => 'class-1 class2',

'min' => 5,

'max' => 100,

'step' => 5,

'rows' => 10,

'language' => 'html',

'label_on' => esc_html__( 'Show', 'textdomain' ),

'label_off' => esc_html__( 'Hide', 'textdomain' ),

'return_value' => 'yes', // yes, no

'options' => [
    '' => esc_html__( 'Default', 'textdomain' ),
    'none' => esc_html__( 'None', 'textdomain' ),
    'solid'  => esc_html__( 'Solid', 'textdomain' ),
    'dashed' => esc_html__( 'Dashed', 'textdomain' ),
    'dotted' => esc_html__( 'Dotted', 'textdomain' ),
    'double' => esc_html__( 'Double', 'textdomain' ),
],

'options' => [
    'left' => [
        'title' => esc_html__( 'Left', 'textdomain' ),
        'icon' => 'eicon-text-align-left',
    ],
    'center' => [
        'title' => esc_html__( 'Center', 'textdomain' ),
        'icon' => 'eicon-text-align-center',
    ],
    'right' => [
        'title' => esc_html__( 'Right', 'textdomain' ),
        'icon' => 'eicon-text-align-right',
    ],
],

'multiple' => true, 

'toggle' => true,

'selectors' => [
    '{{WRAPPER}} .your-class' => 'text-align: {{VALUE}};',
],

'selectors' => [
    '{{WRAPPER}} {{CURRENT_ITEM}}' => 'color: {{VALUE}}'
],

'alpha' => true, 

'include' => [
    'fa fa-facebook',
    'fa fa-flickr',
    'fa fa-google-plus',
    'fa fa-instagram',
    'fa fa-linkedin',
    'fa fa-pinterest',
    'fa fa-reddit',
    'fa fa-twitch',
    'fa fa-twitter',
    'fa fa-vimeo',
    'fa fa-youtube',
],

'groups' => [],

'picker_options' => [],