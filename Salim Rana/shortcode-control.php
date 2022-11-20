<?php

// tp_shortcode
$this->add_control(
    'tp_shortcode',
    [
        'label' => esc_html__('Shortcode', 'tpcore'),
        'type' => Controls_Manager::TEXT,
        'default' => esc_html__('Add TP Shortcode', 'tpcore'),
        'placeholder' => esc_html__('Type Shortcode Text', 'tpcore'),
        'label_block' => true,
    ]
);

?>

<?php 

$shortcode = $this->get_settings_for_display( 'tp_shortcode' );

$shortcode = do_shortcode( shortcode_unautop( $shortcode ) );

?>

<?php echo $shortcode; // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped ?>