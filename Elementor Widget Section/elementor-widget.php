<?php
class RB_Image_Widget extends \Elementor\Widget_Base {

	public function get_name() {
		return 'rb_image_widget';
	}

	public function get_title() {
		return esc_html__('RB Image Widget', 'rb-ewo');
	}

	public function get_icon() {
		return 'eicon-t-letter';
	}

	public function get_categories() {
		return ['rb-widgets'];
	}

	public function get_keywords() {
		return ['rb', 'image'];
	}

    protected function register_controls() {

        // Content Tab Start
		$this->start_controls_section(
			'rb_textarea_content',
			[
				'label' => esc_html__('Title', 'rb-ewo'),
				'tab' => \Elementor\Controls_Manager::TAB_CONTENT,
			]
		);

		$this->end_controls_section();
        // Content Tab End

        // Style Tab Start
        $this->start_controls_section(
			'rb_heding_style',
			[
				'label' => esc_html__('Title', 'rb-ewo'),
				'tab' => \Elementor\Controls_Manager::TAB_STYLE,
			]
		);

        $this->end_controls_section();
		// Style Tab End

    }

	protected function render() {
        $settings = $this->get_settings_for_display();
		?>
        
            <?php echo $settings['rb_heading']; ?>

		<?php
		
	}
}