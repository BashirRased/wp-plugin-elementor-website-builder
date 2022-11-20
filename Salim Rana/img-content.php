<?php

$this->add_control(
    'tp_icon_image',
    [
        'label' => esc_html__('Upload Image', 'tpcore'),
        'type' => Controls_Manager::MEDIA,
        'default' => [
            'url' => Utils::get_placeholder_image_src(),
        ]
    ]
);

?>

<?php

if ( !empty($settings['tp_image']['url']) ) {

    $tp_image = !empty($settings['tp_image']['id']) ? wp_get_attachment_image_url( $settings['tp_image']['id'], $settings['tp_image_size_size']) : $settings['tp_image']['url'];

    $tp_image_alt = get_post_meta($settings["tp_image"]["id"], "_wp_attachment_image_alt", true);

}

?>

<?php if ($settings['tp_image']['url'] || $settings['tp_image']['id']) : ?>
    <img src="<?php echo esc_url($tp_image); ?>" alt="<?php echo esc_attr($tp_image_alt); ?>">
<?php endif; ?>