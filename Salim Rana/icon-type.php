<?php

// tp_icon_type
$repeater->add_control(
    'tp_icon_type',
    [
        'label' => esc_html__('Select Icon Type', 'tpcore'),
        'type' => \Elementor\Controls_Manager::SELECT,
        'default' => 'icon',
        'options' => [
            'image' => esc_html__('Image', 'tpcore'),
            'icon' => esc_html__('Icon', 'tpcore'),
        ],
    ]
);

// tp_icon_image
$repeater->add_control(
    'tp_icon_image',
    [
        'label' => esc_html__('Upload Icon Image', 'tpcore'),
        'type' => Controls_Manager::MEDIA,
        'default' => [
            'url' => Utils::get_placeholder_image_src(),
        ],
        'condition' => [
            'tp_icon_type' => 'image'
        ]

    ]
);

// tp_icon
if (tp_is_elementor_version('<', '2.6.0')) {
    $repeater->add_control(
        'tp_icon',
        [
            'show_label' => false,
            'type' => Controls_Manager::ICON,
            'label_block' => true,
            'default' => 'fa-solid fa-check',
            'condition' => [
                'tp_icon_type' => 'icon'
            ]
        ]
    );
}

// tp_selected_icon
else {
    $repeater->add_control(
        'tp_selected_icon',
        [
            'show_label' => false,
            'type' => Controls_Manager::ICONS,
            'fa4compatibility' => 'icon',
            'label_block' => true,
            'default' => [
                'value' => 'fas fa-star',
                'library' => 'solid',
            ],
            'condition' => [
                'tp_icon_type' => 'icon'
            ]
        ]
    );
}

// tp_icon_list
$this->add_control(
    'tp_icon_list',
    [
        'label' => esc_html__('Icon - List', 'tpcore'),
        'type' => \Elementor\Controls_Manager::REPEATER,
        'fields' => $repeater->get_controls(),
        'default' => [
            [
                'tp_icon_title' => esc_html__('Discover', 'tpcore'),
            ],
            [
                'tp_icon_title' => esc_html__('Define', 'tpcore')
            ],
            [
                'tp_icon_title' => esc_html__('Develop', 'tpcore')
            ]
        ],
        'title_field' => '{{{ tp_icon_title }}}',
    ]
);

?>

<?php 

if ( !empty($settings['tp_header_img']['url']) ) {

    // Image Tag
    $tp_header_img = !empty($settings['tp_header_img']['id']) ? wp_get_attachment_image_url( $settings['tp_header_img']['id'], $settings['tp_header_img_size_size']) : $settings['tp_header_img']['url'];

    // Alt Tag
    $tp_header_img_alt = get_post_meta($settings["tp_header_img"]["id"], "_wp_attachment_image_alt", true);		

}

?>

<?php foreach ($settings['tp_icon_list'] as $item) : ?>

<li>

    <?php if($item[''] !== 'image') : ?>

        <?php if (!empty($item['tp_icon']) || !empty($item['tp_selected_icon']['value'])) : ?>
            <span>
                <?php tp_render_icon($item, 'tp_icon', 'tp_selected_icon'); ?>
            </span>
        <?php endif; ?>   

    <?php else : ?>
        
        <?php if (!empty($item['tp_image']['url'])): ?>
            <img src="<?php echo $item['tp_image']['url']; ?>" alt="<?php echo get_post_meta(attachment_url_to_postid($item['tp_image']['url']), '_wp_attachment_image_alt', true); ?>">
        <?php endif; ?>

    <?php endif; ?>


</li>

<?php endforeach; ?>