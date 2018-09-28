<?php
add_action( 'after_switch_theme', 'fridominimal_starter_settings' );
function fridominimal_starter_settings() {
    if (!get_theme_mod( 'osf_starter_settings', false )){
        $content = wp_remote_fopen( get_theme_file_uri( 'assets/data/customizer.dat' ) );
        if ($content){
            $content = unserialize( $content );
            if (isset( $content['mods'] )){
                foreach ($content['mods'] as $key => $mod) {
                    if (substr( $key, 0, 4 ) !== 'osf_' || $key === 'osf_dev_mode'){
                        continue;
                    }
                    set_theme_mod( $key, $mod );
                }
            }
        }
        set_theme_mod( 'osf_blog_archive_style', 1 );
        set_theme_mod( 'osf_starter_settings', true );
    }
}