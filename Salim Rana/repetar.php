<?php

$repeater = new \Elementor\Repeater();


// skill_text_item
$this->add_control(
    'skill_text_item',
    [
        'label' => esc_html__('Header Bottom Item', 'tpcore'),
        'type' => \Elementor\Controls_Manager::REPEATER,
        'fields' => $repeater->get_controls(),
        'default' => [
            [
                'skill_text' => esc_html__('8 Years Job', 'tpcore')
            ],
            [
                'skill_text' => esc_html__('500+ Projects', 'tpcore')
            ],
            [
                'skill_text' => esc_html__('Support', 'tpcore')
            ]
        ],
        'title_field' => '{{{ skill_text }}}'
    ]
);

?>

<?php foreach ($settings['tp_icon_list'] as $item) : ?>

<!-- Add HTML Code Here -->

<?php endforeach; ?>