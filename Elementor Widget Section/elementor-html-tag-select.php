<?php

// HTML Tag Option
$this->add_control(
    'unique_id',
    [
        'label' => esc_html__('HTML Tag', 'text-domain'),
        'type' => \Elementor\Controls_Manager::SELECT,
        'default' => 'h2',
        'options' => [
            'h1'  => esc_html__('H1', 'text-domain'),
            'h2'  => esc_html__('H2', 'text-domain'),
            'h3'  => esc_html__('H3', 'text-domain'),
            'h4'  => esc_html__('H4', 'text-domain'),
            'h5'  => esc_html__('H5', 'text-domain'),
            'h6'  => esc_html__('H6', 'text-domain'),
            'div'  => esc_html__('div', 'text-domain'),
            'span'  => esc_html__('span', 'text-domain'),
            'p'  => esc_html__('p', 'text-domain')
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