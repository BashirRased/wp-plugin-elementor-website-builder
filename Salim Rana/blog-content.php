<?php

// Blog Query
$this->start_controls_section(
    'tp_post_query',
    [
        'label' => esc_html__('Blog Query', 'tpcore'),
    ]
);

$post_type = 'post';
$taxonomy = 'category';

// posts_per_page
$this->add_control(
    'posts_per_page',
    [
        'label' => esc_html__('Posts Per Page', 'tpcore'),
        'description' => esc_html__('Leave blank or enter -1 for all.', 'tpcore'),
        'type' => Controls_Manager::NUMBER,
        'default' => '3',
    ]
);

// category
$this->add_control(
    'category',
    [
        'label' => esc_html__('Include Categories', 'tpcore'),
        'description' => esc_html__('Select a category to include or leave blank for all.', 'tpcore'),
        'type' => Controls_Manager::SELECT2,
        'multiple' => true,
        'options' => tp_get_categories($taxonomy),
        'label_block' => true,
    ]
);

// exclude_category
$this->add_control(
    'exclude_category',
    [
        'label' => esc_html__('Exclude Categories', 'tpcore'),
        'description' => esc_html__('Select a category to exclude', 'tpcore'),
        'type' => Controls_Manager::SELECT2,
        'multiple' => true,
        'options' => tp_get_categories($taxonomy),
        'label_block' => true
    ]
);

// post__not_in
$this->add_control(
    'post__not_in',
    [
        'label' => esc_html__('Exclude Item', 'tpcore'),
        'type' => Controls_Manager::SELECT2,
        'options' => tp_get_all_types_post($post_type),
        'multiple' => true,
        'label_block' => true
    ]
);

// offset
$this->add_control(
    'offset',
    [
        'label' => esc_html__('Offset', 'tpcore'),
        'type' => Controls_Manager::NUMBER,
        'default' => '0',
    ]
);

// orderby
$this->add_control(
    'orderby',
    [
        'label' => esc_html__('Order By', 'tpcore'),
        'type' => Controls_Manager::SELECT,
        'options' => array(
            'ID' => 'Post ID',
            'author' => 'Post Author',
            'title' => 'Title',
            'date' => 'Date',
            'modified' => 'Last Modified Date',
            'parent' => 'Parent Id',
            'rand' => 'Random',
            'comment_count' => 'Comment Count',
            'menu_order' => 'Menu Order',
        ),
        'default' => 'date',
    ]
);

// order
$this->add_control(
    'order',
    [
        'label' => esc_html__('Order', 'tpcore'),
        'type' => Controls_Manager::SELECT,
        'options' => [
            'asc' 	=> esc_html__( 'Ascending', 'tpcore' ),
            'desc' 	=> esc_html__( 'Descending', 'tpcore' )
        ],
        'default' => 'desc',

    ]
);

// ignore_sticky_posts
$this->add_control(
    'ignore_sticky_posts',
    [
        'label' => esc_html__( 'Ignore Sticky Posts', 'tpcore' ),
        'type' => Controls_Manager::SWITCHER,
        'label_on' => esc_html__( 'Yes', 'tpcore' ),
        'label_off' => esc_html__( 'No', 'tpcore' ),
        'return_value' => 'yes',
        'default' => 'yes',
    ]
);

// tp_blog_title_word
$this->add_control(
    'tp_blog_title_word',
    [
        'label' => esc_html__('Title Word Count', 'tpcore'),
        'description' => esc_html__('Set how many word you want to display!', 'tpcore'),
        'type' => Controls_Manager::NUMBER,
        'default' => '6',
    ]
);

// tp_post_content
$this->add_control(
    'tp_post_content',
    [
        'label' => __('Content', 'tpcore'),
        'type' => Controls_Manager::SWITCHER,
        'label_on' => __('Show', 'tpcore'),
        'label_off' => __('Hide', 'tpcore'),
        'return_value' => 'yes',
        'default' => '',
    ]
);

// tp_post_content_limit
$this->add_control(
    'tp_post_content_limit',
    [
        'label' => __('Content Limit', 'tpcore'),
        'type' => Controls_Manager::TEXT,
        'label_block' => true,
        'default' => '14',
        'dynamic' => [
            'active' => true,
        ],
        'condition' => [
            'tp_post_content' => 'yes'
        ]
    ]
);

$this->end_controls_section();


<?php endwhile; wp_reset_query(); ?>
             <?php endif; ?>