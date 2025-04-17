<?php
// text_id
$this->add_control(
    'text_id',
    [
        'label' => esc_html__('Text', 'rb-addons-for-elementor'),
        'default' => esc_html__('Text 1', 'rb-addons-for-elementor'),
        'type' => Controls_Manager::TEXT,
        'label_block' => true,
    ]
);
?>

<?php if ( !empty($settings['text_id']) ) : ?>
    <?php echo $settings['text_id']; ?>
<?php endif; ?>