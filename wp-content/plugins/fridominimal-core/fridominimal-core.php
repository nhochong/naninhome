<?php

/**
 * @package  filaminimal-core
 * @category Plugins
 * @author   WpOpal
 * Plugin Name: Fila Minimal Core
 * Plugin URI: http://www.wpopal.com/
 * Version: 1.1.5
 * Description: Implement rich functions for themes base on WpOpal. Wordpress framework and load widgets for theme
 * used, this is required. Version: 1.1.5 Author: WpOpal Author URI:  http://www.wpopal.com/ License: GNU/GPLv3
 * http://www.gnu.org/licenses/gpl-3.0.html
 */

final class FridominimalCore {
    /**
     * @var FridominimalCore
     */
    private static $instance;

    /**
     * FridominimalCore constructor.
     */
    public function __construct() {
        $this->setup_constants();
        $this->load_textdomain();
        $this->plugin_update();
        $this->init_hooks();
    }

    /**
     * @return void
     */
    public function setup_constants() {
        if (!defined('FRIDOMINIMAL_CORE_VERSION')) {
            define('FRIDOMINIMAL_CORE_VERSION', '1.0');
        }

        if (!defined('FRIDOMINIMAL_CORE_PLUGIN_DIR')) {
            define('FRIDOMINIMAL_CORE_PLUGIN_DIR', plugin_dir_path(__FILE__));
        }

        if (!defined('FRIDOMINIMAL_CORE_PLUGIN_URL')) {
            define('FRIDOMINIMAL_CORE_PLUGIN_URL', plugin_dir_url(__FILE__));
        }

        if (!defined('FRIDOMINIMAL_CORE_PLUGIN_FILE')) {
            define('FRIDOMINIMAL_CORE_PLUGIN_FILE', __FILE__);
        }
    }

    /**
     * @return void
     */
    private function load_textdomain() {
        $lang_dir      = dirname(plugin_basename(FRIDOMINIMAL_CORE_PLUGIN_FILE)) . '/languages/';
        $lang_dir      = apply_filters('osf_languages_directory', $lang_dir);
        $locale        = apply_filters('plugin_locale', get_locale(), 'fridominimal-core');
        $mofile        = sprintf('%1$s-%2$s.mo', 'fridominimal-core', $locale);
        $mofile_local  = $lang_dir . $mofile;
        $mofile_global = WP_LANG_DIR . '/fridominimal/' . $mofile;

        if (file_exists($mofile_global)) {
            load_textdomain('fridominimal', $mofile_global);
        } else {
            if (file_exists($mofile_local)) {
                load_textdomain('fridominimal', $mofile_local);
            } else {
                load_plugin_textdomain('fridominimal', false, $lang_dir);
            }
        }
    }

    public function plugin_update() {
        require 'plugin-updates/plugin-update-checker.php';
        Puc_v4_Factory::buildUpdateChecker(
            'http://demo1.wpopal.com/fila-minimal/sample_data/update-plugin.json',
            __FILE__,
            'fridominimal-core'
        );
    }

    /**
     * @return void
     */
    public function includes() {
        // Require plugin.php to use is_plugin_active() below
        include_once(ABSPATH . 'wp-admin/includes/plugin.php');

        include_once 'inc/vendors/ariColor.php';
        require_once 'inc/core-functions.php';
        require_once 'inc/class-css.php';
        require_once 'inc/style-functions.php';
        require_once 'inc/class-abstract-post-type.php';
        require_once 'inc/class-admin-menu.php';
        require_once 'inc/class-customize.php';
        require_once 'inc/class-import.php';
        require_once 'inc/class-meta-box.php';
        require_once 'inc/class-scripts.php';
        require_once 'inc/class-shortcode.php';
        require_once 'inc/class-theme.php';
        require_once 'inc/class-user.php';
        require_once 'inc/class-widgets.php';
        require_once 'inc/class-header-sticky.php';
        require_once 'inc/class-template-loader.php';

        if(osf_is_elementor_activated()){
            require_once 'inc/vendors/elementor/class-elementor.php';
        }

        if ($this->is_request('admin')) {
            /** inject:php_admin_class */
            require_once 'inc/admin/test.php';
            /** end:php_admin_class */
        }

        // CMB2
        if (!class_exists('CMB2')) {
            require_once 'inc/vendors/cmb2/libraries/init.php';
        }

        require_once 'inc/vendors/cmb2/custom-fields/map/map.php';
        require_once 'inc/vendors/cmb2/custom-fields/upload/upload.php';
        require_once 'inc/vendors/cmb2/custom-fields/user/user.php';
        require_once 'inc/vendors/cmb2/custom-fields/user_upload/user_upload.php';
        require_once 'inc/vendors/cmb2/custom-fields/switch/switch.php';
        require_once 'inc/vendors/cmb2/custom-fields/button_set.php';
        require_once 'inc/vendors/cmb2/custom-fields/text_password.php';
        require_once 'inc/vendors/cmb2/custom-fields/agent_info.php';
        require_once 'inc/vendors/cmb2/custom-fields/text_price.php';
        require_once 'inc/vendors/cmb2/custom-fields/switch-layout.php';
        require_once 'inc/vendors/cmb2/custom-fields/slider/slider.php';
        require_once 'inc/vendors/cmb2/custom-fields/footer-layout.php';
        require_once 'inc/vendors/cmb2/custom-fields/header-layout.php';

        if (!is_plugin_active('customizer-export-import/customizer-export-import.php')) {
            require_once 'inc/vendors/customizer-export-import/customizer-export-import.php';
        }

        if (is_plugin_active('woocommerce/woocommerce.php')) {
            require 'inc/vendors/woocommerce/class-woocommerce.php';
            require 'inc/vendors/woocommerce/class-woocommerce-extra.php';
            require 'inc/vendors/woocommerce/woocommerce-template-functions.php';
            require 'inc/vendors/woocommerce/woocommerce-template-hooks.php';
        }



        if (!osf_is_one_click_import_activated()) {
            require_once 'inc/vendors/one-click-demo-import/one-click-demo-import.php';
        }
        require_once 'inc/class-import.php';


    }

    /**
     * What type of request is this?
     *
     * @param  string $type admin, ajax, cron or frontend.
     *
     * @return bool
     */
    private function is_request($type) {
        switch ($type) {
            case 'admin' :
                return is_admin();
            case 'ajax' :
                return defined('DOING_AJAX');
            case 'cron' :
                return defined('DOING_CRON');
            case 'frontend' :
                return (!is_admin() || defined('DOING_AJAX')) && !defined('DOING_CRON');
        }
    }

    /**
     * @return void
     */
    private function init_hooks() {
//        register_activation_hook( __FILE__, array( 'OSF_Install', 'install' ) );
        add_action('plugins_loaded', array($this, 'includes'), 99);
        add_action('init', array($this, 'init_theme_support'), 1);
        add_action('customize_register', array($this, 'init_customize_control'), 1);
    }

    /**
     * @return FridominimalCore
     */
    public static function getInstance() {
        if (!isset(self::$instance) && !(self::$instance instanceof FridominimalCore)) {
            self::$instance = new FridominimalCore();
        }

        return self::$instance;
    }

    /**
     * @return void
     */
    public function init_customize_control() {
        if (get_theme_support('opal-customize-css')) {
            /** inject:customize_control */
        require_once 'inc/customize-control/background-position.php';
		require_once 'inc/customize-control/button-group.php';
		require_once 'inc/customize-control/button-move.php';
		require_once 'inc/customize-control/button-switch.php';
		require_once 'inc/customize-control/color.php';
		require_once 'inc/customize-control/editor.php';
		require_once 'inc/customize-control/font-style.php';
		require_once 'inc/customize-control/footer.php';
		require_once 'inc/customize-control/google-font.php';
		require_once 'inc/customize-control/header.php';
		require_once 'inc/customize-control/heading.php';
		require_once 'inc/customize-control/image-select.php';
		require_once 'inc/customize-control/import-export.php';
		require_once 'inc/customize-control/sidebar.php';
		require_once 'inc/customize-control/slider.php';
            /** end:customize_control */
        }
    }

    /**
     * @return void
     */
    public function init_theme_support() {
        if (get_theme_support('opal-header-builder')) {
            require_once 'inc/post-type/header.php';
            require_once 'inc/class-header-builder.php';
        }
        if (get_theme_support('opal-footer-builder')) {
            require_once 'inc/post-type/footer.php';
            require_once 'inc/class-footer-builder.php';
        }

        new OSF_Menu_Setup();
        new OSF_Metabox();
    }
}

if (!function_exists('FLC')) {
    /**
     * @return FridominimalCore
     */
    function FLC() {
        return FridominimalCore::getInstance();
    }
}
FLC();


