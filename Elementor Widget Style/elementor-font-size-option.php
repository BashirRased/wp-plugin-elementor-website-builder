<?php

// Font Size Option
$this->add_control(
    'unique_id',
    [
        'label' => esc_html__('Size', 'text-domain'),
        'type' => \Elementor\Controls_Manager::SELECT,
        'default' => 'default',
        'options' => [
            'default'  => esc_html__('Default', 'text-domain'),
            'small' => esc_html__('Small', 'text-domain'),
            'medium' => esc_html__('Medium', 'text-domain'),
            'large' => esc_html__('Large', 'text-domain'),
            'xl' => esc_html__('XL', 'text-domain'),
            'xxl' => esc_html__('XXL', 'text-domain')
        ]
    ]
);

?>

<h5 class="rb-heading rb-font-size-<?php echo esc_attr($settings['unique_id']); ?>">
    <?php echo $settings['text_id']; ?>
</h5>