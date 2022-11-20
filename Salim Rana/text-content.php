<?php

// tp_sub_title
$this->add_control(
    'tp_sub_title',
    [
        'label' => esc_html__('Title', 'tpcore'),
        'description' => tp_get_allowed_html_desc( 'basic' ),
        'type' => Controls_Manager::TEXT,
        'default' => esc_html__('TP Title', 'tpcore'),
        'placeholder' => esc_html__('Type Heading Text', 'tpcore'),
        'label_block' => true,
    ]
);

?>


<?php if ( !empty($settings['tp_sub_title']) ) : ?>    
    <span class="sectionTitle__small">
        <?php echo tp_kses( $settings['tp_sub_title'] ); ?>
    </span>
<?php endif; ?>