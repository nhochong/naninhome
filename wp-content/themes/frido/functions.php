<?php
if (version_compare($GLOBALS['wp_version'], '4.7-alpha', '<')) {
    require 'inc/back-compat.php';
    return;
}
require get_theme_file_path('inc/vendors/tgm/class-tgm-plugin-activation.php');
require get_theme_file_path('inc/theme-update-checker.php');

require get_theme_file_path('inc/tgm-plugins.php');

require get_theme_file_path('inc/template-tags.php');
require get_theme_file_path('inc/template-functions.php');

require get_theme_file_path('inc/customizer.php');

require get_theme_file_path('inc/class-main.php');
require get_theme_file_path('inc/extra-functions.php');

require get_theme_file_path('inc/starter-settings.php');

if (!class_exists('FridominimalCore') ) {
    if(fridominimal_is_Woocommerce_activated()){
        require get_theme_file_path('inc/vendors/woocommerce/woocommerce-template-functions.php');
        require get_theme_file_path('inc/vendors/woocommerce/class-woocommerce.php');
        require get_theme_file_path('inc/vendors/woocommerce/woocommerce-template-hooks.php');
    }
    // Blog Sidebar
    require get_theme_file_path('inc/class-sidebar.php');
}