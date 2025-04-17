<?php

// HTML Tag Option
$this->add_control(
    'unique_id',
    [
        'label' => esc_html__('HTML Tag', 'rb-addons-for-elementor'),
        'type' => Controls_Manager::SELECT,
        'default' => 'h2',
        'options' => [
            'h1'  => esc_html__('H1', 'rb-addons-for-elementor'),
            'h2'  => esc_html__('H2', 'rb-addons-for-elementor'),
            'h3'  => esc_html__('H3', 'rb-addons-for-elementor'),
            'h4'  => esc_html__('H4', 'rb-addons-for-elementor'),
            'h5'  => esc_html__('H5', 'rb-addons-for-elementor'),
            'h6'  => esc_html__('H6', 'rb-addons-for-elementor'),
            'div'  => esc_html__('div', 'rb-addons-for-elementor'),
            'span'  => esc_html__('span', 'rb-addons-for-elementor'),
            'p'  => esc_html__('p', 'rb-addons-for-elementor')
        ]
    ]
);
?>

<!-- If Select H2 Tag -->
<?php if ($rb_headign_tag == 'h2'): ?>
    <h2>
        <?php echo $settings['unique_id']; ?>
    </h2>
<?php endif;?>