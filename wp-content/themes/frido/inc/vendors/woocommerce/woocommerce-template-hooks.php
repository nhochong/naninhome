<?php
/**
 * homefinder WooCommerce hooks
 *
 * @package homefinder
 */

add_action('woocommerce_register_form_start', 'fridominimal_woocommerce_set_register_text', 10);
// woocommerce_no_products_found


/**
 * Styles
 *
 * @see  fridominimal_woocommerce_scripts()
 */
remove_action('woocommerce_before_main_content', 'woocommerce_breadcrumb', 20);
remove_action('woocommerce_before_main_content', 'woocommerce_output_content_wrapper', 10);
remove_action('woocommerce_after_main_content', 'woocommerce_output_content_wrapper_end', 10);
remove_action('woocommerce_sidebar', 'woocommerce_get_sidebar', 10);
remove_action('woocommerce_before_shop_loop', 'woocommerce_result_count', 20);
remove_action('woocommerce_before_shop_loop', 'woocommerce_catalog_ordering', 30);
add_action('woocommerce_before_main_content', 'fridominimal_before_content', 10);
add_action('woocommerce_after_main_content', 'fridominimal_after_content', 10);
add_action('fridominimal_content_top', 'fridominimal_shop_messages', 15);
add_action('fridominimal_content_top', 'woocommerce_breadcrumb', 10);

add_action('woocommerce_after_shop_loop', 'fridominimal_product_columns_wrapper_close', 40);

add_filter('loop_shop_columns', 'fridominimal_loop_columns');


remove_action('woocommerce_before_shop_loop_item_title', 'woocommerce_template_loop_product_thumbnail', 10);
add_action('woocommerce_before_shop_loop_item_title', 'fridominimal_template_loop_product_thumbnail', 10);


add_action('woocommerce_before_shop_loop', 'fridominimal_sorting_wrapper', 1);
add_action('woocommerce_before_shop_loop', 'fridominimal_sorting_group', 1);
if (!is_active_sidebar('sidebar-woocommerce-shop-filters')) {
    add_action('woocommerce_before_shop_loop', 'woocommerce_result_count', 2);
}
add_action('woocommerce_before_shop_loop', 'fridominimal_sorting_group_close', 3);
add_action('woocommerce_before_shop_loop', 'fridominimal_sorting_group', 5);
add_action('woocommerce_before_shop_loop', 'woocommerce_catalog_ordering', 7);
add_action('woocommerce_before_shop_loop', 'fridominimal_sorting_group_close', 7);
add_action('woocommerce_before_shop_loop', 'fridominimal_sorting_wrapper_close', 7);

//Recently Viewed Product
//add_action('wp_footer', 'otf_woocommerce_recently_viewed_product', 1);


//Config Style Single Product
$product_single_style = get_theme_mod('fridominimal_woocommerce_single_product_style', 1);
remove_action('woocommerce_single_product_summary', 'woocommerce_template_single_rating', 10);
add_action('woocommerce_single_product_summary', 'woocommerce_template_single_rating', 15);
add_action('woocommerce_single_product_summary', 'fridominimal_woocommerce_single_product_summary_inner_start', -1);
add_action('woocommerce_single_product_summary', 'fridominimal_woocommerce_single_product_summary_inner_end', 99999);

add_action('woocommerce_single_product_summary', 'fridominimal_woocommerce_single_deal', 25);

switch ($product_single_style) {
    case 1:
        // Support lightbox
        add_action('after_setup_theme', array(Flow_WooCommerce::getInstance(), 'add_support_gallery_all'));
        break;
    case 2:
        // Supports Single Image
        add_action('after_setup_theme', array(Flow_WooCommerce::getInstance(), 'add_support_gallery_all'));
        break;
    case 3:
        // Supports Single Image
        add_action('after_setup_theme', array(Flow_WooCommerce::getInstance(), 'add_support_gallery_all'));
        break;
    case 4:
        // Supports Single Image
        //add_action('after_setup_theme', array(Flow_WooCommerce::getInstance(), 'add_support_gallery_all'));
        add_action('after_setup_theme', array(Flow_WooCommerce::getInstance(), 'add_support_lightbox'));
        add_filter('woocommerce_single_product_image_thumbnail_html', 'fridominimal_woocommerce_single_product_image_thumbnail_html', 10, 2);
        break;
    case 5:
//        add_action('woocommerce_before_single_product_summary', 'fridominimal_woocommerce_single_product_5_wrap_start', 9);
//        add_action('woocommerce_after_single_product_summary', 'fridominimal_woocommerce_single_product_5_wrap_end', 9);
        // Support lightbox
        add_action('after_setup_theme', array(Flow_WooCommerce::getInstance(), 'add_support_lightbox'));
        add_filter('woocommerce_single_product_image_thumbnail_html', 'fridominimal_woocommerce_single_product_image_thumbnail_html', 10, 2);
        break;
}

if (defined('WC_VERSION') && version_compare(WC_VERSION, '2.3', '>=')) {
    add_filter('woocommerce_add_to_cart_fragments', 'fridominimal_cart_link_fragment');
} else {
    add_filter('add_to_cart_fragments', 'fridominimal_cart_link_fragment');
}

/**
 * Checkout Page
 *
 * @see fridominimal_checkout_before_customer_details_container
 * @see fridominimal_checkout_after_customer_details_container
 * @see fridominimal_checkout_after_order_review_container
 */

add_action('woocommerce_checkout_before_customer_details', 'fridominimal_checkout_before_customer_details_container', 1);
add_action('woocommerce_checkout_after_customer_details', 'fridominimal_checkout_after_customer_details_container', 1);
add_action('woocommerce_checkout_after_order_review', 'fridominimal_checkout_after_order_review_container', 1);


/**
 * Remove Action
 */
remove_action('woocommerce_after_single_product_summary', 'woocommerce_upsell_display', 15);
remove_action('woocommerce_after_single_product_summary', 'woocommerce_output_related_products', 20);
add_action('woocommerce_after_single_product_summary', 'fridominimal_upsell_display', 15);
add_action('woocommerce_after_single_product_summary', 'fridominimal_output_related_products', 20);


// Cart Page
remove_action('woocommerce_cart_collaterals', 'woocommerce_cross_sell_display');
add_action('osf_after_form_cart', 'fridominimal_woocommerce_cross_sell_display');


// Layout Product
function fridominimal_include_hooks_product_blocks(){
    remove_action('woocommerce_before_shop_loop_item', 'woocommerce_template_loop_product_link_open', 10);
    remove_action('woocommerce_after_shop_loop_item', 'woocommerce_template_loop_product_link_close', 5);
    remove_action('woocommerce_after_shop_loop_item', 'woocommerce_template_loop_add_to_cart', 10);
    remove_action('woocommerce_after_shop_loop_item_title', 'woocommerce_template_loop_rating', 5);
    remove_action('woocommerce_before_shop_loop_item_title', 'woocommerce_show_product_loop_sale_flash', 10);
    add_action('woocommerce_before_shop_loop_item_title', 'fridominimal_woocommerce_get_product_label_sale', 10);

    add_action('woocommerce_before_shop_loop_item', 'fridominimal_woocommerce_product_loop_start', -1);
    add_action('woocommerce_after_shop_loop_item', 'fridominimal_woocommerce_product_loop_end', 999);

    add_action('woocommerce_before_shop_loop_item_title', 'fridominimal_woocommerce_get_product_label_stock', 7);

    add_action('woocommerce_before_shop_loop', 'fridominimal_product_columns_wrapper', 40);

    add_action('woocommerce_before_shop_loop_item_title', 'fridominimal_woocommerce_product_loop_image_start', 5);
    add_action('woocommerce_before_shop_loop_item_title', 'fridominimal_woocommerce_product_loop_action_start', 10);
    add_action('woocommerce_before_shop_loop_item_title', 'fridominimal_woocommerce_product_loop_action_end', 50);
    add_action('woocommerce_before_shop_loop_item_title', 'fridominimal_woocommerce_product_loop_image_end', 100);
    add_action('woocommerce_before_shop_loop_item_title', 'woocommerce_template_loop_product_link_open', 99);
    add_action('woocommerce_before_shop_loop_item_title', 'woocommerce_template_loop_product_link_close', 99);
    add_action('woocommerce_after_shop_loop_item_title', 'fridominimal_woocommerce_product_loop_price_start', 9);
    add_action('woocommerce_after_shop_loop_item_title', 'woocommerce_template_loop_add_to_cart', 30);
    add_action('woocommerce_after_shop_loop_item_title', 'fridominimal_woocommerce_product_loop_price_end', 30);
    add_action('woocommerce_shop_loop_item_title', 'fridominimal_woocommerce_product_loop_caption_start', 0);
    add_action('woocommerce_after_shop_loop_item_title', 'fridominimal_woocommerce_product_loop_caption_end', 99);
    add_action('woocommerce_before_shop_loop_item_title', 'fridominimal_woocommerce_time_sale', 60);
    add_action('woocommerce_before_shop_loop_item_title', 'fridominimal_woocommerce_product_gallery_nav', 70);

    // Wishlist
    add_action('woocommerce_before_shop_loop_item_title', 'fridominimal_woocommerce_product_loop_wishlist_button', 25);
    // Gallery
    add_action('woocommerce_before_shop_loop_item_title', 'fridominimal_woocommerce_product_gallery_image', 100);

	//Single video
	add_action('woocommerce_product_thumbnails', 'fridominimal_single_product_video', 30);

	//Social
	add_action('woocommerce_single_product_summary', 'fridominimal_single_product_social', 70);
}

if(isset($_GET['action']) && $_GET['action'] === 'elementor'){
    return;
}
fridominimal_include_hooks_product_blocks();