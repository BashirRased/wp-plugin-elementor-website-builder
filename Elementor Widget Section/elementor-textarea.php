<?php

// Content Tab Heading
$this->add_control(
    'unique_id',
    [
        'label' => esc_html__('Title', 'text-domain'),
        'type' => \Elementor\Controls_Manager::TEXTAREA,
        'rows' => 5,
        'separator' => 'after',
        'default' => esc_html__('Add Your Heading Text Here', 'text-domain'),
        'placeholder' => esc_html__('Enter your title', 'text-domain'),
    ]
);
?>

<h2>
    <?php echo $settings['rb_heading']; ?>
</h2>