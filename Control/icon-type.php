<?php

// icon_type
$this->add_control(
    'icon_type',
    [
        'label' => esc_html__('Select Icon Type', 'rb-addons-for-elementor'),
        'type' => Controls_Manager::SELECT,
        'default' => 'icon',
        'options' => [
            'image' => esc_html__('Image', 'rb-addons-for-elementor'),
            'icon' => esc_html__('Icon', 'rb-addons-for-elementor'),
        ],
    ]
);

// icon_image
$this->add_control(
    'icon_image',
    [
        'label' => esc_html__('Upload Icon Image', 'rb-addons-for-elementor'),
        'type' => Controls_Manager::MEDIA,
        'condition' => [
            'icon_type' => 'image'
        ]

    ]
);

// font_icon
$this->add_control(
    'font_icon',
    [
        'show_label' => false,
        'type' => Controls_Manager::ICONS,
        'label_block' => true,
        'default' => [
            'value' => 'fa fa-facebook',
            'library' => 'solid',
        ],
        'condition' => [
            'icon_type' => 'icon'
        ]
    ]
);
?>

<?php if (!empty($settings['icon_image']['url'])): ?>
    <!-- Image Icon -->
    <img src="<?php echo $settings['icon_image']['url']; ?>" alt="<?php echo get_post_meta(attachment_url_to_postid($settings['icon_image']['url']), '_wp_attachment_image_alt', true); ?>">
<?php endif; ?>

<?php if (!empty($settings['font_icon'])): ?>
    <!-- Font Icon -->
    <?php \Elementor\Icons_Manager::render_icon( $settings['font_icon'], [ 'aria-hidden' => 'true' ] ); ?>
<?php endif; ?>