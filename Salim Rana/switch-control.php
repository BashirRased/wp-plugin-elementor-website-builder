<?php

$this->add_control(
    'tp_herear_bottom_switch',
    [
        'label' => esc_html__( 'Show Header Bottom', 'tpcore' ),
        'type' => Controls_Manager::SWITCHER,
        'label_on' => esc_html__( 'Show', 'tpcore' ),
        'label_off' => esc_html__( 'Hide', 'tpcore' ),
        'return_value' => 'yes',
        'default' => 'no',
    ]
);

?>


<?php if ( 'yes' === $settings['tp_icon_switch'] ) : ?>

<?php endif; ?>