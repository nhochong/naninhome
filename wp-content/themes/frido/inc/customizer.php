<?php
add_filter( 'osf_customize_colors', 'fridominimal_customizer_custom_color', 10, 7 );
function fridominimal_customizer_custom_color($cssCode, $color_primary, $color_primary_hover, $color_secondary, $color_secondary_hover, $color_body, $color_heading) {
    $cssCode .= <<<CSS

.breadcrumb a, .breadcrumb span, .c-body, input[type="text"], input[type="email"], input[type="url"], input[type="password"], input[type="search"], input[type="number"], input[type="tel"], input[type="range"], input[type="date"], input[type="month"], input[type="week"], input[type="time"], input[type="datetime"], input[type="datetime-local"], input[type="color"], textarea, .mainmenu-container ul ul .menu-item > a, .mainmenu-container li a span, .opal-header-skin-custom .site-header .sub-menu a:not(.vc_btn3),
.opal-header-skin-custom .site-header .sub-menu-inner a:not(.vc_btn3), .opal-header-skin-custom .site-header-account .account-links-menu li a,
.opal-header-skin-custom .site-header-account .account-dashboard li a, .opal-header-sticky-skin-custom #opal-header-sticky .sub-menu-inner a:not(.vc_btn3), .opal-header-sticky-skin-custom #opal-header-sticky .site-header-account .account-links-menu li a,
.opal-header-sticky-skin-custom #opal-header-sticky .site-header-account .account-dashboard li a, .opal-header-skin-dark .site-header .sub-menu-inner a:not(.vc_btn3), .opal-header-sticky-skin-dark #opal-header-sticky .sub-menu-inner a:not(.vc_btn3), .site-header-account .account-links-menu li a,
.site-header-account .account-dashboard li a, .opal-header-skin-custom .site-header .site-header-account .account-links-menu li a,
.opal-header-skin-custom .site-header .site-header-account .account-dashboard li a, .widget a, .widget .tagcloud a, .widget.widget_tag_cloud a, .wp_widget_tag_cloud a, .opal-custom-menu-inline .widget_nav_menu li ul a, .woocommerce-shipping-fields .select2-container--default .select2-selection--single .select2-selection__rendered, .woocommerce-billing-fields .select2-container--default .select2-selection--single .select2-selection__rendered, .opal-currency_switcher .list-currency button[type="submit"], .select-selected, .select-items div, .widget .woof_list_label li .woof_label_term, .opal-style-1.search-form-wapper .search-submit span, .opal-style-1.search-form-wapper .search-submit span:before, .product-style-1 li.product:not(.osf-product-list) .yith-wcwl-add-to-wishlist > div > a:before, .mc4wp-form .widget-title p .c-body, .mc4wp-form .widget-title p input[type="text"], .mc4wp-form .widget-title p input[type="email"], .mc4wp-form .widget-title p input[type="url"], .mc4wp-form .widget-title p input[type="password"], .mc4wp-form .widget-title p input[type="search"], .mc4wp-form .widget-title p input[type="number"], .mc4wp-form .widget-title p input[type="tel"], .mc4wp-form .widget-title p input[type="range"], .mc4wp-form .widget-title p input[type="date"], .mc4wp-form .widget-title p input[type="month"], .mc4wp-form .widget-title p input[type="week"], .mc4wp-form .widget-title p input[type="time"], .mc4wp-form .widget-title p input[type="datetime"], .mc4wp-form .widget-title p input[type="datetime-local"], .mc4wp-form .widget-title p input[type="color"], .mc4wp-form .widget-title p textarea, .mc4wp-form .widget-title p .mainmenu-container ul ul .menu-item > a, .mainmenu-container ul ul .mc4wp-form .widget-title p .menu-item > a, .mc4wp-form .widget-title p .mainmenu-container li a span, .mainmenu-container li a .mc4wp-form .widget-title p span, .mc4wp-form .widget-title p .opal-header-skin-custom .site-header .sub-menu a:not(.vc_btn3), .opal-header-skin-custom .site-header .sub-menu .mc4wp-form .widget-title p a:not(.vc_btn3),
.mc4wp-form .widget-title p .opal-header-skin-custom .site-header .sub-menu-inner a:not(.vc_btn3), .opal-header-skin-custom .site-header .sub-menu-inner .mc4wp-form .widget-title p a:not(.vc_btn3), .mc4wp-form .widget-title p .opal-header-sticky-skin-custom #opal-header-sticky .sub-menu-inner a:not(.vc_btn3), .opal-header-sticky-skin-custom #opal-header-sticky .sub-menu-inner .mc4wp-form .widget-title p a:not(.vc_btn3), .mc4wp-form .widget-title p .opal-header-sticky-skin-custom #opal-header-sticky .site-header-account .account-links-menu li a, .opal-header-sticky-skin-custom #opal-header-sticky .site-header-account .account-links-menu li .mc4wp-form .widget-title p a,
.mc4wp-form .widget-title p .opal-header-sticky-skin-custom #opal-header-sticky .site-header-account .account-dashboard li a, .opal-header-sticky-skin-custom #opal-header-sticky .site-header-account .account-dashboard li .mc4wp-form .widget-title p a, .mc4wp-form .widget-title p .opal-header-skin-dark .site-header .sub-menu-inner a:not(.vc_btn3), .opal-header-skin-dark .site-header .sub-menu-inner .mc4wp-form .widget-title p a:not(.vc_btn3), .mc4wp-form .widget-title p .opal-header-sticky-skin-dark #opal-header-sticky .sub-menu-inner a:not(.vc_btn3), .opal-header-sticky-skin-dark #opal-header-sticky .sub-menu-inner .mc4wp-form .widget-title p a:not(.vc_btn3), .mc4wp-form .widget-title p .site-header-account .account-links-menu li a, .site-header-account .account-links-menu li .mc4wp-form .widget-title p a,
.mc4wp-form .widget-title p .site-header-account .account-dashboard li a, .site-header-account .account-dashboard li .mc4wp-form .widget-title p a, .mc4wp-form .widget-title p .widget a, .widget .mc4wp-form .widget-title p a, .mc4wp-form .widget-title p .wp_widget_tag_cloud a, .wp_widget_tag_cloud .mc4wp-form .widget-title p a, .mc4wp-form .widget-title p .opal-custom-menu-inline .widget_nav_menu li ul a, .opal-custom-menu-inline .widget_nav_menu li ul .mc4wp-form .widget-title p a, .mc4wp-form .widget-title p .woocommerce-shipping-fields .select2-container--default .select2-selection--single .select2-selection__rendered, .woocommerce-shipping-fields .select2-container--default .select2-selection--single .mc4wp-form .widget-title p .select2-selection__rendered, .mc4wp-form .widget-title p .woocommerce-billing-fields .select2-container--default .select2-selection--single .select2-selection__rendered, .woocommerce-billing-fields .select2-container--default .select2-selection--single .mc4wp-form .widget-title p .select2-selection__rendered, .mc4wp-form .widget-title p .opal-currency_switcher .list-currency button[type="submit"], .opal-currency_switcher .list-currency .mc4wp-form .widget-title p button[type="submit"], .mc4wp-form .widget-title p .select-selected, .mc4wp-form .widget-title p .select-items div, .select-items .mc4wp-form .widget-title p div, .mc4wp-form .widget-title p .widget .woof_list_label li .woof_label_term, .widget .woof_list_label li .mc4wp-form .widget-title p .woof_label_term, .mc4wp-form .widget-title p .opal-style-1.search-form-wapper .search-submit span, .opal-style-1.search-form-wapper .search-submit .mc4wp-form .widget-title p span, .mc4wp-form .widget-title p .opal-style-1.search-form-wapper .search-submit span:before, .opal-style-1.search-form-wapper .search-submit .mc4wp-form .widget-title p span:before, .mc4wp-form .widget-title p .product-style-1 li.product:not(.osf-product-list) .yith-wcwl-add-to-wishlist > div > a:before, .product-style-1 li.product:not(.osf-product-list) .mc4wp-form .widget-title p .yith-wcwl-add-to-wishlist > div > a:before {
  color: {$color_body}; }



h2.widget-title,
h2.widgettitle, .c-heading, .form-group .form-row label, fieldset legend, .vertical-navigation .menu-open-label, article.type-post .entry-header a, body.single-post .entry-meta a, .author-wrapper .author-name, .post-navigation .nav-title, .blog article.type-post .more-link, .blog article.type-page .more-link, .archive article.type-post .more-link, .archive article.type-page .more-link, .search article.type-post .more-link, .search article.type-page .more-link, .entry-meta a, .search .entry-header a, .site-header-account .login-form-title, .comments-title, table.shop_table_responsive tbody th, .filter-toggle, .filter-close, table.cart:not(.wishlist_table) th, table.cart:not(.wishlist_table) .product-name a, table.cart:not(.wishlist_table) .product-subtotal .woocommerce-Price-amount, .cart-collaterals .cart_totals .order-total .woocommerce-Price-amount, .checkout_coupon .form-row-last:before, #payment .payment_methods > .wc_payment_method > label, table.woocommerce-checkout-review-order-table th, table.woocommerce-checkout-review-order-table .order-total .woocommerce-Price-amount, table.woocommerce-checkout-review-order-table .product-name, .woocommerce-billing-fields > h3, .cart th,
.shop_table th, .woocommerce-account .woocommerce-MyAccount-content strong,
.woocommerce-account .woocommerce-MyAccount-content .woocommerce-Price-amount, .osf-sorting .display-mode button.active, .osf-sorting .display-mode button:hover, .woocommerce-Tabs-panel table.shop_attributes th, .woocommerce-tabs#osf-accordion-container [data-accordion] [data-control], .widget .woof_list_checkbox input[type="checkbox"] + label:after, .widget .woof_list_checkbox input[type="checkbox"]:checked + label, .widget .woof_list_radio input[type="radio"]:checked + label {
  color: {$color_heading}; }



.btn-link, .button-link, .more-link, .mainmenu-container .menu > li.current-menu-item > a, .mainmenu-container ul ul .menu-item > a:hover, .mainmenu-container ul ul .menu-item > a:active, .mainmenu-container ul ul .menu-item > a:focus, .mainmenu-container li.current-menu-parent > a, .mainmenu-container .menu-item > a:hover, .opal-header-skin-dark #opal-header-sticky .main-navigation .top-menu > li > a:hover,
.opal-header-sticky-skin-dark #opal-header-sticky .main-navigation .top-menu > li > a:hover, .opal-header-skin-custom .site-header a:not(.vc_btn3):hover, .opal-header-skin-custom .site-header a:not(.vc_btn3):active, .opal-header-skin-custom .site-header a:not(.vc_btn3):focus,
.opal-header-skin-custom .site-header .main-navigation .top-menu > li > a:hover,
.opal-header-skin-custom .site-header .main-navigation .top-menu > li > a:active,
.opal-header-skin-custom .site-header .main-navigation .top-menu > li > a:focus, .opal-header-sticky-skin-custom #opal-header-sticky a:not(.vc_btn3):hover, .opal-header-sticky-skin-custom #opal-header-sticky a:not(.vc_btn3):active, .opal-header-sticky-skin-custom #opal-header-sticky a:not(.vc_btn3):focus,
.opal-header-sticky-skin-custom #opal-header-sticky .main-navigation .top-menu > li > a:hover,
.opal-header-sticky-skin-custom #opal-header-sticky .main-navigation .top-menu > li > a:active,
.opal-header-sticky-skin-custom #opal-header-sticky .main-navigation .top-menu > li > a:focus, .opal-menu-canvas .current-menu-item > a, .opal-header-skin-dark .site-header a:not(.vc_btn3):hover, .opal-header-skin-dark .site-header a:not(.vc_btn3):active, .opal-header-skin-dark .site-header a:not(.vc_btn3):focus, .opal-header-sticky-skin-dark #opal-header-sticky a:not(.vc_btn3):hover, .opal-header-sticky-skin-dark #opal-header-sticky a:not(.vc_btn3):active, .opal-header-sticky-skin-dark #opal-header-sticky a:not(.vc_btn3):focus, .column-item .entry-header .entry-title a, body.single-post article.type-post .entry-content h1, body.single-post article.type-post .entry-content h2, body.single-post article.type-post .entry-content h3, body.single-post article.type-post .entry-content h4, body.single-post article.type-post .entry-content h5, body.single-post article.type-post .entry-content h6, body.single-post .entry-title, .breadcrumb a:hover,
.button-outline-primary, .widget_shopping_cart .buttons .button:nth-child(odd), .c-primary, .opal-header-skin-custom .site-header-account .account-dropdown a.lostpass-link, .opal-header-skin-custom .site-header-account .account-dropdown a.register-link, .opal-header-skin-custom .site-header-account .account-links-menu li a:hover,
.opal-header-skin-custom .site-header-account .account-dashboard li a:hover, .opal-header-sticky-skin-custom #opal-header-sticky .site-header-account .account-dropdown a.lostpass-link, .opal-header-sticky-skin-custom #opal-header-sticky .site-header-account .account-dropdown a.register-link, .opal-header-sticky-skin-custom #opal-header-sticky .site-header-account .account-links-menu li a:hover,
.opal-header-sticky-skin-custom #opal-header-sticky .site-header-account .account-dashboard li a:hover, .main-navigation .menu-item > a:hover, .site-header .header-group .search-submit:hover, .navigation-button .menu-toggle:hover, .navigation-button .menu-toggle:focus, article.type-post .entry-meta a, .pbr-social-share h6, .pbr-social-share a:hover, .opal-post-navigation-2 .post-navigation .nav-links .nav-previous a:hover:before, .opal-post-navigation-2 .post-navigation .nav-links .nav-next a:hover:before, .blog article.type-post .entry-meta a, .blog article.type-page .entry-meta a, .archive article.type-post .entry-meta a, .archive article.type-page .entry-meta a, .search article.type-post .entry-meta a, .search article.type-page .entry-meta a, .search .entry-header a:hover, .page .entry-header .entry-title, .error404 .go-back:hover, .scrollup:hover .icon, .site-header-account .account-dropdown a.register-link, .site-header-account .account-dropdown a.lostpass-link, .site-header-account .account-links-menu li a:hover,
.site-header-account .account-dashboard li a:hover, .opal-header-skin-custom .site-header .site-header-account .account-dropdown a:not(.vc_btn3), .opal-header-skin-custom .site-header .site-header-account .account-links-menu li a:hover,
.opal-header-skin-custom .site-header .site-header-account .account-dashboard li a:hover, .opal-comment-4 .comment-content h1, .opal-comment-4 .comment-content h2, .opal-comment-4 .comment-content h3, .opal-comment-4 .comment-content h4, .opal-comment-4 .comment-content h5, .opal-comment-4 .comment-content h6, .comment-form a:hover, .widget .tagcloud a:hover, .widget .tagcloud a:focus, .wp_widget_tag_cloud a:hover, .wp_widget_tag_cloud a:focus, .opal-custom-menu-inline .widget ul li a:hover, .owl-theme.woocommerce-carousel .owl-nav [class*='owl-']:hover:before, .owl-theme.owl-carousel .owl-nav [class*='owl-']:hover:before, .entry-gallery .gallery .owl-nav [class*='owl-']:hover:before, .woocommerce .woocommerce-carousel ul.owl-theme.products .owl-nav [class*='owl-']:hover:before, .woocommerce-product-carousel ul.owl-theme.products .owl-nav [class*='owl-']:hover:before,
.owl-theme .products .owl-nav [class*='owl-']:hover:before, .column-item .post-inner .entry-category a, .column-item .post-inner .entry-title a:hover, .column-item .post-inner .link-more a, #secondary .elementor-widget-container h5:first-of-type, .opal-currency_switcher .list-currency button[type="submit"]:hover, .opal-currency_switcher .list-currency li.active button[type="submit"], ul.products li.product.osf-product-list .price, ul.products li.product .posfed_in a:hover, .select-items div:hover, .button-wrapper #chart-button, .product_list_widget a:hover, .product_list_widget a:active, .product_list_widget a:focus, .woocommerce-product-list a:hover, .woocommerce-product-list a:active, .woocommerce-product-list a:focus, .product-style-1 li.product:not(.osf-product-list) h2 a:hover,
.product-style-1 li.product:not(.osf-product-list) h3 a:hover,
.product-style-1 li.product:not(.osf-product-list) .woocommerce-loop-product__title a:hover, .column-item .study-case-inner .entry-category a:hover, .elementor-widget-opal-box-overview .elementor-box-overview-wrapper .entry-header a, body.single-osf_service .entry-title, .single-case_study .entry-title, .single-case_study .entry-meta a:hover, .single-case_study .information h4, .single-case_study .information li a:hover, .single-case_study .information li .meta-label, #secondary .elementor-widget-wp-widget-recent-posts a, .site-header-cart .widget_shopping_cart p.buttons a.button.checkout, .site-header-cart .shopping_cart_nav p.buttons a.button.checkout, .woocommerce-MyAccount-navigation ul li.is-active a, .product-style-1 li.product:not(.osf-product-list) a[class*="product_type_"] {
  color: {$color_primary->toCss()}; }


article.type-post .post-categories a, .page-links .page-number, .blog-container .post-categories a, .blog-container.style-2 .post-categories a, section.widget_price_filter .ui-slider .ui-slider-range, .button-primary, .entry-footer .edit-link a.post-edit-link, .page .edit-link a.post-edit-link, .woocommerce-MyAccount-content .woocommerce-Pagination .woocommerce-button, .widget_shopping_cart .buttons .button, .button-outline-primary:hover, .widget_shopping_cart .buttons .button:hover:nth-child(odd), .button-outline-primary:active, .widget_shopping_cart .buttons .button:active:nth-child(odd), .button-outline-primary.active, .widget_shopping_cart .buttons .active.button:nth-child(odd),
.show > .button-outline-primary.dropdown-toggle, .widget_shopping_cart .buttons .show > .dropdown-toggle.button:nth-child(odd), .bg-primary, [class*="after-title"]:after, .before-title-primary:before, .owl-theme.woocommerce-carousel .owl-dots .owl-dot:hover, .owl-theme.woocommerce-carousel .owl-dots .owl-dot.active, .owl-theme.owl-carousel .owl-dots .owl-dot:hover, .entry-gallery .gallery .owl-dots .owl-dot:hover, .woocommerce .woocommerce-carousel ul.owl-theme.products .owl-dots .owl-dot:hover, .woocommerce-product-carousel ul.owl-theme.products .owl-dots .owl-dot:hover, .owl-theme.owl-carousel .owl-dots .owl-dot.active, .entry-gallery .gallery .owl-dots .owl-dot.active, .woocommerce .woocommerce-carousel ul.owl-theme.products .owl-dots .owl-dot.active, .woocommerce-product-carousel ul.owl-theme.products .owl-dots .owl-dot.active,
.owl-theme .products .owl-dots .owl-dot:hover,
.owl-theme .products .owl-dots .owl-dot.active, .owl-theme.woocommerce-carousel .owl-dots .owl-dot:hover span, .owl-theme.woocommerce-carousel .owl-dots .owl-dot.active span, .owl-theme.owl-carousel .owl-dots .owl-dot:hover span, .entry-gallery .gallery .owl-dots .owl-dot:hover span, .woocommerce .woocommerce-carousel ul.owl-theme.products .owl-dots .owl-dot:hover span, .woocommerce-product-carousel ul.owl-theme.products .owl-dots .owl-dot:hover span, .owl-theme.owl-carousel .owl-dots .owl-dot.active span, .entry-gallery .gallery .owl-dots .owl-dot.active span, .woocommerce .woocommerce-carousel ul.owl-theme.products .owl-dots .owl-dot.active span, .woocommerce-product-carousel ul.owl-theme.products .owl-dots .owl-dot.active span,
.owl-theme .products .owl-dots .owl-dot:hover span,
.owl-theme .products .owl-dots .owl-dot.active span, .elementor-widget-divider .elementor-divider-separator:before, .elementor-widget-opal-teams .elementor-teams-wrapper.style-3 .elementor-team-details, .elementor-teams-wrapper:not(.style-3) .elementor-team-details, .elementor-widget-opal-testimonials .elementor-testimonial-wrapper.layout_1 .elementor-testimonial-details:before, .elementor-widget-opal-testimonials .elementor-testimonial-wrapper.layout_3 .elementor-testimonial-image:before, .wc-proceed-to-checkout .button:hover, .wc-proceed-to-checkout a.checkout-button:hover, .site-header-cart .widget_shopping_cart_content, .header-button .count, .notification-added-to-cart .ns-content, #payment .place-order .button:hover, .opal-label-sale-circle li.product .onsale:before, .woocommerce-tabs ul.tabs li a:after, .single-product .single_add_to_cart_button:hover, .widget_price_filter .ui-slider .ui-slider-handle, .widget_price_filter .ui-slider .ui-slider-range, .handheld-footer-bar .cart .footer-cart-contents .count, .product-style-1 li.product:not(.osf-product-list) a[class*="product_type_"]:before {
  background-color: {$color_primary->toCss()}; }


.form-control:focus, .error404 .go-back, .widget .tagcloud a:hover, .widget .tagcloud a:focus, .wp_widget_tag_cloud a:hover, .wp_widget_tag_cloud a:focus, .button-primary, .entry-footer .edit-link a.post-edit-link, .page .edit-link a.post-edit-link, .woocommerce-MyAccount-content .woocommerce-Pagination .woocommerce-button, .widget_shopping_cart .buttons .button,
.button-outline-primary, .widget_shopping_cart .buttons .button:nth-child(odd), .button-outline-primary:hover, .button-outline-primary:active, .button-outline-primary.active,
.show > .button-outline-primary.dropdown-toggle, .b-primary, .owl-theme.woocommerce-carousel .owl-dots .owl-dot:hover, .owl-theme.woocommerce-carousel .owl-dots .owl-dot.active, .owl-theme.owl-carousel .owl-dots .owl-dot:hover, .entry-gallery .gallery .owl-dots .owl-dot:hover, .woocommerce .woocommerce-carousel ul.owl-theme.products .owl-dots .owl-dot:hover, .woocommerce-product-carousel ul.owl-theme.products .owl-dots .owl-dot:hover, .owl-theme.owl-carousel .owl-dots .owl-dot.active, .entry-gallery .gallery .owl-dots .owl-dot.active, .woocommerce .woocommerce-carousel ul.owl-theme.products .owl-dots .owl-dot.active, .woocommerce-product-carousel ul.owl-theme.products .owl-dots .owl-dot.active,
.owl-theme .products .owl-dots .owl-dot:hover,
.owl-theme .products .owl-dots .owl-dot.active, .elementor-widget-opal-portfolio .elementor-portfolio__filter.elementor-active, .elementor-widget-opal-portfolio .elementor-portfolio__filter:hover, .wc-proceed-to-checkout .button:hover, .wc-proceed-to-checkout a.checkout-button:hover, #payment .place-order .button:hover, .gallery-nav-next:hover:after, .gallery-nav-prev:hover:after, .woocommerce-loop-product__gallery .gallery_item.active, .woocommerce-loop-product__gallery .gallery_item:hover, .single-product div.product .woocommerce-product-gallery .flex-control-thumbs li img.flex-active, .single-product div.product .woocommerce-product-gallery .flex-control-thumbs li:hover img, .single-product .single_add_to_cart_button:hover, .osf-product-deal .woocommerce-product-list .opal-countdown .day {
  border-color: {$color_primary->toCss()}; }



.btn-link:focus, .btn-link:hover, .button-link:focus, .more-link:focus, .button-link:hover, .more-link:hover, a:hover, a:active, .product-style-1 li.product:not(.osf-product-list) a[class*="product_type_"]:hover, .product-style-1 li.product:not(.osf-product-list) a.loading[class*="product_type_"] {
  color: {$color_primary_hover->toCss()}; }


.button-primary:hover, .entry-footer .edit-link a.post-edit-link:hover, .page .edit-link a.post-edit-link:hover, .woocommerce-MyAccount-content .woocommerce-Pagination .woocommerce-button:hover, .widget_shopping_cart .buttons .button:hover, .button-primary:active, .entry-footer .edit-link a.post-edit-link:active, .page .edit-link a.post-edit-link:active, .woocommerce-MyAccount-content .woocommerce-Pagination .woocommerce-button:active, .widget_shopping_cart .buttons .button:active, .button-primary.active, .entry-footer .edit-link a.active.post-edit-link, .page .edit-link a.active.post-edit-link, .woocommerce-MyAccount-content .woocommerce-Pagination .active.woocommerce-button, .widget_shopping_cart .buttons .active.button,
.show > .button-primary.dropdown-toggle, .entry-footer .edit-link .show > a.dropdown-toggle.post-edit-link, .page .edit-link .show > a.dropdown-toggle.post-edit-link, .woocommerce-MyAccount-content .woocommerce-Pagination .show > .dropdown-toggle.woocommerce-button, .widget_shopping_cart .buttons .show > .dropdown-toggle.button {
  background-color: {$color_primary_hover->toCss()}; }


.button-primary:hover, .entry-footer .edit-link a.post-edit-link:hover, .page .edit-link a.post-edit-link:hover, .woocommerce-MyAccount-content .woocommerce-Pagination .woocommerce-button:hover, .widget_shopping_cart .buttons .button:hover, .button-primary:active, .entry-footer .edit-link a.post-edit-link:active, .page .edit-link a.post-edit-link:active, .woocommerce-MyAccount-content .woocommerce-Pagination .woocommerce-button:active, .widget_shopping_cart .buttons .button:active, .button-primary.active, .entry-footer .edit-link a.active.post-edit-link, .page .edit-link a.active.post-edit-link, .woocommerce-MyAccount-content .woocommerce-Pagination .active.woocommerce-button, .widget_shopping_cart .buttons .active.button,
.show > .button-primary.dropdown-toggle, .entry-footer .edit-link .show > a.dropdown-toggle.post-edit-link, .page .edit-link .show > a.dropdown-toggle.post-edit-link, .woocommerce-MyAccount-content .woocommerce-Pagination .show > .dropdown-toggle.woocommerce-button, .widget_shopping_cart .buttons .show > .dropdown-toggle.button {
  border-color: {$color_primary_hover->toCss()}; }



article.type-post .entry-content .more-link,
.button-outline-secondary, .c-secondary, .author-wrapper .author-name h6, .list-feature-box > li:before, .elementor-widget-opal-box-overview .elementor-box-overview-wrapper .entry-header a:hover, .column-item .services-inner .more-link, article.type-osf_service .more-link, .single-case_study .information li a {
  color: {$color_secondary->toCss()}; }


.site-footer .underline-title .vc_custom_heading:before,
.site-footer .underline-title .widget-title:before,
.site-footer .underline-title .widgettitle:before,
.button-secondary, input[type="button"], input[type="submit"], input[type="reset"], input.secondary[type="button"], input.secondary[type="reset"], input.secondary[type="submit"], button[type="submit"], .secondary-button .search-submit, .wc-proceed-to-checkout .button, .button-outline-secondary:hover, .button-outline-secondary:active, .button-outline-secondary.active,
.show > .button-outline-secondary.dropdown-toggle, .bg-secondary, .before-title-secondary:before, #secondary .elementor-nav-menu a:before,
.e--pointer-dot a:before, #secondary .elementor-widget-wp-widget-categories a:before {
  background-color: {$color_secondary->toCss()}; }


.secondary-border .search-form input[type="text"], .secondary-border .search-form input[type="text"]:focus,
.button-secondary, input[type="button"], input[type="submit"], input[type="reset"], input.secondary[type="button"], input.secondary[type="reset"], input.secondary[type="submit"], button[type="submit"], .secondary-button .search-submit, .wc-proceed-to-checkout .button,
.button-outline-secondary, .button-outline-secondary:hover, .button-outline-secondary:active, .button-outline-secondary.active,
.show > .button-outline-secondary.dropdown-toggle, .b-secondary {
  border-color: {$color_secondary->toCss()}; }



.button-secondary:hover, input:hover[type="button"], input:hover[type="submit"], input:hover[type="reset"], button:hover[type="submit"], .secondary-button .search-submit:hover, .wc-proceed-to-checkout .button:hover, .button-secondary:active, input:active[type="button"], input:active[type="submit"], input:active[type="reset"], button:active[type="submit"], .secondary-button .search-submit:active, .wc-proceed-to-checkout .button:active, .button-secondary.active, input.active[type="button"], input.active[type="submit"], input.active[type="reset"], button.active[type="submit"], .secondary-button .active.search-submit, .wc-proceed-to-checkout .active.button,
.show > .button-secondary.dropdown-toggle, .show > input.dropdown-toggle[type="button"], .show > input.dropdown-toggle[type="submit"], .show > input.dropdown-toggle[type="reset"], .show > button.dropdown-toggle[type="submit"], .secondary-button .show > .dropdown-toggle.search-submit, .wc-proceed-to-checkout .show > .dropdown-toggle.button {
  background-color: {$color_secondary_hover->toCss()}; }


.button-secondary:hover, input:hover[type="button"], input:hover[type="submit"], input:hover[type="reset"], button:hover[type="submit"], .secondary-button .search-submit:hover, .wc-proceed-to-checkout .button:hover, .button-secondary:active, input:active[type="button"], input:active[type="submit"], input:active[type="reset"], button:active[type="submit"], .secondary-button .search-submit:active, .wc-proceed-to-checkout .button:active, .button-secondary.active, input.active[type="button"], input.active[type="submit"], input.active[type="reset"], button.active[type="submit"], .secondary-button .active.search-submit, .wc-proceed-to-checkout .active.button,
.show > .button-secondary.dropdown-toggle, .show > input.dropdown-toggle[type="button"], .show > input.dropdown-toggle[type="submit"], .show > input.dropdown-toggle[type="reset"], .show > button.dropdown-toggle[type="submit"], .secondary-button .show > .dropdown-toggle.search-submit, .wc-proceed-to-checkout .show > .dropdown-toggle.button {
  border-color: {$color_secondary_hover->toCss()}; }


CSS;
    return $cssCode;
}
add_filter('osf_customize_grid', 'fridominimal_customizer_grid_bootstrap', 10 , 2);
function fridominimal_customizer_grid_bootstrap($cssCode, $gridGutter){
    $cssCode .= <<<CSS

.row, body.opal-content-layout-2cl #content .wrap, body.opal-content-layout-2cr #content .wrap, [data-opal-columns], body.archive .site-content .wrap, .blog .site-content .wrap, .opal-archive-style-4.blog .site-main, .opal-archive-style-4.archive .site-main, .opal-archive-style-3.blog .site-main, .opal-archive-style-3.archive .site-main, .opal-default-content-layout-2cr .site-content .wrap, .site-footer .widget-area, .opal-comment-form-2 .comment-form, .opal-comment-form-3 .comment-form, .opal-comment-form-4 .comment-form, .opal-comment-form-6 .comment-form, .widget .gallery,
.elementor-element .gallery,
.single .gallery, .list-feature-box, [data-elementor-columns], form.track_order, .opal-canvas-filter.top .opal-canvas-filter-wrap, .opal-canvas-filter.top .opal-canvas-filter-wrap section.WOOF_Widget .woof_redraw_zone, .woocommerce-cart .woocommerce, .woocommerce-billing-fields .woocommerce-billing-fields__field-wrapper, .woocommerce-MyAccount-content form[class^="woocommerce-"], .woocommerce-columns--addresses, .woocommerce-account .entry-content > .woocommerce, .woocommerce-account .entry-content > .woocommerce .u-columns.woocommerce-Addresses, .woocommerce-Addresses, .woocommerce-address-fields__field-wrapper, ul.products, .woocommerce .woocommerce-carousel, .osf-sorting, .single-product div.product, .single-product div.product .woocommerce-product-gallery .flex-control-thumbs, .single-product.woocommerce-single-style-4 div.product .images .woocommerce-product-gallery__wrapper, .woocommerce-single-style-5.single-product .site-main > .product {
    margin-right: -{$gridGutter}px;
    margin-left: -{$gridGutter}px;
}



.col-1, .col-2, [data-elementor-columns-mobile="6"] .column-item, .col-3, [data-elementor-columns-mobile="4"] .column-item, .col-4, .blog-container.style-3 .post-thumbnail, .opal-comment-form-2 .comment-form .comment-form-author, .opal-comment-form-3 .comment-form .comment-form-author, .opal-comment-form-2 .comment-form .comment-form-email, .opal-comment-form-3 .comment-form .comment-form-email, .opal-comment-form-2 .comment-form .comment-form-url, .opal-comment-form-3 .comment-form .comment-form-url, [data-elementor-columns-mobile="3"] .column-item, .col-5, .col-6, .opal-comment-form-4 .comment-form .comment-form-author,
.opal-comment-form-4 .comment-form .comment-form-email,
.opal-comment-form-4 .comment-form .comment-form-url, .opal-comment-form-6 .comment-form .comment-form-author, .opal-comment-form-6 .comment-form .comment-form-email, [data-elementor-columns-mobile="2"] .column-item, .single-product.opal-comment-form-2 .comment-form-author, .single-product.opal-comment-form-3 .comment-form-author,
.single-product.opal-comment-form-2 .comment-form-email,
.single-product.opal-comment-form-3 .comment-form-email, .col-7, .col-8, .blog-container.style-3 .entry-header, .col-9, .col-10, .col-11, .col-12, .site-footer .widget-area .widget-column, .opal-comment-form-2 .comment-form .logged-in-as, .opal-comment-form-3 .comment-form .logged-in-as,
.opal-comment-form-2 .comment-form .comment-notes,
.opal-comment-form-3 .comment-form .comment-notes,
.opal-comment-form-2 .comment-form .comment-form-comment,
.opal-comment-form-3 .comment-form .comment-form-comment, .opal-comment-form-2 .comment-form .form-submit, .opal-comment-form-3 .comment-form .form-submit, .opal-comment-form-4 .comment-form .logged-in-as,
.opal-comment-form-4 .comment-form .comment-notes,
.opal-comment-form-4 .comment-form .comment-form-comment,
.opal-comment-form-4 .comment-form .form-submit, .opal-comment-form-6 .comment-form .logged-in-as,
.opal-comment-form-6 .comment-form .comment-notes,
.opal-comment-form-6 .comment-form .comment-form-comment, .opal-comment-form-6 .comment-form .comment-form-url, .opal-comment-form-6 .comment-form .form-submit, .widget .gallery-columns-1 .gallery-item,
.elementor-element .gallery-columns-1 .gallery-item,
.single .gallery-columns-1 .gallery-item, [data-elementor-columns-mobile="1"] .column-item, .woocommerce-billing-fields .form-row-wide, .woocommerce-MyAccount-content form[class^="woocommerce-"] > *:not(fieldset), .woocommerce-MyAccount-content form[class^="woocommerce-"] .form-row-wide, #customer_details [class*='col'], .columns-1 ul.products li.product,
.columns-1 ul.products > li, #reviews .comment-form-rating, .woocommerce-single-style-5.single-product .site-main > .product .entry-summary, .woocommerce-single-style-5.single-product .site-main > .product .woocommerce-product-gallery, .col, body #secondary, .opal-canvas-filter.top .opal-canvas-filter-wrap section, .opal-canvas-filter.top .opal-canvas-filter-wrap section.WOOF_Widget .woof_redraw_zone .woof_container, .columns-5 ul.products li.product,
.columns-5 ul.products > li, .woocommerce-product-list.boxed, .woocommerce-product-list.skin-border-box li .inner, .woocommerce-product-list.skin-line-right li .inner,
.col-auto, .col-sm-1, [data-opal-columns="12"] .column-item, .col-sm-2, [data-opal-columns="6"] .column-item, .columns-6 ul.products li.product,
.columns-6 ul.products > li, .col-sm-3, [data-opal-columns="4"] .column-item, .col-sm-4, [data-opal-columns="3"] .column-item, .widget .gallery-columns-6 .gallery-item,
.elementor-element .gallery-columns-6 .gallery-item,
.single .gallery-columns-6 .gallery-item, .col-sm-5, .single-product.woocommerce-single-style-4 div.product .images, .col-sm-6, [data-opal-columns="2"] .column-item, .opal-archive-style-3 article.otf-post-style:not(:first-child):not(.sticky), .widget .gallery-columns-2 .gallery-item,
.elementor-element .gallery-columns-2 .gallery-item,
.single .gallery-columns-2 .gallery-item, .widget .gallery-columns-3 .gallery-item,
.elementor-element .gallery-columns-3 .gallery-item,
.single .gallery-columns-3 .gallery-item, .widget .gallery-columns-4 .gallery-item,
.elementor-element .gallery-columns-4 .gallery-item,
.single .gallery-columns-4 .gallery-item, .list-feature-box > li, .woocommerce-billing-fields .form-row-first, .woocommerce-billing-fields .form-row-last, .woocommerce-MyAccount-content form[class^="woocommerce-"] .form-row-first, .woocommerce-MyAccount-content form[class^="woocommerce-"] .form-row-last, ul.products li.product, .columns-2 ul.products li.product,
.columns-2 ul.products > li, .columns-3 ul.products li.product,
.columns-3 ul.products > li, .columns-4 ul.products li.product,
.columns-4 ul.products > li, .opal-content-layout-2cl .columns-3 ul.products li.product,
.opal-content-layout-2cl .columns-3 ul.products > li,
.opal-content-layout-2cr .columns-3 ul.products li.product,
.opal-content-layout-2cr .columns-3 ul.products > li, .col-sm-7, .single-product.woocommerce-single-style-4 div.product .entry-summary, .col-sm-8, .col-sm-9, .col-sm-10, .col-sm-11, .col-sm-12, [data-opal-columns="1"] .column-item, .opal-archive-style-4 article.otf-post-style, body.archive [data-columns="1"] .type-osf_service, body.archive [data-columns="1"] .column-item, body.archive [data-columns="1"] .type-portfolio, form.track_order p:first-of-type, .woocommerce-cart .woocommerce-error,
.woocommerce-cart .woocommerce-info,
.woocommerce-cart .woocommerce-message, .woocommerce-cart .woocommerce-notice,
.woocommerce-cart .woocommerce-message--success,
.woocommerce-cart .woocommerce-message--info,
.woocommerce-cart .woocommerce-message-close, .cart-collaterals .cross-sells, .woocommerce-columns--addresses .woocommerce-column, .woocommerce-account .entry-content > .woocommerce .u-columns [class^="u-column"], .woocommerce-account .entry-content > .woocommerce > h2, .woocommerce-account .entry-content > .woocommerce > form, .woocommerce-account .woocommerce-MyAccount-navigation, .woocommerce-account .woocommerce-MyAccount-content, .woocommerce-address-fields__field-wrapper .form-row, .woocommerce-product-carousel ul.products li.product, .osf-sorting .woocommerce-message, .osf-sorting .woocommerce-notice, .opal-content-layout-2cl .osf-sorting .osf-sorting-group,
.opal-content-layout-2cr .osf-sorting .osf-sorting-group, .single-product div.product .images, .single-product div.product .entry-summary, .single-product.woocommerce-single-style-4 div.product .images .woocommerce-product-gallery__wrapper .woocommerce-product-gallery__image, .col-sm,
.col-sm-auto, .col-md-1, .col-md-2, [data-elementor-columns-tablet="6"] .column-item, .col-md-3, [data-elementor-columns-tablet="4"] .column-item, .col-md-4, .opal-default-content-layout-2cr #secondary, [data-elementor-columns-tablet="3"] .column-item, .col-md-5, .osf-sorting .osf-sorting-group, .col-md-6, [data-elementor-columns-tablet="2"] .column-item, .col-md-7, .osf-sorting .osf-sorting-group + .osf-sorting-group, .col-md-8, .opal-default-content-layout-2cr #primary, .col-md-9, .col-md-10, .col-md-11, .col-md-12, .opal-archive-style-4.opal-content-layout-2cl article.otf-post-style, .opal-archive-style-4.opal-content-layout-2cr article.otf-post-style, [data-elementor-columns-tablet="1"] .column-item, form.track_order p.form-row-first, form.track_order p.form-row-last, form.track_order p:last-of-type, .cart-collaterals, .col-md,
.col-md-auto, .col-lg-1, .col-lg-2, [data-elementor-columns="6"] .column-item, .col-lg-3, [data-elementor-columns="4"] .column-item, .col-lg-4, [data-elementor-columns="3"] .column-item, .col-lg-5, .col-lg-6, [data-elementor-columns="2"] .column-item, .col-lg-7, .col-lg-8, .opal-content-layout-2cl .osf-sorting .osf-sorting-group + .osf-sorting-group,
.opal-content-layout-2cr .osf-sorting .osf-sorting-group + .osf-sorting-group, .col-lg-9, body.single-post.opal-single-post-style .entry-header,
body.single-post.opal-single-post-style .entry-content,
body.single-post.opal-single-post-style .entry-footer,
body.single-post.opal-single-post-style .comments-area,
body.single-post.opal-single-post-style .navigation, .col-lg-10, .col-lg-11, .col-lg-12, [data-elementor-columns="1"] .column-item, .col-lg,
.col-lg-auto, .col-xl-1, .col-xl-2, .col-xl-3, body.archive [data-columns="4"] .type-osf_service, body.archive [data-columns="4"] .column-item, body.archive [data-columns="4"] .type-portfolio, .col-xl-4, body.archive [data-columns="3"] .type-osf_service, body.archive [data-columns="3"] .column-item, body.archive [data-columns="3"] .type-portfolio, .col-xl-5, .col-xl-6, body.archive [data-columns="2"] .type-osf_service, body.archive [data-columns="2"] .column-item, body.archive [data-columns="2"] .type-portfolio, .col-xl-7, .col-xl-8, .col-xl-9, .col-xl-10, .col-xl-11, .col-xl-12, .col-xl,
.col-xl-auto {
    padding-right: {$gridGutter}px;
    padding-left: {$gridGutter}px;
}



.container, #content, .opal-canvas-filter.top, .single-product .related.products,
.single-product .up-sells.products {
    padding-right: {$gridGutter}px;
    padding-left: {$gridGutter}px;
}
  @media (min-width: 576px) {
    .container, #content, .opal-canvas-filter.top, .single-product .related.products,
    .single-product .up-sells.products {
      max-width: 540px; } }
  @media (min-width: 768px) {
    .container, #content, .opal-canvas-filter.top, .single-product .related.products,
    .single-product .up-sells.products {
      max-width: 720px; } }
  @media (min-width: 992px) {
    .container, #content, .opal-canvas-filter.top, .single-product .related.products,
    .single-product .up-sells.products {
      max-width: 960px; } }
  @media (min-width: 1200px) {
    .container, #content, .opal-canvas-filter.top, .single-product .related.products,
    .single-product .up-sells.products {
      max-width: 1140px; } }


CSS;
    return $cssCode;
}
add_filter('osf_customize_button_primary_color', 'fridominimal_customizer_button_primary_color', 10 , 11);
function fridominimal_customizer_button_primary_color($cssCode, $primary, $primary_hover, $primary_border, $primary_border_hover, $primary_color, $primary_color_hover, $border_radius, $primary_color_outline, $button_css, $font_style_code){
    $cssCode .= <<<CSS

.button-primary, .entry-footer .edit-link a.post-edit-link, .page .edit-link a.post-edit-link, .woocommerce-MyAccount-content .woocommerce-Pagination .woocommerce-button, .widget_shopping_cart .buttons .button {
    background-color: {$primary};
    border-color: {$primary};
    color: {$primary_color};
    border-radius: {$border_radius}px;
    {$button_css}
    {$font_style_code}
}



.button-primary:hover, .entry-footer .edit-link a.post-edit-link:hover, .page .edit-link a.post-edit-link:hover, .woocommerce-MyAccount-content .woocommerce-Pagination .woocommerce-button:hover, .widget_shopping_cart .buttons .button:hover, .button-primary:active, .entry-footer .edit-link a.post-edit-link:active, .page .edit-link a.post-edit-link:active, .woocommerce-MyAccount-content .woocommerce-Pagination .woocommerce-button:active, .widget_shopping_cart .buttons .button:active, .button-primary.active, .entry-footer .edit-link a.active.post-edit-link, .page .edit-link a.active.post-edit-link, .woocommerce-MyAccount-content .woocommerce-Pagination .active.woocommerce-button, .widget_shopping_cart .buttons .active.button,
.show > .button-primary.dropdown-toggle, .entry-footer .edit-link .show > a.dropdown-toggle.post-edit-link, .page .edit-link .show > a.dropdown-toggle.post-edit-link, .woocommerce-MyAccount-content .woocommerce-Pagination .show > .dropdown-toggle.woocommerce-button, .widget_shopping_cart .buttons .show > .dropdown-toggle.button {
    background-color: {$primary_hover};
    border-color: {$primary_hover};
    color: {$primary_color_hover};
    {$button_css}
    {$font_style_code}
}




.button-outline-primary, .widget_shopping_cart .buttons .button:nth-child(odd) {
    color: {$primary_color_outline};
    border-color: {$primary_border};
    border-radius: {$border_radius}px;
    {$button_css}
    {$font_style_code}
}



.button-outline-primary:hover, .widget_shopping_cart .buttons .button:hover:nth-child(odd), .button-outline-primary:active, .widget_shopping_cart .buttons .button:active:nth-child(odd), .button-outline-primary.active, .widget_shopping_cart .buttons .active.button:nth-child(odd),
.show > .button-outline-primary.dropdown-toggle, .widget_shopping_cart .buttons .show > .dropdown-toggle.button:nth-child(odd) {
    color: {$primary_color_hover};
    background-color: {$primary_hover};
    border-color: {$primary_border_hover};
    {$button_css}
    {$font_style_code}
}


CSS;
    return $cssCode;
}

add_filter('osf_customize_button_secondary_color', 'fridominimal_customizer_button_secondary_color', 10 , 11);
function fridominimal_customizer_button_secondary_color($cssCode, $secondary, $secondary_hover, $secondary_border, $secondary_border_hover, $secondary_color, $secondary_color_hover, $border_radius, $secondary_color_outline, $button_css, $font_style_code){
    $cssCode .= <<<CSS


.button-secondary, input[type="button"], input[type="submit"], input[type="reset"], input.secondary[type="button"], input.secondary[type="reset"], input.secondary[type="submit"], button[type="submit"], .secondary-button .search-submit, .wc-proceed-to-checkout .button {
    background-color: {$secondary};
    border-color: {$secondary};
    color: {$secondary_color};
    border-radius: {$border_radius}px;
    {$button_css}
    {$font_style_code}
}



.button-secondary:hover, input:hover[type="button"], input:hover[type="submit"], input:hover[type="reset"], button:hover[type="submit"], .secondary-button .search-submit:hover, .wc-proceed-to-checkout .button:hover, .button-secondary:active, input:active[type="button"], input:active[type="submit"], input:active[type="reset"], button:active[type="submit"], .secondary-button .search-submit:active, .wc-proceed-to-checkout .button:active, .button-secondary.active, input.active[type="button"], input.active[type="submit"], input.active[type="reset"], button.active[type="submit"], .secondary-button .active.search-submit, .wc-proceed-to-checkout .active.button,
.show > .button-secondary.dropdown-toggle, .show > input.dropdown-toggle[type="button"], .show > input.dropdown-toggle[type="submit"], .show > input.dropdown-toggle[type="reset"], .show > button.dropdown-toggle[type="submit"], .secondary-button .show > .dropdown-toggle.search-submit, .wc-proceed-to-checkout .show > .dropdown-toggle.button {
    background-color: {$secondary_hover};
    border-color: {$secondary_hover};
    color: {$secondary_color};
    {$button_css}
    {$font_style_code}
}




.button-outline-secondary {
    color: {$secondary_color_outline};
    border-color: {$secondary_border};
    border-radius: {$border_radius}px;
    {$button_css}
    {$font_style_code}
}



.button-outline-secondary:hover, .button-outline-secondary:active, .button-outline-secondary.active,
.show > .button-outline-secondary.dropdown-toggle {
    color: {$secondary_color_hover};
    background-color: {$secondary_hover};
    border-color: {$secondary_border_hover};
    border-radius: {$border_radius}px;
    {$button_css}
    {$font_style_code}
}


CSS;
    return $cssCode;
}
add_filter('osf_customize_typo_heading', 'fridominimal_customizer_custom_typo_heading', 10 , 2);
function fridominimal_customizer_custom_typo_heading($cssCode, $heading_css){
    $cssCode .= <<<CSS

.typo-heading, .author-wrapper .author-name, .post-navigation .nav-subtitle, .post-navigation .nav-title, .blog-container .heading, h2.widget-title,
h2.widgettitle, #secondary .elementor-widget-container h5:first-of-type, .osf-product-deal .woocommerce-product-list .opal-countdown {
    {$heading_css}
}


CSS;
    return $cssCode;
}
