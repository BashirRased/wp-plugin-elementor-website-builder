<?php

$repeater = new \Elementor\Repeater();

// unique_id
$repeater->add_control(
    'unique_id',
    [
        'type' => Controls_Manager::COLOR,
        'selectors' => ['{{WRAPPER}} {{CURRENT_ITEM}} a span' => 'background-color: {{VALUE}}']
    ]
);

// rb_social_icons_item
$this->add_control(
    'rb_social_icons_item',
    [
        'label' => esc_html__('Social Icons Item', 'rb-addons-for-elementor'),
        'type' => Controls_Manager::REPEATER,
        'fields' => $repeater->get_controls(),
        'default' => [
            [
                'list_title' => esc_html__( 'Title #1', 'rb-addons-for-elementor' ),
                'list_content' => esc_html__( 'Item content. Click the edit button to change this text.', 'rb-addons-for-elementor' ),
            ],
            [
                'list_title' => esc_html__( 'Title #2', 'rb-addons-for-elementor' ),
                'list_content' => esc_html__( 'Item content. Click the edit button to change this text.', 'rb-addons-for-elementor' ),
            ],
        ],
        'title_field' => '{{{ rb_social_icon_title }}}'
    ]
);

?>

<ul>
    <?php
    foreach ( $settings['rb_social_icons_item'] as $item ) : 
    ?>
    <li class="elementor-repeater-item-<?php echo esc_attr( $item['_id'] ); ?>" >
        <a href="<?php echo $item['rb_social_icon_link']['url']; ?>" target="_blank">
            <span></span>
            <span></span>
            <span></span>
            <span></span>
            <span><?php \Elementor\Icons_Manager::render_icon( $item['rb_social_icon'] ); ?></span>                    
        </a>
    </li>
    
    <?php endforeach; ?>
</ul>