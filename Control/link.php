<?php

// link_id
$this->add_control(
    'link_id',
    [
        'label' => esc_html__( 'Link', 'rb-addons-for-elementor' ),
        'type' => Controls_Manager::URL,
        'options' => [ 'url', 'is_external', 'nofollow' ],
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