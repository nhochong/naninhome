<?php

if (!defined('ABSPATH')) {
    exit;
}

class OSF_Shortcode {
    public function __construct() {
        add_filter('osf_list_shortcodes', array($this, 'add_shortcodes'), 1);
        add_action('init', array($this, 'init_shortcodes'));
    }

    /**
     * @return array
     */
    public function add_shortcodes($shortCodes = array()) {
        $shortCodes = wp_parse_args($shortCodes, array(
            'osf_backtop',
            'osf_countdown',
            'osf_counter',
            'osf_featured_box',
            'osf_latest_tweets',
            'osf_menu_social',
            'osf_parallax',
            'osf_pricing',
            'osf_image_carousel',
            'osf_promo_banner',
            'osf_vertical_menu',
            'osf_instagram',
            'osf_divider',
            'osf_service',
            'osf_single_service',
            'osf_portfolio'
        ));

        return $shortCodes;
    }

    public function init_shortcodes() {
        $shortCodes = apply_filters('osf_add_shortcode', apply_filters('osf_list_shortcodes', array()));
        foreach ($shortCodes as $shortCode) {
            $method = str_replace('osf_', '', $shortCode . '_shortcode');
            if (method_exists($this, $method)) {
                add_shortcode($shortCode, array($this, $method));
            }
        }
    }

    public function service_shortcode($atts = array(), $content = '') {
        ob_start();
        $this->render_shortcode('osf_service', $atts, $content);
        return ob_get_clean();
    }

    public function single_service_shortcode($atts = array(), $content = '') {
        ob_start();
        $this->render_shortcode('osf_single_service', $atts, $content);
        return ob_get_clean();
    }

    public function portfolio_shortcode($atts = array(), $content = '') {
        ob_start();
        $this->render_shortcode('osf_portfolio', $atts, $content);
        return ob_get_clean();
    }


    public function divider_shortcode($atts = array(), $content = '') {
        ob_start();
        $this->render_shortcode('osf_divider', $atts, $content);
        return ob_get_clean();
    }

    public function instagram_shortcode($atts = array(), $content = '') {
        ob_start();
        $this->render_shortcode('osf_instagram', $atts, $content);
        return ob_get_clean();
    }


    public function vertical_menu_shortcode($atts = array(), $content = '') {
        ob_start();
        $this->render_shortcode('osf_vertical_menu', $atts, $content);

        return ob_get_clean();
    }

    public function counter_shortcode($atts = array(), $content = '') {
        ob_start();
        $this->render_shortcode('osf_counter', $atts, $content);

        return ob_get_clean();
    }

    public function backtop_shortcode($atts = array(), $content = '') {
        ob_start();
        $this->render_shortcode('osf_backtop', $atts, $content);

        return ob_get_clean();
    }

    public function countdown_shortcode($atts = array(), $content = '') {
        ob_start();
        $this->render_shortcode('osf_countdown', $atts, $content);

        return ob_get_clean();
    }

    public function featured_box_shortcode($atts = array(), $content = '') {
        ob_start();
        $this->render_shortcode('osf_featured_box', $atts, $content);

        return ob_get_clean();
    }

    public function latest_tweets_shortcode($atts = array(), $content = '') {
        ob_start();
        $this->render_shortcode('osf_latest_tweets', $atts, $content);

        return ob_get_clean();
    }

    public function menu_social_shortcode($atts = array(), $content = '') {
        ob_start();
        $this->render_shortcode('osf_menu_social', $atts, $content);

        return ob_get_clean();
    }

    public function parallax_shortcode($atts = array(), $content = '') {
        ob_start();
        $this->render_shortcode('osf_parallax', $atts, $content);

        return ob_get_clean();
    }

    public function pricing_shortcode($atts = array(), $content = '') {
        ob_start();
        $this->render_shortcode('osf_pricing', $atts, $content);

        return ob_get_clean();
    }

    public function image_carousel_shortcode($atts = array(), $content = '') {
        ob_start();
        $this->render_shortcode('osf_image_carousel', $atts, $content);

        return ob_get_clean();
    }

    public function promo_banner_shortcode($atts = array(), $content = '') {
        ob_start();
        $this->render_shortcode('osf_promo_banner', $atts, $content);

        return ob_get_clean();
    }

    function render_shortcode($name, $atts = array(), $content = '') {
        $name = preg_replace('/_/', '-', $name);
        $path = get_theme_file_path('template-parts/shortcodes/' . $name . '.php');
        if (file_exists($path)) {
            include $path;
        }

        return '';
    }

    public function get_svg_divider($name, $color, $custom_height = '') {
        $folder = trailingslashit(FRIDOMINIMAL_CORE_PLUGIN_DIR) . 'assets/images/svg';
        $file = $folder . '/' . $name . '.svg';
        if (file_exists($file)) {
            $content = file_get_contents($file);
            $style = 'fill:  ' . esc_html($color) . ';';
            if ($name === 'grime-top') {
                $style .= 'margin-top: -1px;';
            }

            if($name === 'half-circle2-top'){
                $style .= 'margin-bottom: -1px;';
            }

            $style .= ($custom_height) ? 'height: ' . esc_html($custom_height) . ';' : '';
            return preg_replace("/<svg/", "<svg style=\"" . $style . "\"", $content);
        }
        return false;
    }
}

new OSF_Shortcode();