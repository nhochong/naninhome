<?php
if (!defined('ABSPATH')) {
    exit;
}


/* Hook to init */


/**
 * Add TinyMCE Button
 */


/**
 * Modify 2nd Row in TinyMCE and Add Background Color After Text Color Option
 */


/**
 * Class OSF_Theme_Setup
 */
class OSF_Theme_Setup {

    public function __construct() {
        add_filter('osf_customizer_buttons', array($this, 'add_customizer_buttons'));
        add_action('customize_register', array($this, 'customize_register'), 99);
        add_filter('opal_theme_sidebar', array($this, 'init_sidebar'));
        add_filter('wp_nav_menu_items', array($this, 'add_search_to_main_nav'), 10, 3);
        add_filter('body_class', array($this, 'add_body_class'));


        //add_filter('widget_nav_menu_args', array($this, 'megamenu_custom'));

        if (!is_user_logged_in()) {
//            add_action('wp_footer', array($this, 'modal_login_register'));
            // Ajax Login, Register and Forgot Password
            add_action('wp_ajax_opalrealestate_login', array($this, 'ajax_login'));
            add_action('wp_ajax_nopriv_opalrealestate_login', array($this, 'ajax_login'));

            add_action('wp_ajax_opalrealestate_register', array($this, 'ajax_register'));
            add_action('wp_ajax_nopriv_opalrealestate_register', array($this, 'ajax_register'));
        }

	    add_action('template_redirect', array($this, 'redirect_maintenance'), -1);

        // Add Background Button Editor
        add_action('init', array($this, 'editor_background_color'));
        add_filter('tiny_mce_before_init', array($this, 'customize_text_sizes'), 1);

        // Autoptimize Extra
        add_filter( 'autoptimize_filter_html_before_minify', array( $this, 'autoptimize_extra_min_html' ), 20 );
        add_filter( 'autoptimize_html_after_minify', array( $this, 'autoptimize_extra_min_html_after' ), 20 );

        add_action('widgets_init', array($this, 'widgets_init'), 9);
    }

    public function widgets_init(){
        register_sidebar(array(
            'name'          => esc_html__('Blog Sidebar', 'fridominimal-core'),
            'id'            => 'sidebar-1',
            'description'   => esc_html__('Add widgets here to appear in your sidebar on blog posts and archive pages.', 'fridominimal-core'),
            'before_widget' => '<section id="%1$s" class="widget %2$s">',
            'after_widget'  => '</section>',
            'before_title'  => '<h2 class="widget-title">',
            'after_title'   => '</h2>',
        ));

        register_sidebar(array(
            'name'          => esc_html__('Page Sidebar', 'fridominimal-core'),
            'id'            => 'sidebar-page',
            'description'   => esc_html__('Add widgets here to appear in your pages.', 'fridominimal-core'),
            'before_widget' => '<section id="%1$s" class="widget %2$s">',
            'after_widget'  => '</section>',
            'before_title'  => '<h2 class="widget-title">',
            'after_title'   => '</h2>',
        ));

        register_sidebar(array(
            'name'          => esc_html__('Off-canvas Menu', 'frido'),
            'id'            => 'sidebar-off-canvas',
            'description'   => esc_html__('Add widgets here to appear in your sidebar on Canvas Menu.', 'frido'),
            'before_widget' => '<section id="%1$s" class="widget %2$s">',
            'after_widget'  => '</section>',
            'before_title'  => '<h2 class="widget-title">',
            'after_title'   => '</h2>',
        ));
    }

    public function autoptimize_extra_min_html( $content ) {
        $content = preg_replace( '#(letter-spacing|padding):\s*px#', '', $content );
        $content = preg_replace( '#color: !important#', '', $content );
        if ( is_single() ) {
            $content = preg_replace( '#max=("|\')("|\')#', '', $content );
            $content = preg_replace( '#(inputmode=("|\')numeric("|\')|pattern=("|\')\[0-9\]\*("|\'))#', '', $content );
        }
        $content = preg_replace( '#(contentinfo|percentage|aria-required|aria-labelledby)=("|\')[a-zA-Z-_0-9]*("|\')#', '', $content );

        return $content;
    }

    public function autoptimize_extra_min_html_after( $content ) {
        $content = preg_replace( '#type=("|\')(text/javascript|text/css)("|\')#', '', $content );

        return $content;
    }

    public function editor_background_color() {
        /* Add the button/option in second row */
        add_filter('mce_buttons_2', array($this, 'editor_background_color_button'), 1, 2); // 2nd row
    }

    public function editor_background_color_button($buttons, $id) {
        /* Only add this for content editor, you can remove this line to activate in all editor instance */
        if ('content' != $id)
            return $buttons;
        /* Add the button/option after 4th item */
        array_splice($buttons, 4, 0, 'backcolor');

        array_shift($buttons);
        array_unshift($buttons, 'fontsizeselect');
        return $buttons;
    }

    public function customize_text_sizes($initArray) {
        $initArray['fontsize_formats'] = "10px 11px 12px 13px 14px 15px 16px 17px 18px 19px 20px 21px 22px 23px 24px 25px 26px 27px 28px 29px 30px 32px 34px 36px 38px 40px 42px";
        return $initArray;
    }


    public function ajax_register() {
        do_action('opalrealestate_ajax_verify_captcha');
        check_ajax_referer('ajax-ore-register-nonce', 'security-register');
        global $reg_errors;
        $this->registration_validation(
            $_POST['username'],
            $_POST['email'],
            $_POST['password'],
            $_POST['password2']
        );
        if (1 > count($reg_errors->get_error_messages())) {

            do_action('opalrealestate_quick_register_process_before');
            $username = sanitize_user($_POST['username']);
            $email = sanitize_email($_POST['email']);
            $email = sanitize_email($_POST['email']);
            $password = esc_attr($_POST['password']);

            $userdata = array(
                'user_login' => $username,
                'user_email' => $email,
                'user_pass'  => $password,
                'role'       => 'opalrealestate_agent',
            );
            $res = wp_insert_user($userdata);

            if (!is_wp_error($res)) {
                $jsondata = array('status' => true, 'msg' => esc_html__('You have registered, redirecting ...', 'fridominimal-core'));
                $info['user_login'] = $username;
                $info['user_password'] = $password;
                $info['remember'] = 1;
                wp_signon($info, false);

            } else {
                $jsondata = array('status' => false, 'msg' => esc_html__('Register user error!', 'fridominimal-core'));
            }
        } else {
            $jsondata = array('status' => false, 'msg' => implode('<br>', $reg_errors->get_error_messages()));
        }
        wp_send_json($jsondata);
    }

    public function ajax_login() {
        do_action('opalrealestate_ajax_verify_captcha');
        check_ajax_referer('ajax-ore-login-nonce', 'security-login');
        $info = array();

        $info['user_login'] = $_POST['username'];
        $info['user_password'] = $_POST['password'];
        $info['remember'] = $_POST['remember'];

        $user_signon = wp_signon($info, false);
        if (is_wp_error($user_signon)) {
            wp_send_json(array('status' => false, 'msg' => esc_html__('Wrong username or password. Please try again!!!', 'fridominimal-core')));
        } else {
            wp_set_current_user($user_signon->ID);
            wp_send_json(array('status' => true, 'msg' => esc_html__('Signin successful, redirecting...', 'fridominimal-core')));
        }

    }

    public function modal_login_register() {
        include_once trailingslashit(FRIDOMINIMAL_CORE_PLUGIN_DIR) . 'templates/modal/login-register-form.php';
    }

    public function megamenu_custom($args) {
        $args['walker'] = new OSF_Nav_walker();

        return $args;
    }

    public function add_body_class($classes) {
        $classes[] = 'opal-style';
        if (is_single()) {
            $classes[] = 'opal-single-post-style';
        }
        if (is_category()) {
            $classes[] = 'opal-content-layout-' . get_theme_mod('osf_blog_archive_layout', '2cr');
            $classes[] = 'opal-archive-style-' . get_theme_mod('osf_blog_archive_style', 1);
        } elseif (is_singular('post')) {
            $classes[] = 'opal-content-layout-' . get_theme_mod('osf_blog_single_layout', '2cr');
        } elseif (is_page()) {
            $classes[] = 'opal-content-layout-' . osf_get_metabox(get_the_ID(), 'osf_layout', '1c');
        }

        $classes[] = 'opal-header-style-' . get_theme_mod('osf_header_layout', 1);

        if (get_theme_mod('osf_layout_sidebar_is_sticky', true)) {
            $classes[] = 'opal-sidebar-sticky';
        }

        // Sidebar Skin
        if (get_theme_mod('osf_layout_sidebar_is_boxed', false)) {
            $classes[] = 'opal-sidebar-boxed';
            if (get_theme_mod('osf_layout_sidebar_title_outside', false)) {
                $classes[] = 'opal-sidebar-title-outside';
            }
        }

        // Sticky Menu
        if (get_theme_mod('osf_header_layout_is_sticky', false)) {
            $classes[] = 'header-sticky-enable';
        }

        //Fixed footer
        if(is_page()){
            $fixed_footer = osf_get_metabox( get_the_ID(), 'osf_enable_fixed_footer', false);
        }else{
            $fixed_footer = get_theme_mod('osf_fixed_footer', false);
        }
        if($fixed_footer){
            $classes[] = 'footer-fixed';
        }

        if (get_theme_mod('osf_header_layout_is_sticky', false)) {
            $classes[] = 'header-sticky-enable';
        }

        // Check Devices
        global $is_lynx, $is_gecko, $is_IE, $is_opera, $is_NS4, $is_safari, $is_chrome, $is_iphone;
        if ($is_lynx) {
            $classes[] = 'lynx';
        } elseif ($is_gecko) {
            $classes[] = 'gecko';
        } elseif ($is_opera) {
            $classes[] = 'opera';
        } elseif ($is_NS4) {
            $classes[] = 'ns4';
        } elseif ($is_safari) {
            $classes[] = 'safari';
        } elseif ($is_chrome) {
            $classes[] = 'chrome';
        } elseif ($is_IE) {
            $classes[] = 'ie';
            if (preg_match('/MSIE ([0-9]+)([a-zA-Z0-9.]+)/', $_SERVER['HTTP_USER_AGENT'], $browser_version)) {
                $classes[] = 'ie' . $browser_version[1];
            }
        } else $classes[] = 'unknown';
        if ($is_iphone) {
            $classes[] = 'platform-iphone';
        }
        if (stristr($_SERVER['HTTP_USER_AGENT'], "mac")) {
            $classes[] = 'platform-osx';
        } elseif (stristr($_SERVER['HTTP_USER_AGENT'], "linux")) {
            $classes[] = 'platform-linux';
        } elseif (stristr($_SERVER['HTTP_USER_AGENT'], "windows")) {
            $classes[] = 'platform-windows';
        }

        return $classes;
    }

    public function add_search_to_main_nav($items, $args) {
        if ('top' == $args->theme_location) {
            global $osf_header;
            if ($osf_header && $osf_header instanceof WP_Post) {
                if (osf_get_metabox($osf_header->ID, 'osf_enable_search_form', false)) {
                    return $this->set_main_nav_content($items);
                }

                return $items;
            }
            if (get_theme_mod('osf_header_layout_enable_search_form_in_menu', true)) {
                return $this->set_main_nav_content($items);
            }
        }

        return $items;
    }

    private function set_main_nav_content($items) {
        $id = wp_generate_uuid4();
        $items .= '<li class="megamenu-item menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children menu-item-search" data-level="0" >';
        $items .= '<a data-search-toggle="toggle" data-target=".' . $id . '" class="fa fa-search" title="' . __("search", "fridominimal-core") . '"></a>';
        $items .= '<ul class="otf-dropdown search_nav sub-menu ' . $id . '"><li>';
        ob_start();
        get_template_part('template-parts/header/search-form');
        $items .= ob_get_clean();
        $items .= '</li></ul>';
        $items .= '</li>';

        return $items;
    }

    public function init_sidebar($sidebar) {
        if (is_singular('post')) {
            if (get_theme_mod('osf_blog_single_layout', '2cr') != '1c') {
                $sidebar = get_theme_mod('osf_blog_single_sidebar', 'sidebar-1');
            }
        } elseif (osf_is_blog_archive()) {
            if (get_theme_mod('osf_blog_archive_layout', '2cr') != '1c') {
                $sidebar = get_theme_mod('osf_blog_archive_sidebar', 'sidebar-1');
            }
        } elseif (is_author()) {
            if (get_theme_mod('osf_author_single_layout', '1c') != '1c') {
                $sidebar = get_theme_mod('osf_author_single_sidebar', 'sidebar-1');
            }
        } elseif (is_page()) {
            if (osf_get_metabox($page_id = get_the_ID(), 'osf_layout', '1c') != '1c') {
                $sidebar_page = osf_get_metabox($page_id, 'osf_sidebar');
                if ($sidebar_page) {
                    $sidebar = $sidebar_page;
                }
            }

        }

        return $sidebar;
    }

    /**
     * @param $wp_customize WP_Customize_Manager
     */
    public function customize_register($wp_customize) {
        $wp_customize->get_setting('blogname')->transport = 'postMessage';
        $wp_customize->get_setting('blogdescription')->transport = 'postMessage';
        $wp_customize->get_setting('header_textcolor')->transport = 'postMessage';

        $wp_customize->get_control('background_color')->section = 'osf_colors_general';
        $wp_customize->get_control('background_color')->priority = 5;

        $wp_customize->get_control('background_color')->section = 'osf_colors_general';

        // Move background color setting alongside Colors > General.
        $wp_customize->get_control('background_color')->section = 'osf_colors_general';
        $wp_customize->get_control('background_color')->priority = 5;

        // Move background image setting alongside Colors > General.
        $wp_customize->get_control('background_image')->section = 'osf_colors_general';
        $wp_customize->get_control('background_image')->priority = 5;
        $wp_customize->get_control('background_preset')->section = 'osf_colors_general';
        $wp_customize->get_control('background_preset')->priority = 5;
        $wp_customize->get_control('background_position')->section = 'osf_colors_general';
        $wp_customize->get_control('background_position')->priority = 5;
        $wp_customize->get_control('background_size')->section = 'osf_colors_general';
        $wp_customize->get_control('background_size')->priority = 5;
        $wp_customize->get_control('background_repeat')->section = 'osf_colors_general';
        $wp_customize->get_control('background_repeat')->priority = 5;
        $wp_customize->get_control('background_attachment')->section = 'osf_colors_general';
        $wp_customize->get_control('background_attachment')->priority = 5;

    }

	public function redirect_maintenance() {
		// Check what kind of page was requested
		$maintenance = get_theme_mod('osf_maintenance', false);
		if($maintenance && !is_user_logged_in() && !is_admin()) {
			$page = get_theme_mod('osf_maintenance_page');
			if(!empty($page) && $page != get_the_ID()){
				wp_redirect(get_permalink($page));
				exit;
			}
		}

	}

    /**
     * @param $buttons
     *
     * @return array
     */
    public function add_customizer_buttons($buttons) {
        $buttons = wp_parse_args($buttons, array(
            'html'                                       => array(
                array(
                    'id'   => 'osf_colors_general',
                    'icon' => 'color',
                    'type' => 'section',
                ),
                array(
                    'id'   => 'osf_layout_general',
                    'icon' => 'layout',
                    'type' => 'section',
                ),
                array(
                    'id'   => 'osf_typography_general',
                    'icon' => 'typography',
                    'type' => 'section',
                ),
            ),
            '.entry-title,.heading,.vc_separator h4'     => array(
                array(
                    'id'   => 'osf_typography_general',
                    'icon' => 'typography',
                    'type' => 'section',
                ),
            ),
            '#colophon'                                  => array(
                array(
                    'id'   => 'osf_footer',
                    'icon' => 'layout',
                    'type' => 'section',
                ),
                array(
                    'id'   => 'osf_colors_footer',
                    'icon' => 'color',
                    'type' => 'section',
                ),
                array(
                    'id'   => 'osf_typography_footer',
                    'icon' => 'typography',
                    'type' => 'section',
                ),
            ),
            '#masthead'                                  => array(
                array(
                    'id'   => 'osf_header',
                    'icon' => 'layout',
                    'type' => 'section',
                ),
                array(
                    'id'   => 'osf_colors_header',
                    'icon' => 'color',
                    'type' => 'section',
                ),
            ),
            '#opal-canvas-menu'                          => array(
                array(
                    'id'   => 'osf_mobile',
                    'icon' => 'default',
                    'type' => 'section',
                ),
            ),
            'blockquote'                                 => array(
                array(
                    'id'   => 'osf_typography_quotes',
                    'icon' => 'typography',
                    'type' => 'section',
                ),
                array(
                    'id'   => 'osf_colors_quotes',
                    'icon' => 'color',
                    'type' => 'section',
                ),
            ),
            '.navigation.pagination, 
            .navigation.comments-pagination' => array(
                array(
                    'id'      => 'osf_layout_pagination_style',
                    'icon'    => 'layout',
                    'type'    => 'control',
                    'trigger' => '.button-change-image|click',
                ),
            ),
            'aside#secondary'                            => array(
                array(
                    'id'   => 'osf_colors_sidebar',
                    'icon' => 'color',
                    'type' => 'section',
                ),
                array(
                    'id'   => 'osf_typography_sidebar',
                    'icon' => 'typography',
                    'type' => 'section',
                ),
                array(
                    'id'   => 'osf_layout_sidebar',
                    'icon' => 'layout',
                    'type' => 'section',
                ),
            ),
            '.page-title-bar'                            => array(
                array(
                    'id'   => 'osf_typography_page_title',
                    'icon' => 'typography',
                    'type' => 'section',
                ),
                array(
                    'id'   => 'osf_layout_page_title',
                    'icon' => 'layout',
                    'type' => 'section',
                ),
                array(
                    'id'   => 'osf_colors_page_title',
                    'icon' => 'color',
                    'type' => 'section',
                ),
            ),
            '#comments .comment-list'                    => array(
                array(
                    'id'      => 'osf_comment_template_skin',
                    'icon'    => 'layout',
                    'type'    => 'control',
                    'trigger' => '.button-change-image|click',
                ),
            ),
            '#commentform'                               => array(
                array(
                    'id'      => 'osf_comment_template_form',
                    'icon'    => 'layout',
                    'type'    => 'control',
                    'trigger' => '.button-change-image|click',
                ),
            ),
            '.nav-links'                                 => array(
                array(
                    'id'      => 'osf_blog_single_navigation',
                    'icon'    => 'layout',
                    'type'    => 'control',
                    'trigger' => '.button-change-image|click',
                ),
            ),
            '.single-post #content'                      => array(
                array(
                    'id'   => 'osf_blog_single',
                    'icon' => 'layout',
                    'type' => 'section',
                ),
            ),
            'body.blog #content, body.category #content' => array(
                array(
                    'id'   => 'osf_blog_archive',
                    'icon' => 'layout',
                    'type' => 'section',
                ),
            ),
            'body.error404 #content'                     => array(
                array(
                    'id'   => 'osf_404_page_setting',
                    'icon' => 'layout',
                    'type' => 'section',
                ),
            ),
            '.otf-vertical-menu'                         => array(
                array(
                    'id'   => 'osf_typography_vertical_menu',
                    'icon' => 'typography',
                    'type' => 'section',
                ),
            ),
            '.mainmenu-container .top-menu'              => array(
                array(
                    'id'   => 'osf_typography_mainmenu',
                    'icon' => 'typography',
                    'type' => 'section',
                ),
            )
        ));

        return $buttons;
    }

    private function registration_validation($username, $email, $password, $confirmpassword) {
        global $reg_errors;
        $reg_errors = new WP_Error;
        if (empty($username) || empty($password) || empty($email) || empty($confirmpassword)) {
            $reg_errors->add('field', esc_html__('Required form field is missing', 'fridominimal-core'));
        }

        if (4 > strlen($username)) {
            $reg_errors->add('username_length', esc_html__('Username too short. At least 4 characters is required', 'fridominimal-core'));
        }

        if (username_exists($username)) {
            $reg_errors->add('user_name', esc_html__('Sorry, that username already exists!', 'fridominimal-core'));
        }

        if (!validate_username($username)) {
            $reg_errors->add('username_invalid', esc_html__('Sorry, the username you entered is not valid', 'fridominimal-core'));
        }

        if (5 > strlen($password)) {
            $reg_errors->add('password', esc_html__('Password length must be greater than 5', 'fridominimal-core'));
        }

        if ($password != $confirmpassword) {
            $reg_errors->add('password', esc_html__('Password must be equal Confirm Password', 'fridominimal-core'));
        }

        if (!is_email($email)) {
            $reg_errors->add('email_invalid', esc_html__('Email is not valid', 'fridominimal-core'));
        }

        if (email_exists($email)) {
            $reg_errors->add('email', esc_html__('Email Already in use', 'fridominimal-core'));
        }
    }
}

new OSF_Theme_Setup();

