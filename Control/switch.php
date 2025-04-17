<?php

// switcher_id
$this->add_control(
    'switcher_id',
    [
        'label' => esc_html__( 'Show Header Bottom', 'rb-addons-for-elementor' ),
        'type' => Controls_Manager::SWITCHER,
        'label_on' => esc_html__( 'Show', 'rb-addons-for-elementor' ),
        'label_off' => esc_html__( 'Hide', 'rb-addons-for-elementor' ),
        'return_value' => 'yes',
        'default' => 'no',
    ]
);

?>


<?php if ( 'yes' === $settings['switcher_id'] ) : ?>

<?php endif; ?>