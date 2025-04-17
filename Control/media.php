<?php

use Elementor\Controls_Manager;
use Elementor\Utils;
use Elementor\Group_Control_Image_Size;

// Media Control
$this->add_control(
    'image',
    [
        'type' => Controls_Manager::MEDIA,
        'label' => esc_html__('Choose Image', 'text-domain'),
        'description' => esc_html__('Add Your Image', 'text-domain'),
        'show_label' => true,
        'label_block' => true,
        'label_block' => true,
        'separator' => 'default', // default, before, after and none
        'media_types' => ['image', 'video'], // image, video and svg
        'default' => [
            'id' => '',
            'url' => Utils::get_placeholder_image_src()
        ]
    ]
);

// Media Control Size
// https://developers.elementor.com/docs/controls/classes/group-control-image-size/
$this->add_group_control(
	Group_Control_Image_Size::get_type(),
	[
		'name' => 'thumbnail', // Usage: `{name}_size` and `{name}_custom_dimension`, in this case `thumbnail_size` and `thumbnail_custom_dimension`.
		'exclude' => [ 'custom' ],
		'include' => [],
		'default' => 'large',
	]
);