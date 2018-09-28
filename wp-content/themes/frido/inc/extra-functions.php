<?php
add_action('after_setup_theme', 'fridominimal_add_framework_supports');
function fridominimal_add_framework_supports(){
    // Opal Framework support
    add_theme_support( 'opal-admin-menu' );
    add_theme_support( 'opal-custom-page-field' );
    add_theme_support( 'opal-customize-css' );
    add_theme_support( 'opal-portfolio' );
    add_theme_support( 'opal-footer-builder' );
    add_theme_support( 'opal-header-builder' );

}

add_filter('osf_customize_grid', 'fridominimal_customizer_grid', 10 , 2);
function fridominimal_customizer_grid($cssCode, $gridGutter) {
    $gridGutter = $gridGutter*2;
    $cssCode .= <<<CSS
    .column-item.portfolio-entries {
        margin-bottom: {$gridGutter}px;
    }
CSS;
    return $cssCode;
}


add_filter('osf_oneclick_config_url', 'fridominimal_get_one_click_url');
function fridominimal_get_one_click_url(){
    return 'http://demo3.wpopal.com/boost/sample_data/config.json';
}