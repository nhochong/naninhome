<?php

use Elementor\Controls_Manager;

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly
}

class OSF_Elementor_Cart extends Elementor\Widget_Base {

	public function get_name() {
		return 'opal-cart';
	}

	public function get_title() {
		return __( 'Opal WooCommerce Cart', 'fridominimal-core' );
	}

	public function get_icon() {
		return 'eicon-woocommerce';
	}

	public function get_categories() {
		return [ 'opal-addons' ];
	}

	protected function _register_controls() {
		$this->start_controls_section(
			'cart_content',
			[
				'label' => __( 'WooCommerce Cart', 'fridominimal-core' ),
			]
		);

		$this->add_control(
			'icon',
			[
				'label' => __( 'Choose Icon', 'fridominimal-core' ),
				'type' => Controls_Manager::ICON,
				'default' => 'opal-icon-cart',
			]
		);

		$this->add_control(
			'title',
			[
				'label' => __( 'Title', 'fridominimal-core' ),
				'type' => Controls_Manager::TEXT,
				'default' => __( 'Shopping cart', 'fridominimal-core' ),
				'label_block' => true,
			]
		);

		$this->add_control(
			'title_hover',
			[
				'label' => __( 'Title Hover', 'fridominimal-core' ),
				'type' => Controls_Manager::TEXT,
				'default' => __( 'View your shopping cart', 'fridominimal-core' ),
				'label_block' => true,
			]
		);

		$this->add_control(
			'show_items',
			[
				'label'       => __('Show Total Items', 'fridominimal-core'),
				'type'        => Controls_Manager::SWITCHER,
			]
		);

		$this->add_control(
			'show_subtotal',
			[
				'label'       => __('Show Subtotal', 'fridominimal-core'),
				'type'        => Controls_Manager::SWITCHER,
			]
		);

		$this->end_controls_section();

		$this->start_controls_section(
			'section_lable_style',
			[
				'label' => __( 'Style', 'fridominimal-core' ),
				'tab' => Controls_Manager::TAB_STYLE,
			]
		);

		$this->start_controls_tabs( 'tabs_button_colors' );

		$this->start_controls_tab(
			'tab_icon_normal',
			[
				'label' => __( 'Normal', 'fridominimal-core' ),
			]
		);

		$this->add_control(
			'icon_color',
			[
				'label' => __( 'Icon Color', 'fridominimal-core' ),
				'type' => Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .cart-contents .fa' => 'color: {{VALUE}};',
				],

			]
		);

		$this->add_control(
			'item_color',
			[
				'label' => __( 'Item Color', 'fridominimal-core' ),
				'type' => Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .cart-contents .count' => 'color: {{VALUE}}',
				],
				'condition' => [
					'show_items' => 'yes',
				],
			]
		);

		$this->add_control(
			'item_background_color',
			[
				'label' => __( 'Background Color', 'fridominimal-core' ),
				'type' => Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .cart-contents .count' => 'background-color: {{VALUE}}',
				],
				'condition' => [
					'show_items' => 'yes',
				],
			]
		);

		$this->end_controls_tab();

		$this->start_controls_tab(
			'tab_icon_hover',
			[
				'label' => __( 'Hover', 'fridominimal-core' ),
			]
		);

		$this->add_control(
			'icon_color_hover',
			[
				'label' => __( 'Icon Color', 'fridominimal-core' ),
				'type' => Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .cart-contents .fa:hover' => 'color: {{VALUE}};',
				],
			]
		);

		$this->add_control(
			'item_text_color_hover',
			[
				'label' => __( 'Item Text Color', 'fridominimal-core' ),
				'type' => Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .cart-contents .count:hover' => 'color: {{VALUE}}',
				],
				'condition' => [
					'show_items' => 'yes',
				],
			]
		);

		$this->add_control(
			'item_background_color_hover',
			[
				'label' => __( 'Background Color', 'fridominimal-core' ),
				'type' => Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .cart-contents .count:hover' => 'background-color: {{VALUE}}',
				],
				'condition' => [
					'show_items' => 'yes',
				],
			]
		);

		$this->end_controls_tab();

		$this->end_controls_tabs();

		$this->end_controls_section();
	}

	protected function render() {
		$settings = $this->get_settings(); ?>
        <div class="site-header-cart menu">
            <a data-toggle="toggle" class="cart-contents header-button" href="<?php echo esc_url(wc_get_cart_url()); ?>" title="<?php echo esc_attr( $settings['title_hover'] ); ?>">
                <i class="<?php echo esc_attr( $settings['icon']); ?>" aria-hidden="true"></i>
                <span class="title"><?php echo esc_html( $settings['title']); ?></span>
                <?php if (!empty(WC()->cart) && WC()->cart instanceof WC_Cart): ?>
                    <?php if($settings['show_subtotal']): ?>
                        <span class="amount"><?php echo wp_kses_data(WC()->cart->get_cart_subtotal()); ?></span>
                    <?php endif; ?>

                    <?php if($settings['show_items']): ?>
                        <span class="count"><?php echo wp_kses_data(WC()->cart->get_cart_contents_count()); ?></span>
                        <span class="count-text"><?php echo wp_kses_data(_n("item", "items", WC()->cart->get_cart_contents_count(), "fridominimal-core")); ?></span>
                    <?php endif; ?>
                <?php endif; ?>
            </a>

            <ul class="shopping_cart">
                <li><?php the_widget('WC_Widget_Cart', 'title='); ?></li>
            </ul>
        </div>
    <?php
	}
}
