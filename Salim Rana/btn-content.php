<?php

// tp_btn_button_show
$this->add_control(
    'tp_btn_button_show',
    [
        'label' => esc_html__( 'Show Button', 'tpcore' ),
        'type' => Controls_Manager::SWITCHER,
        'label_on' => esc_html__( 'Show', 'tpcore' ),
        'label_off' => esc_html__( 'Hide', 'tpcore' ),
        'return_value' => 'yes',
        'default' => 'no',
    ]
);

// tp_btn_text
$this->add_control(
    'tp_btn_text',
    [
        'label' => esc_html__('Button Text', 'tpcore'),
        'type' => Controls_Manager::TEXT,
        'default' => esc_html__('Button Text', 'tpcore'),
        'title' => esc_html__('Enter button text', 'tpcore'),
        'label_block' => true,
        'condition' => [
            'tp_btn_button_show' => 'yes'
        ],
    ]
);

// tp_btn_link_type
$this->add_control(
    'tp_btn_link_type',
    [
        'label' => esc_html__('Button Link Type', 'tpcore'),
        'type' => Controls_Manager::SELECT,
        'options' => [
            'custom_link' => 'Custom Link',
            'page_link' => 'Internal Page',
        ],
        'default' => 'custom_link',
        'label_block' => true,
        'condition' => [
            'tp_btn_button_show' => 'yes'
        ],
    ]
);

// tp_btn_custom_link
$this->add_control(
    'tp_btn_custom_link',
    [
        'label' => esc_html__('Button link', 'tpcore'),
        'type' => Controls_Manager::URL,
        'dynamic' => [
            'active' => true,
        ],
        'placeholder' => esc_html__('#', 'tpcore'),
        'show_external' => false,
        'default' => [
            'url' => '#',
            'is_external' => true,
            'nofollow' => true,
            'custom_attributes' => '',
        ],
        'condition' => [
            'tp_btn_link_type' => 'custom_link',
            'tp_btn_button_show' => 'yes'
        ],
        'label_block' => true,
    ]
);

// tp_btn_page_link
$this->add_control(
    'tp_btn_page_link',
    [
        'label' => esc_html__('Select Button Page', 'tpcore'),
        'type' => Controls_Manager::SELECT2,
        'label_block' => true,
        'options' => tp_get_all_pages(),
        'condition' => [
            'tp_btn_link_type' => 'page_link',
            'tp_btn_button_show' => 'yes'
        ]
    ]
);

?>

<?php
// page_link
if ('page_link' == $settings['tp_btn_link_type']) {
    $this->add_render_attribute('tp-button-attr', 'href', get_permalink($settings['tp_btn_page_link']));
    $this->add_render_attribute('tp-button-attr', 'target', '_self');
    $this->add_render_attribute('tp-button-attr', 'rel', 'nofollow');    
    $this->add_render_attribute('tp-button-attr', 'class', 'baspro-btn');
}

// custom_link
if ('custom_link' == $settings['tp_btn_link_type']) {
    $this->add_render_attribute('tp-button-attr', 'href', $settings['tp_btn_custom_link']);
    $this->add_render_attribute('tp-button-attr', 'target', '_self');
    $this->add_render_attribute('tp-button-attr', 'rel', 'nofollow');    
    $this->add_render_attribute('tp-button-attr', 'class', 'baspro-btn');
}

?>

<?php if (!empty($settings['tp_btn_text'])) : ?>
<a <?php echo $this->get_render_attribute_string( 'tp-button-attr' ); ?>>
    <span><?php echo $settings['tp_btn_text']; ?></span>
</a>
<?php endif; ?>