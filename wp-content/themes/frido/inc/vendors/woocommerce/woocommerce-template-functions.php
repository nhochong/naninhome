<?php
if (!function_exists('fridominimal_woocommerce_version_check')) {
    function fridominimal_woocommerce_version_check($version = '3.3') {
        if (fridominimal_is_Woocommerce_activated()) {
            global $woocommerce;
            if (version_compare($woocommerce->version, $version, ">=")) {
                return true;
            }
        }
        return false;
    }
}

if (!function_exists('fridominimal_before_content')) {
    /**
     * Before Content
     * Wraps all WooCommerce content in wrappers which match the theme markup
     *
     * @since   1.0.0
     * @return  void
     */
    function fridominimal_before_content() {
        ?>
        <div class="wrap">
        <div id="primary" class="content-area">
        <main id="main" class="site-main" role="main">
        <?php
        if (is_product_category()) {
            $cate      = get_queried_object();
            $cateID    = $cate->term_id;
            $banner_id = get_term_meta($cateID, 'product_cat_banner_id', true);

            if ($banner_id) {
                echo '<div class="product-category-banner">';
                echo wp_get_attachment_image($banner_id, 'full');
                echo '</div>';
            }
        }
    }
}

if (!function_exists('fridominimal_after_content')) {
    /**
     * After Content
     * Closes the wrapping divs
     *
     * @since   1.0.0
     * @return  void
     */
    function fridominimal_after_content() {
        ?>
        </main><!-- #main -->
        </div><!-- #primary -->
        <?php get_sidebar(); ?>
        </div>
        <?php
    }
}

if (!function_exists('fridominimal_cart_link_fragment')) {
    /**
     * Cart Fragments
     * Ensure cart contents update when products are added to the cart via AJAX
     *
     * @param  array $fragments Fragments to refresh via AJAX.
     *
     * @return array            Fragments to refresh via AJAX
     */
    function fridominimal_cart_link_fragment($fragments) {
        global $woocommerce;

        ob_start();
        $fragments['a.cart-contents .amount']     = fridominimal_cart_amount();
        $fragments['a.cart-contents .count']      = fridominimal_cart_count();
        $fragments['a.cart-contents .count-text'] = fridominimal_cart_count_text();

        ob_start();
        fridominimal_handheld_footer_bar_cart_link();
        $fragments['a.footer-cart-contents'] = ob_get_clean();

        return $fragments;
    }
}

if (!function_exists('fridominimal_cart_link')) {
    /**
     * Cart Link
     * Displayed a link to the cart including the number of items present and the cart total
     *
     * @return string
     * @since  1.0.0
     */
    function fridominimal_cart_link($icon = 'opal-icon-cart', $title = '', $style = '') {
        if (!empty(WC()->cart) && WC()->cart instanceof WC_Cart) {
            $items = '';
            $items .= '<a data-toggle="toggle" class="cart-contents header-button" href="' . esc_url(wc_get_cart_url()) . '" title="' . __("View your shopping cart", "frido") . '">';
            $items .= '<i class="' . $icon . '" aria-hidden="true" style="' . $style . '"></i>';
            $items .= '<span class="title">' . esc_html($title) . '</span>';
            $items .= '<span class="amount">' . wp_kses_data(WC()->cart->get_cart_subtotal()) . '</span>';
            $items .= '<span class="count">' . wp_kses_data(WC()->cart->get_cart_contents_count()) . ' </span>';
            $items .= '<span class="count-text">' . wp_kses_data(_n("item", "items", WC()->cart->get_cart_contents_count(), "frido")) . '</span>';
            $items .= '</a>';

            return $items;
        }
        return '';
    }
}

if (!function_exists('fridominimal_cart_amount')) {
    /**
     *
     * @return string
     *
     */
    function fridominimal_cart_amount() {
        if (!empty(WC()->cart) && WC()->cart instanceof WC_Cart) {
            return '<span class="amount">' . wp_kses_data(WC()->cart->get_cart_subtotal()) . '</span>';
        }
        return '';
    }
}

if (!function_exists('fridominimal_cart_count')) {
    /**
     *
     * @return string
     *
     */
    function fridominimal_cart_count() {
        if (!empty(WC()->cart) && WC()->cart instanceof WC_Cart) {
            return '<span class="count">' . wp_kses_data(WC()->cart->get_cart_contents_count()) . ' </span>';
        }
        return '';
    }
}

if (!function_exists('fridominimal_cart_count_text')) {
    /**
     *
     * @return string
     *
     */
    function fridominimal_cart_count_text() {
        if (!empty(WC()->cart) && WC()->cart instanceof WC_Cart) {
            return '<span class="count-text">' . wp_kses_data(_n("item", "items", WC()->cart->get_cart_contents_count(), "frido")) . '</span>';
        }
        return '';
    }
}

if (!function_exists('fridominimal_upsell_display')) {
    /**
     * Upsells
     * Replace the default upsell function with our own which displays the correct number product columns
     *
     * @since   1.0.0
     * @return  void
     * @uses    woocommerce_upsell_display()
     */
    function fridominimal_upsell_display() {
        global $product;
        $number = count($product->get_upsell_ids());
        if ($number <= 0) {
            return;
        }
        $columns = absint(get_theme_mod('fridominimal_woocommerce_single_upsell_columns', 3));
        if ($columns < $number) {
            echo '<div class="woocommerce-product-carousel owl-theme" data-columns="' . esc_attr($columns) . '">';
        } else {
            echo '<div class="columns-' . esc_attr($columns) . '">';
        }
        woocommerce_upsell_display();
        echo '</div>';
    }
}

if (!function_exists('fridominimal_output_related_products')) {
    /**
     * Related
     *
     * @since   1.0.0
     * @return  void
     * @uses    woocommerce_related_products()
     */
    function fridominimal_output_related_products() {
        $columns = absint(get_theme_mod('fridominimal_woocommerce_single_related_columns', 3));
        $number  = absint(get_theme_mod('fridominimal_woocommerce_single_related_number', 3));
        if ($columns < $number) {
            echo '<div class="woocommerce-product-carousel owl-theme" data-columns="' . esc_attr($columns) . '">';
        } else {
            echo '<div class="columns-' . esc_attr($columns) . '">';
        }
        woocommerce_related_products($args = array(
            'posts_per_page' => $number,
            'columns'        => $columns,
            'orderby'        => 'rand',
        ));
        echo '</div>';
    }
}

if (!function_exists('fridominimal_sorting_wrapper')) {
    /**
     * Sorting wrapper
     *
     * @since   1.4.3
     * @return  void
     */
    function fridominimal_sorting_wrapper() {
        echo '<div class="osf-sorting">';
    }
}

if (!function_exists('fridominimal_sorting_wrapper_close')) {
    /**
     * Sorting wrapper close
     *
     * @since   1.4.3
     * @return  void
     */
    function fridominimal_sorting_wrapper_close() {
        echo '</div>';
    }
}

if (!function_exists('fridominimal_sorting_group')) {
    /**
     * Sorting wrapper
     *
     * @since   1.4.3
     * @return  void
     */
    function fridominimal_sorting_group() {
        echo '<div class="osf-sorting-group col-lg-6 col-sm-12">';
    }
}

if (!function_exists('fridominimal_sorting_group_close')) {
    /**
     * Sorting wrapper close
     *
     * @since   1.4.3
     * @return  void
     */
    function fridominimal_sorting_group_close() {
        echo '</div>';
    }
}


if (!function_exists('fridominimal_product_columns_wrapper')) {
    /**
     * Product columns wrapper
     *
     * @since   2.2.0
     * @return  void
     */
    function fridominimal_product_columns_wrapper() {
        $columns = fridominimal_loop_columns();
        if (isset($_GET['display']) && $_GET['display'] === 'list') {
            $columns = 1;
        }
        echo '<div class="columns-' . intval($columns) . '">';
    }
}

if (!function_exists('fridominimal_loop_columns')) {
    /**
     * Default loop columns on product archives
     *
     * @return integer products per row
     * @since  1.0.0
     */
    function fridominimal_loop_columns() {
        $columns = get_theme_mod('fridominimal_woocommerce_archive_columns', 3);

        return intval(apply_filters('fridominimal_products_columns', $columns));
    }
}

if (!function_exists('fridominimal_product_columns_wrapper_close')) {
    /**
     * Product columns wrapper close
     *
     * @since   2.2.0
     * @return  void
     */
    function fridominimal_product_columns_wrapper_close() {
        echo '</div>';
    }
}

if (!function_exists('fridominimal_shop_messages')) {
    /**
     * homefinder shop messages
     *
     * @since   1.4.4
     * @uses    fridominimal_do_shortcode
     */
    function fridominimal_shop_messages() {
        if (!is_checkout()) {
            echo wp_kses_post(fridominimal_do_shortcode('woocommerce_messages'));
        }
    }
}

if (!function_exists('fridominimal_woocommerce_pagination')) {
    /**
     * homefinder WooCommerce Pagination
     * WooCommerce disables the product pagination inside the woocommerce_product_subcategories() function
     * but since homefinder adds pagination before that function is excuted we need a separate function to
     * determine whether or not to display the pagination.
     *
     * @since 1.4.4
     */
    function fridominimal_woocommerce_pagination() {
        if (woocommerce_products_will_display()) {
            woocommerce_pagination();
        }
    }
}


if (!function_exists('fridominimal_handheld_footer_bar_search')) {
    /**
     * The search callback function for the handheld footer bar
     *
     * @since 2.0.0
     */
    function fridominimal_handheld_footer_bar_search() {
        echo '<a href="">' . esc_attr__('Search', 'frido') . '</a>';
        fridominimal_product_search();
    }
}

if (!function_exists('fridominimal_handheld_footer_bar_cart_link')) {
    /**
     * The cart callback function for the handheld footer bar
     *
     * @since 2.0.0
     */
    function fridominimal_handheld_footer_bar_cart_link() {
        ?>
        <a class="footer-cart-contents" href="<?php echo esc_url(wc_get_cart_url()); ?>"
           title="<?php esc_attr_e('View your shopping cart', 'frido'); ?>">
            <span class="count"><?php echo wp_kses_data(WC()->cart->get_cart_contents_count()); ?></span>
        </a>
        <?php
    }
}

if (!function_exists('fridominimal_handheld_footer_bar_account_link')) {
    /**
     * The account callback function for the handheld footer bar
     *
     * @since 2.0.0
     */
    function fridominimal_handheld_footer_bar_account_link() {
        echo '<a href="' . esc_url(get_permalink(get_option('woocommerce_myaccount_page_id'))) . '">' . esc_attr__('My Account', 'frido') . '</a>';
    }
}


if (!function_exists('fridominimal_checkout_before_customer_details_container')) {
    function fridominimal_checkout_before_customer_details_container() {
        if (WC()->checkout()->get_checkout_fields()) {
            echo '<div class="row"><div class="col-lg-7 col-md-12 col-sm-12"><div class="inner">';
        }
    }
}

if (!function_exists('fridominimal_checkout_after_customer_details_container')) {
    function fridominimal_checkout_after_customer_details_container() {
        if (WC()->checkout()->get_checkout_fields()) {
            echo '</div></div><div class="col-lg-5 col-md-12 col-sm-12"><div class="inner"> ';
        }
    }
}

if (!function_exists('fridominimal_checkout_after_order_review_container')) {
    function fridominimal_checkout_after_order_review_container() {
        if (WC()->checkout()->get_checkout_fields()) {
            echo '</div></div></div>';
        }
    }
}

if (!function_exists('fridominimal_woocommerce_single_product_add_to_cart_before')) {
    function fridominimal_woocommerce_single_product_add_to_cart_before() {
        echo '<div class="woocommerce-cart"><div class="inner">';
    }
}

if (!function_exists('fridominimal_woocommerce_single_product_add_to_cart_after')) {
    function fridominimal_woocommerce_single_product_add_to_cart_after() {
        echo '</div></div>';
    }
}

if (!function_exists('fridominimal_woocommerce_single_product_5_wrap_start')) {
    function fridominimal_woocommerce_single_product_5_wrap_start() {
        echo '<div class="single-style-5-wrap">';
    }
}

if (!function_exists('fridominimal_woocommerce_single_product_5_wrap_end')) {
    function fridominimal_woocommerce_single_product_5_wrap_end() {
        echo '</div>';
    }
}

if (!function_exists('fridominimal_woocommerce_single_product_summary_inner_start')) {
    function fridominimal_woocommerce_single_product_summary_inner_start() {
        echo '<div class="inner">';
    }
}

if (!function_exists('fridominimal_woocommerce_single_product_summary_inner_end')) {
    function fridominimal_woocommerce_single_product_summary_inner_end() {
        echo '</div>';
    }
}


if (!function_exists('fridominimal_template_loop_product_thumbnail')) {
    function fridominimal_template_loop_product_thumbnail($size = 'woocommerce_thumbnail', $deprecated1 = 0, $deprecated2 = 0) {
        echo fridominimal_get_loop_product_thumbnail();
    }
}

if (!function_exists('fridominimal_get_loop_product_thumbnail')) {
    function fridominimal_get_loop_product_thumbnail($size = 'woocommerce_thumbnail', $deprecated1 = 0, $deprecated2 = 0) {
        global $product;
        if (!$product) {
            return '';
        }

        $gallery = $product->get_gallery_image_ids();
        if (count($gallery) <= 0) {
            echo '<div class="product-image">' . $product->get_image($size) . '</div>';
            return '';
        }
        $image_featured = $fixed = '<div class="product-image">' . $product->get_image($size) . '</div>';
        if (count($gallery) > 0) {
            $i = 0;
            foreach ($gallery as $attachment_id) {
                $image_featured .= '<div class="product-image">' . wp_get_attachment_image($attachment_id, 'shop_catalog') . '</div>';
                $i++;
                if ($i == 3) break;
            }
        }
        return <<<HTML
<div class="product-img-wrap">
    <div class="product-img-fixed">
        {$fixed}
    </div>
    <div class="inner">
        {$image_featured}
    </div>
</div>
HTML;

    }
}

if (!function_exists('fridominimal_woocommerce_product_loop_image_start')) {
    function fridominimal_woocommerce_product_loop_image_start() {
        echo '<div class="product-transition">';
    }
}

if (!function_exists('fridominimal_woocommerce_product_loop_image_end')) {
    function fridominimal_woocommerce_product_loop_image_end() {
        echo '</div>';
    }
}

if (!function_exists('fridominimal_woocommerce_product_loop_action_start')) {
    function fridominimal_woocommerce_product_loop_action_start() {
        echo '<div class="product-caption"><div class="shop-action">';
    }
}


if (!function_exists('fridominimal_woocommerce_product_loop_action_end')) {
    function fridominimal_woocommerce_product_loop_action_end() {
        echo '</div></div>';
    }
}

if (!function_exists('fridominimal_woocommerce_product_loop_wishlist_button')) {
    function fridominimal_woocommerce_product_loop_wishlist_button() {
        if (fridominimal_is_woocommerce_extension_activated('YITH_WCWL')) {
            echo fridominimal_do_shortcode('yith_wcwl_add_to_wishlist');
        }
    }
}

if (!function_exists('fridominimal_woocommerce_product_gallery_image')) {
    function fridominimal_woocommerce_product_gallery_image() {
        /**
         * @var $product WC_Product
         */
        global $product;
        $gallery = $product->get_gallery_image_ids();
        if (count($gallery) > 0) {
            $i = 0;
            echo '<div class="woocommerce-loop-product__gallery">';
            echo '<span class="gallery_item active" data-number="0">' . $product->get_image('thumbnail') . '</span>';
            foreach ($gallery as $attachment_id) {
                echo '<span class="gallery_item" data-number="' . esc_attr($i + 1) . '">' . wp_get_attachment_image($attachment_id, 'thumbnail') . '</span>';
                $i++;
                if ($i == 3) break;
            }
            echo '</div>';
        }
    }
}

if (!function_exists('fridominimal_woocommerce_product_gallery_nav')) {
    function fridominimal_woocommerce_product_gallery_nav() {
        /**
         * @var $product WC_Product
         */
        global $product;
        $gallery = $product->get_gallery_image_ids();
        if (count($gallery) > 0) {
            echo '<div class="gallery-nav"><span class="gallery-nav-prev"></span><span class="gallery-nav-next"></span></div>';
        }
    }
}

if (!function_exists('fridominimal_woocommerce_change_path_shortcode')) {
    function fridominimal_woocommerce_change_path_shortcode($template, $slug, $name) {
        wc_get_template('content-widget-product.php', array('show_rating' => false));
    }
}


if (!function_exists('fridominimal_woocommerce_group_action_loop_start')) {
    function fridominimal_woocommerce_group_action_loop_start() {
        echo '<div class="group-action shop-action">';
    }
}

if (!function_exists('fridominimal_woocommerce_group_action_loop_end')) {
    function fridominimal_woocommerce_group_action_loop_end() {
        echo '</div>';
    }
}

if (!function_exists('fridominimal_woocommerce_product_loop_start')) {
    function fridominimal_woocommerce_product_loop_start() {
        global $product;
        $gallery = $product->get_gallery_image_ids();
        if (count($gallery) > 0) {
            echo '<div class="product-block has-gallery">';
        } else {
            echo '<div class="product-block">';
        }
    }
}

if (!function_exists('fridominimal_woocommerce_product_loop_end')) {
    function fridominimal_woocommerce_product_loop_end() {
        echo '</div>';
    }
}

if (!function_exists('fridominimal_woocommerce_product_loop_price_start')) {
    function fridominimal_woocommerce_product_loop_price_start() {
        echo '<div class="product-price">';
    }
}

if (!function_exists('fridominimal_woocommerce_product_loop_price_end')) {
    function fridominimal_woocommerce_product_loop_price_end() {
        echo '</div>';
    }
}

if (!function_exists('fridominimal_woocommerce_product_loop_caption_start')) {
    function fridominimal_woocommerce_product_loop_caption_start() {
        echo '<div class="caption">';
    }
}
if (!function_exists('fridominimal_woocommerce_product_loop_caption_end')) {
    function fridominimal_woocommerce_product_loop_caption_end() {
        echo '</div>';
    }
}

if (!function_exists('fridominimal_woocommerce_product_rating')) {
    function fridominimal_woocommerce_product_rating() {
        global $product;
        if (get_option('woocommerce_enable_review_rating') === 'no') {
            return;
        }
        if ($rating_html = wc_get_rating_html($product->get_average_rating())) {
            echo apply_filters('fridominimal_woocommerce_rating_html', $rating_html);
        } else {
            echo '<div class="star-rating"></div>';
        }
    }
}
if (!function_exists('oft_woocommerce_template_loop_product_excerpt')) {

    /**
     * Show the excerpt in the product loop.
     */
    function fridominimal_woocommerce_template_loop_product_excerpt() {
        global $product;
        echo '<div class="excerpt">' . get_the_excerpt() . '</div>';
    }
}
if (!function_exists('woocommerce_template_loop_product_title')) {

    /**
     * Show the product title in the product loop.
     */
    function woocommerce_template_loop_product_title() {
        echo '<h3 class="woocommerce-loop-product__title"><a href="' . esc_url_raw(get_the_permalink()) . '">' . get_the_title() . '</a></h3>';
    }
}


if (!function_exists('fridominimal_woocommerce_get_product_category')) {
    function fridominimal_woocommerce_get_product_category() {
        global $product;
        echo wc_get_product_category_list($product->get_id(), ', ', '<span class="posted_in">', '</span>');
    }
}
if (!function_exists('fridominimal_woocommerce_get_product_label_stock')) {
    function fridominimal_woocommerce_get_product_label_stock() {
        /**
         * @var $product WC_Product
         */
        global $product;
        if ($product->get_stock_status() == 'outofstock') {
            echo '<span class="out-of-stock">' . esc_html__('Out Of Stock', 'frido') . '</span>';
        }
    }
}

if (!function_exists('fridominimal_woocommerce_get_product_label_sale')) {
    function fridominimal_woocommerce_get_product_label_sale() {
        /**
         * @var $product WC_Product
         */
        global $product;
        if ($product->is_on_sale() && $product->is_type('simple')) {
            $ratio = round($product->get_sale_price() / $product->get_regular_price() * 10);
            echo '<span class="onsale"> - ' . esc_html($ratio) . ' % </span>';
        }
    }
}

if (!function_exists('fridominimal_woocommerce_set_register_text')) {
    function fridominimal_woocommerce_set_register_text() {
        echo '<div class="user-text">' . __("Creating an account is quick and easy, and will allow you to move through our checkout quicker.", "frido") . '</div>';
    }
}


if (!function_exists('fridominimal_header_cart_nav')) {
    /**
     * Display Header Cart
     *
     * @since  1.0.0
     * @uses   fridominimal_is_Woocommerce_activated() check if WooCommerce is activated
     * @return string
     */

    function fridominimal_header_cart_nav() {
        if (fridominimal_is_Woocommerce_activated()) {
            $items = '';
            $items .= '<li class="megamenu-item menu-item  menu-item-has-children menu-item-cart site-header-cart " data-level="0">';
            $items .= fridominimal_cart_link();
            if (!is_cart() && !is_checkout()) {
                $items .= '<ul class="shopping_cart_nav shopping_cart"><li><div class="widget_shopping_cart_content"></div></li></ul>';
            }
            $items .= '</li>';

            return $items;
        }

        return '';
    }
}

if (!function_exists('fridominimal_woocommerce_add_woo_cart_to_nav')) {
    function fridominimal_woocommerce_add_woo_cart_to_nav($items, $args) {

        if ('top' == $args->theme_location) {
            global $fridominimal_header;
            if ($fridominimal_header && $fridominimal_header instanceof WP_Post) {
                if (fridominimal_get_metabox($fridominimal_header->ID, 'fridominimal_enable_cart', false)) {
                    $items .= fridominimal_header_cart_nav();
                }

                return $items;
            }

            if (get_theme_mod('fridominimal_header_layout_enable_cart_in_menu', true)) {
                $items .= fridominimal_header_cart_nav();
            }
        }

        return $items;
    }
}

if (!function_exists('fridominimal_woocommerce_list_get_excerpt')) {
    function fridominimal_woocommerce_list_show_excerpt() {
        echo '<div class="product-excerpt">' . get_the_excerpt() . '</div>';
    }
}

if (!function_exists('fridominimal_woocommerce_list_get_category')) {
    function fridominimal_woocommerce_list_show_category() {
        global $product;
        echo wc_get_product_category_list($product->get_id(), ', ', '<div class="posted_in">', '</div>');
    }
}

if (!function_exists('fridominimal_woocommerce_list_get_rating')) {
    function fridominimal_woocommerce_list_show_rating() {
        global $product;
        echo wc_get_rating_html($product->get_average_rating());
    }
}


if (!function_exists('fridominimal_woocommerce_time_sale')) {
    function fridominimal_woocommerce_time_sale() {
        /**
         * @var $product WC_Product
         */
        global $product;
        $time_sale = get_post_meta($product->get_id(), '_sale_price_dates_to', true);
        if ($time_sale) {
            wp_enqueue_script('otf-countdown');
            $time_sale += (get_option('gmt_offset') * 3600);
            echo '<div class="time">
                    <div class="opal-countdown clearfix"
                        data-countdown="countdown"
                        data-days="' . esc_html__("days", "frido") . '" 
                        data-hours="' . esc_html__("hours", "frido") . '"
                        data-minutes="' . esc_html__("mins", "frido") . '"
                        data-seconds="' . esc_html__("secs", "frido") . '"
                        data-Message="' . esc_html__('Expired', 'frido') . '"
                        data-date="' . date('m', $time_sale) . '-' . date('d', $time_sale) . '-' . date('Y', $time_sale) . '-' . date('H', $time_sale) . '-' . date('i', $time_sale) . '-' . date('s', $time_sale) . '">
                    </div>
            </div>';
        }
    }
}

if (!function_exists('fridominimal_woocommerce_cross_sell_display')) {
    function fridominimal_woocommerce_cross_sell_display() {
        woocommerce_cross_sell_display(get_theme_mod('fridominimal_woocommerce_cart_cross_sells_limit', 4), get_theme_mod('fridominimal_woocommerce_cart_cross_sells_columns', 2));
    }
}

function fridominimal_woocommerce_single_product_image_thumbnail_html($image, $attachment_id) {
    return wc_get_gallery_image_html($attachment_id, true);
}


function fridominimal_single_product_video() {
    global $product;
    $video = get_post_meta($product->get_id(), 'otf_products_video', true);
    if (!$video) {
        return;
    }
    $video_thumbnail = get_post_meta($product->get_id(), 'otf_products_video_thumbnail_id', true);
    if ($video_thumbnail) {
        $video_thumbnail = wp_get_attachment_image_url($video_thumbnail, 'thumbnail');
    } else {
        $video_thumbnail = wc_placeholder_img_src();
    }
    $video = wc_do_oembeds($video);
    echo '<div data-thumb="' . esc_url_raw($video_thumbnail) . '" class="woocommerce-product-gallery__image">
    <a>
        ' . $video . '

    </a>
</div>';
}

function fridominimal_single_product_social() {
    if (get_theme_mod('fridominimal_socials')) {
        $template = WP_PLUGIN_DIR . '/fridominimal-core/templates/socials.php';
        if (file_exists($template)) {
            require $template;
        }
    }
}

/**
 * Check if a product is a deal
 *
 * @param int|object $product
 *
 * @return bool
 */
function fridominimal_woocommerce_is_deal_product($product) {
    $product = is_numeric($product) ? wc_get_product($product) : $product;

    // It must be a sale product first
    if (!$product->is_on_sale()) {
        return false;
    }

    if (!$product->is_in_stock()) {
        return false;
    }

    // Only support product type "simple" and "external"
    if (!$product->is_type('simple') && !$product->is_type('external')) {
        return false;
    }

    $deal_quantity = get_post_meta($product->get_id(), '_deal_quantity', true);

    if ($deal_quantity > 0) {
        return true;
    }

    return false;
}


/**
 * Display deal progress on shortcode
 */
if (!function_exists('fridominimal_woocommerce_deal_progress')) {
    function fridominimal_woocommerce_deal_progress() {
        global $product;

        $limit = get_post_meta($product->get_id(), '_deal_quantity', true);
        $sold  = intval(get_post_meta($product->get_id(), '_deal_sales_counts', true));
        if (empty($limit)) {
            return;
        }

        ?>

        <div class="deal-sold">
            <span class="deal-text d-block"><span><?php esc_html_e('HURRY! ONLY', 'frido') ?></span> <span
                        class="c-primary"><?php echo esc_attr(trim($limit - $sold)) ?></span> <span><?php esc_html_e('LEFT IN STOCK.', 'frido') ?></span></span>
            <div>
                <div class="deal-progress">
                    <div class="progress-bar">
                        <div class="progress-value" style="width: <?php echo trim($sold / $limit * 100) ?>%"></div>
                    </div>
                </div>
            </div>
        </div>

        <?php
    }
}

if (!function_exists('fridominimal_woocommerce_single_deal')) {
    function fridominimal_woocommerce_single_deal() {
        global $product;


        if (!fridominimal_woocommerce_is_deal_product($product)) {
            return;
        }
        ?>

        <div class="opal-woocommerce-deal deal">
            <?php
            fridominimal_woocommerce_deal_progress();
            fridominimal_woocommerce_time_sale();
            ?>
        </div>
        <?php
    }
}


function otf_wc_track_product_view() {

    if (!is_singular('product')) {
        return;
    }

    global $post;

    if (!isset($_COOKIE['otf_woocommerce_recently_viewed']) || isset($_COOKIE['otf_woocommerce_recently_viewed']) && empty($_COOKIE['otf_woocommerce_recently_viewed'])) {
        $viewed_products = array();
    } else {
        $viewed_products = (array)explode('|', $_COOKIE['otf_woocommerce_recently_viewed']);
    }

    // Unset if already in viewed products list.
    $keys = array_flip($viewed_products);
    if (isset($keys[$post->ID])) {
        unset($viewed_products[$keys[$post->ID]]);
    }

    $viewed_products[] = $post->ID;

    if (count($viewed_products) > 15) {
        array_shift($viewed_products);
    }

    // Store for session only.
    wc_setcookie('otf_woocommerce_recently_viewed', implode('|', $viewed_products));
}

add_action('template_redirect', 'otf_wc_track_product_view', 20);
