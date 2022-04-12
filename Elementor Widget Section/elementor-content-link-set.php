<?php

// Content Link
$this->add_control(
    'unique_id',
    [
        'label' => esc_html__('Link', 'text-domain'),
        'type' => \Elementor\Controls_Manager::URL,
        'placeholder' => esc_html__('Paste URL or Type', 'text-domain'),
        'default' => [
            'url' => '',
            'is_external' => true,
            'nofollow' => true,
            'custom_attributes' => '',
        ],
        'label_block' => true,
    ]
);

?>

<?php
if (!empty($settings['unique_id']['url'])):
    $this->add_link_attributes('unique_id', $settings['unique_id']);
?>

<a <?php echo $this->get_render_attribute_string('unique_id'); ?>>
    <?php echo $settings['text_id']; ?>
</a>

<?php
else:
echo $settings['text_id']; 
endif;
?>