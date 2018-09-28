<?php

class OSF_Install {
    public static function install() {
        do_action( 'osf_before_install' );

        

        do_action( 'osf_installed' );
    }
}