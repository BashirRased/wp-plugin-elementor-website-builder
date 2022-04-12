<?php
if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

class Your_Widget_ClassName extends \Elementor\Widget_Base {

  // Widget Category Set
  public function get_categories() {
  return ['basic'];

      /* Elementor Category List Start Here */
      
      // Basic ['basic'],
      // Pro ['pro-elements'],
      // General ['general'],
      // Site ['theme-elements'],
      // WooCommerce ['woocommerce-elements'],
      // Pojo Themes ['pojo'],
      // WordPress ['wordpress'],
      // Custom Widget Category ['widget-category-id']

      /* Elementor Category List End Here */

  }

  // Widget Options Set
  protected function register_controls() {
    
    // Start Content Tab
    $this->start_controls_section(
			'unique_tab_content_id',
			[
				'label' => esc_html__('Tab Content Item Name Set', 'text-domain'),
				'tab' => \Elementor\Controls_Manager::TAB_CONTENT,
			]
		);

    // End Content Tab
    $this->end_controls_section();

    // Start Style Tab
    $this->start_controls_section(
			'unique_tab_style_id',
			[
				'label' => esc_html__('Tab Style Item Name Set', 'text-domain'),
				'tab' => \Elementor\Controls_Manager::TAB_STYLE,
			]
		);

    // End Content Tab
    $this->end_controls_section();

  }

}