<?php
/**
 * Product Time Countdown for WooCommerce - General Section Settings
 *
 * @version 1.4.1
 * @since   1.0.0
 * @author  ProWCPlugins
 */

if ( ! defined( 'ABSPATH' ) ) exit; // Exit if accessed directly

if ( ! class_exists( 'ProWC_Product_Countdown_Settings_General' ) ) :

class ProWC_Product_Countdown_Settings_General extends ProWC_Product_Countdown_Settings_Section {

	/**
	 * Constructor.
	 *
	 * @version 1.0.0
	 * @since   1.0.0
	 */
	function __construct() {
		$this->id   = '';
		$this->desc = __( 'General', PCFWC_TEXTDOMAIN );
		parent::__construct();
	}

	/**
	 * add_settings.
	 *
	 * @version 1.4.1
	 * @since   1.0.0
	 * @todo    [dev] split into separate settings sections
	 * @todo    [dev] maybe set "Update rate" to higher min (e.g.: 1000)
	 */
	function get_settings() {
		return array(
			array(
				'title'     => __( 'Product Time Countdown Options', PCFWC_TEXTDOMAIN ),
				'type'      => 'title',
				'id'        => 'prowc_product_countdown_options',
			),
			array(
				'title'     => __( 'Product Time Countdown for WooCommerce', PCFWC_TEXTDOMAIN ),
				'desc'      => '<strong>' . __( 'Enable plugin', PCFWC_TEXTDOMAIN ) . '</strong>',
				'id'        => 'prowc_product_countdown_enabled',
				'default'   => 'yes',
				'type'      => 'checkbox',
			),
			array(
				'type'      => 'sectionend',
				'id'        => 'prowc_product_countdown_options',
			),
			array(
				'title'     => __( 'General Options', PCFWC_TEXTDOMAIN ),
				'type'      => 'title',
				'id'        => 'prowc_product_countdown_general_options',
			),
			array(
				'title'     => __( 'Template', PCFWC_TEXTDOMAIN ),
				'desc_tip'  => __( 'You can use HTML and/or shortcodes here.', PCFWC_TEXTDOMAIN ),
				'desc'      => sprintf( __( '%s is replaced by actual time counter.', PCFWC_TEXTDOMAIN ), '<code>%s</code>' ),
				'id'        => 'prowc_product_countdown_format',
				'default'   => '%s left',
				'type'      => 'textarea',
				'css'       => 'width:100%;',
				'prowc_ptc_raw' => true,
			),
			array(
				'title'     => __( 'Time format', PCFWC_TEXTDOMAIN ),
				'desc_tip'  => __( 'Ignored if "Human readable format" option below is enabled.', PCFWC_TEXTDOMAIN ),
				'desc'      => sprintf( __( 'Replaced values: %s.', PCFWC_TEXTDOMAIN ),
					'<code>{weeks}</code>, <code>{days}</code>, <code>{hours}</code>, <code>{minutes}</code>, <code>{seconds}</code>' ),
				'id'        => 'prowc_product_countdown_time_format',
				'default'   => '{hours}:{minutes}:{seconds}',
				'type'      => 'text',
				'css'       => 'width:100%;',
			),
			array(
				'desc'      => __( 'Upper limit', PCFWC_TEXTDOMAIN ),
				'id'        => 'prowc_product_countdown_time_format_upper_limit',
				'default'   => 'hours',
				'type'      => 'select',
				'class'     => 'wc-enhanced-select',
				'options'   => array(
					'seconds' => __( 'Seconds', PCFWC_TEXTDOMAIN ),
					'minutes' => __( 'Minutes', PCFWC_TEXTDOMAIN ),
					'hours'   => __( 'Hours', PCFWC_TEXTDOMAIN ),
					'days'    => __( 'Days', PCFWC_TEXTDOMAIN ),
					'weeks'   => __( 'Weeks', PCFWC_TEXTDOMAIN ),
				),
			),
			array(
				'title'     => __( 'Human readable format', PCFWC_TEXTDOMAIN ),
				'desc'      => __( 'Enable', PCFWC_TEXTDOMAIN ),
				'desc_tip'  => sprintf( __( 'Will use %s function to display time.', PCFWC_TEXTDOMAIN ),
					'<a target="_blank" href="https://codex.wordpress.org/Function_Reference/human_time_diff"><code>human_time_diff()</code></a>' ),
				'id'        => 'prowc_product_countdown_format_human_time_diff',
				'default'   => 'no',
				'type'      => 'checkbox',
			),
			array(
				'title'     => __( 'Style', PCFWC_TEXTDOMAIN ),
				'id'        => 'prowc_product_countdown_style',
				'default'   => 'font-size: xx-large; font-weight: bold;',
				'type'      => 'textarea',
				'css'       => 'width:100%;',
			),
			array(
				'title'     => __( 'Update rate', PCFWC_TEXTDOMAIN ),
				'desc'      => __( 'milliseconds', PCFWC_TEXTDOMAIN ),
				'id'        => 'prowc_product_countdown_update_rate_ms',
				'default'   => 1000,
				'type'      => 'number',
				'custom_attributes' => array( 'min' => 100 ),
			),
			array(
				'title'     => __( 'Reload page', PCFWC_TEXTDOMAIN ),
				'desc_tip'  => __( 'If enabled will reload page on time finished.', PCFWC_TEXTDOMAIN ),
				'id'        => 'prowc_product_countdown_reload_page',
				'default'   => 'no',
				'type'      => 'select',
				'class'     => 'wc-enhanced-select',
				'options'   => array(
					'yes'        => __( 'Reload', PCFWC_TEXTDOMAIN ),
					'yes_single' => __( 'Reload on single product pages only', PCFWC_TEXTDOMAIN ),
					'no'         => __( 'Do not reload', PCFWC_TEXTDOMAIN ),
				),
			),
			array(
				'title'     => __( 'Message on time finished', PCFWC_TEXTDOMAIN ),
				'desc_tip'  => __( 'Message will be visible on time finished on frontend instead of time counter.', PCFWC_TEXTDOMAIN ). ' ' .
					__( 'Can be empty.', PCFWC_TEXTDOMAIN ),
				'id'        => 'prowc_product_countdown_message_on_time_finished',
				'default'   => '',
				'type'      => 'textarea',
				'css'       => 'width:100%;',
			),
			array(
				'type'      => 'sectionend',
				'id'        => 'prowc_product_countdown_general_options',
			),
			array(
				'title'     => __( 'Position Options', PCFWC_TEXTDOMAIN ),
				'desc'      => apply_filters( 'prowc_product_countdown',
					'<em>' . sprintf( __( 'You will need %s plugin to change this section\'s settings.', PCFWC_TEXTDOMAIN ),
						'<a href="https://prowcplugins.com/downloads/product-time-countdown-for-woocommerce/" target="_blank">' .
							__( 'Product Time Countdown for WooCommerce Pro', PCFWC_TEXTDOMAIN ) . '</a>' ) . ' ' .
					sprintf( __( 'In Pro version you can also use %s shortcode to display the counter.', PCFWC_TEXTDOMAIN ),
						'<code>' . '[product_time_counter]' . '</code>' ) . '</em>', 'settings_position_options' ),
				'type'      => 'title',
				'id'        => 'prowc_product_countdown_position_options',
			),
			array(
				'title'     => __( 'Position on single product page', PCFWC_TEXTDOMAIN ),
				'id'        => 'prowc_product_countdown_position',
				'default'   => 'woocommerce_single_product_summary',
				'type'      => 'select',
				'class'     => 'wc-enhanced-select',
				'options'   => array(
					'disable'                                   => __( 'Do not add', PCFWC_TEXTDOMAIN ),
					'woocommerce_before_single_product'         => __( 'Before single product', PCFWC_TEXTDOMAIN ),
					'woocommerce_before_single_product_summary' => __( 'Before single product summary', PCFWC_TEXTDOMAIN ),
					'woocommerce_single_product_summary'        => __( 'Inside single product summary', PCFWC_TEXTDOMAIN ),
					'woocommerce_after_single_product_summary'  => __( 'After single product summary', PCFWC_TEXTDOMAIN ),
					'woocommerce_after_single_product'          => __( 'After single product', PCFWC_TEXTDOMAIN ),
					'woocommerce_before_add_to_cart_form'       => __( 'Before add to cart form', PCFWC_TEXTDOMAIN ),
					'woocommerce_before_add_to_cart_button'     => __( 'Before add to cart button', PCFWC_TEXTDOMAIN ),
					'woocommerce_after_add_to_cart_button'      => __( 'After add to cart button', PCFWC_TEXTDOMAIN ),
					'woocommerce_after_add_to_cart_form'        => __( 'After add to cart form', PCFWC_TEXTDOMAIN ),
				),
				'custom_attributes' => apply_filters( 'prowc_product_countdown', array( 'disabled' => 'disabled' ), 'settings' ),
			),
			array(
				'desc'      => __( 'Position priority', PCFWC_TEXTDOMAIN ),
				'desc_tip'  => __( 'Change this if you want to move the timer inside the Position.', PCFWC_TEXTDOMAIN ) . ' ' .
						__( 'Existing priorities:', PCFWC_TEXTDOMAIN ) . '<br>' .
						__( '<em>Before single product:</em><br>notices - 10.', PCFWC_TEXTDOMAIN ) . '<br>' .
						__( '<em>Before single product summary:</em><br>sale flash - 10,<br>product images - 20.', PCFWC_TEXTDOMAIN ) . '<br>' .
						__( '<em>Inside single product summary:</em><br>title - 5,<br>rating - 10,<br>price - 10,<br>excerpt - 20,<br>add to cart - 30,<br>meta - 40,<br>sharing - 50.', PCFWC_TEXTDOMAIN ) . '<br>' .
						__( '<em>After single product summary:</em><br>product data tabs - 10,<br>upsell - 15,<br>related products - 20.', PCFWC_TEXTDOMAIN ),
				'id'        => 'prowc_product_countdown_position_priority',
				'default'   => 10,
				'type'      => 'number',
				'custom_attributes' => apply_filters( 'prowc_product_countdown', array( 'disabled' => 'disabled' ), 'settings' ),
			),
			array(
				'title'     => __( 'Position on archive (shop) pages', PCFWC_TEXTDOMAIN ),
				'id'        => 'prowc_product_countdown_loop_position',
				'default'   => 'disable',
				'type'      => 'select',
				'class'     => 'wc-enhanced-select',
				'options'   => array(
					'disable'                                 => __( 'Do not add', PCFWC_TEXTDOMAIN ),
					'woocommerce_before_shop_loop_item'       => __( 'Before product', PCFWC_TEXTDOMAIN ),
					'woocommerce_before_shop_loop_item_title' => __( 'Before product title', PCFWC_TEXTDOMAIN ),
					'woocommerce_shop_loop_item_title'        => __( 'Inside product title', PCFWC_TEXTDOMAIN ),
					'woocommerce_after_shop_loop_item_title'  => __( 'After product title', PCFWC_TEXTDOMAIN ),
					'woocommerce_after_shop_loop_item'        => __( 'After product', PCFWC_TEXTDOMAIN ),
				),
				'custom_attributes' => apply_filters( 'prowc_product_countdown', array( 'disabled' => 'disabled' ), 'settings' ),
			),
			array(
				'desc'      => __( 'Position priority', PCFWC_TEXTDOMAIN ),
				'desc_tip'  => __( 'Change this if you want to move the timer inside the Position.', PCFWC_TEXTDOMAIN ),
				'id'        => 'prowc_product_countdown_loop_position_priority',
				'default'   => 10,
				'type'      => 'number',
				'custom_attributes' => apply_filters( 'prowc_product_countdown', array( 'disabled' => 'disabled' ), 'settings' ),
			),
			array(
				'type'      => 'sectionend',
				'id'        => 'prowc_product_countdown_position_options',
			),
			array(
				'title'     => __( '"Disable product" Action Options', PCFWC_TEXTDOMAIN ),
				'type'      => 'title',
				'id'        => 'prowc_product_countdown_disable_product_action_options',
			),
			array(
				'title'     => __( 'Make non-purchasable', PCFWC_TEXTDOMAIN ),
				'desc'      => __( 'Enable', PCFWC_TEXTDOMAIN ),
				'desc_tip'  => __( 'This will make products non-purchasable (i.e. product can\'t be added to the cart). However products will still be visible.', PCFWC_TEXTDOMAIN ),
				'id'        => 'prowc_product_countdown_disable_product_action_purchasable',
				'default'   => 'yes',
				'type'      => 'checkbox',
			),
			array(
				'title'     => __( 'Make invisible', PCFWC_TEXTDOMAIN ),
				'desc'      => __( 'Enable', PCFWC_TEXTDOMAIN ),
				'desc_tip'  => __( 'This will hide products in shop and search results. However products will still be accessible via direct link.', PCFWC_TEXTDOMAIN ) .
					apply_filters( 'prowc_product_countdown', '<br>' . sprintf( __( 'You will need %s plugin to enable this option.', PCFWC_TEXTDOMAIN ),
						'<a href="https://prowcplugins.com/downloads/product-time-countdown-for-woocommerce/" target="_blank">' .
							__( 'Product Time Countdown for WooCommerce Pro', PCFWC_TEXTDOMAIN ) . '</a>' ), 'settings' ),
				'id'        => 'prowc_product_countdown_disable_product_action_visibility',
				'default'   => 'no',
				'type'      => 'checkbox',
				'custom_attributes' => apply_filters( 'prowc_product_countdown', array( 'disabled' => 'disabled' ), 'settings' ),
			),
			array(
				'title'     => __( 'Make completely invisible', PCFWC_TEXTDOMAIN ),
				'desc'      => __( 'Enable', PCFWC_TEXTDOMAIN ),
				'desc_tip'  => __( 'This will hide products completely (including direct link).', PCFWC_TEXTDOMAIN ) .
					apply_filters( 'prowc_product_countdown', '<br>' . sprintf( __( 'You will need %s plugin to enable this option.', PCFWC_TEXTDOMAIN ),
						'<a href="https://prowcplugins.com/downloads/product-time-countdown-for-woocommerce/" target="_blank">' .
							__( 'Product Time Countdown for WooCommerce Pro', PCFWC_TEXTDOMAIN ) . '</a>' ), 'settings' ),
				'id'        => 'prowc_product_countdown_disable_product_action_query',
				'default'   => 'no',
				'type'      => 'checkbox',
				'custom_attributes' => apply_filters( 'prowc_product_countdown', array( 'disabled' => 'disabled' ), 'settings' ),
			),
			array(
				'type'      => 'sectionend',
				'id'        => 'prowc_product_countdown_disable_product_action_options',
			),
			array(
				'title'     => __( 'Admin Products List Options', PCFWC_TEXTDOMAIN ),
				'type'      => 'title',
				'id'        => 'prowc_product_countdown_admin_products_list_options',
			),
			array(
				'title'     => __( 'Add column', PCFWC_TEXTDOMAIN ),
				'desc'      => __( 'Add', PCFWC_TEXTDOMAIN ),
				'desc_tip'  => __( 'This will add "Countdown" column to admin products list.', PCFWC_TEXTDOMAIN ),
				'id'        => 'prowc_product_countdown_add_admin_column',
				'default'   => 'no',
				'type'      => 'checkbox',
			),
			array(
				'type'      => 'sectionend',
				'id'        => 'prowc_product_countdown_admin_products_list_options',
			),
		);
	}

}

endif;

return new ProWC_Product_Countdown_Settings_General();
