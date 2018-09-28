<?php

use Elementor\Controls_Manager;
use Elementor\Group_Control_Box_Shadow;
use Elementor\Group_Control_Typography;
use Elementor\Scheme_Color;
use Elementor\Scheme_Typography;

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly
}

class OSF_Elementor_Account extends Elementor\Widget_Base {

	public function get_name() {
		return 'opal-account';
	}

	public function get_title() {
		return __( 'Opal Account', 'fridominimal-core' );
	}

	public function get_icon() {
		return 'eicon-lock-user';
	}

	public function get_categories() {
		return [ 'opal-addons' ];
	}

	protected function _register_controls() {
		$this->start_controls_section(
			'account_content',
			[
				'label' => __( 'Account', 'fridominimal-core' ),
			]
		);

		$this->add_control(
			'icon',
			[
				'label' => __( 'Choose Icon', 'fridominimal-core' ),
				'type' => Controls_Manager::ICON,
				'default' => 'opal-icon-user',
			]
		);

		$this->end_controls_section();
	}

	protected function render() {
		$settings = $this->get_settings();

        if (osf_is_woocommerce_activated()) {
            $account_link = get_permalink(get_option('woocommerce_myaccount_page_id'));
        } else {
            $account_link = wp_login_url();
        }
        ?>
        <div class="site-header-account d-inline-block">
            <?php
                echo '<a href="' . esc_html($account_link) . '">
                        <span class="'. esc_attr($settings['icon']) .'"></span>
                      </a>';
            ?>
            <div class="account-dropdown">
                <div class="account-wrap">
                    <div class="account-inner <?php if (is_user_logged_in()): echo "dashboard"; endif; ?>">
                        <?php if (!is_user_logged_in()) {
                            $this->render_form_login();
                        } else {
                            $this->render_dashboard();
                        }
                        ?>
                    </div>
                </div>
            </div>
        </div>
    <?php
	}

	protected function render_form_login(){ ?>

        <div class="login-form-head pb-1 mb-2 bb-so-1 bc">
            <span class="login-form-title"><?php esc_attr_e('Sign in', 'fridominimal-core') ?></span>
            <span class="pull-right">
                <a class="register-link" href="<?php echo esc_url( wp_registration_url()); ?>"
                   title="<?php esc_attr_e('Register', 'fridominimal-core'); ?>"><?php esc_attr_e('Create an Account', 'fridominimal-core'); ?></a>
            </span>
        </div>
        <form class="opal-login-form-ajax" data-toggle="validator">
            <p>
                <label><?php esc_attr_e('Username or email', 'fridominimal-core'); ?> <span class="required">*</span></label>
                <input name="username" type="text" required placeholder="<?php esc_attr_e('Username', 'fridominimal-core') ?>">
            </p>
            <p>
                <label><?php esc_attr_e('Password', 'fridominimal-core'); ?> <span class="required">*</span></label>
                <input name="password" type="password" required placeholder="<?php esc_attr_e('Password', 'fridominimal-core') ?>">
            </p>
            <button type="submit" data-button-action class="btn btn-primary btn-block w-100 mt-1"><?php esc_html_e('Login', 'fridominimal-core') ?></button>
            <input type="hidden" name="action" value="opalrealestate_login">
			<?php wp_nonce_field('ajax-ore-login-nonce', 'security-login'); ?>
        </form>
        <div class="login-form-bottom">
            <a href="<?php echo wp_lostpassword_url(get_permalink()); ?>" class="mt-2 lostpass-link" title="<?php esc_attr_e('Lost your password?', 'fridominimal-core'); ?>"><?php esc_attr_e('Lost your password?', 'fridominimal-core'); ?></a>
        </div>
<?php

    }

    protected function render_dashboard(){ ?>
	    <?php if (has_nav_menu('my-account')) : ?>
            <nav class="social-navigation" role="navigation" aria-label="<?php esc_attr_e('Dashboard', 'fridominimal-core'); ?>">
                <?php
                wp_nav_menu(array(
                    'theme_location' => 'my-account',
                    'menu_class'     => 'account-links-menu',
                    'depth'          => 1,
                ));
                ?>
            </nav><!-- .social-navigation -->
        <?php else: ?>
            <ul class="account-dashboard">

                <?php if (osf_is_woocommerce_activated()): ?>
                        <li>
                            <a href="<?php echo esc_url(wc_get_page_permalink('myaccount')); ?>" title="<?php esc_html_e('Dashboard', 'fridominimal-core'); ?>"><?php esc_html_e('Dashboard', 'fridominimal-core'); ?></a>
                        </li>
                        <li>
                            <a href="<?php echo esc_url(wc_get_account_endpoint_url('orders')); ?>" title="<?php esc_html_e('Orders', 'fridominimal-core'); ?>"><?php esc_html_e('Orders', 'fridominimal-core'); ?></a>
                        </li>
                        <li>
                            <a href="<?php echo esc_url(wc_get_account_endpoint_url('downloads')); ?>" title="<?php esc_html_e('Downloads', 'fridominimal-core'); ?>"><?php esc_html_e('Downloads', 'fridominimal-core'); ?></a>
                        </li>
                        <li>
                            <a href="<?php echo esc_url(wc_get_account_endpoint_url('edit-address')); ?>" title="<?php esc_html_e('Edit Address', 'fridominimal-core'); ?>"><?php esc_html_e('Edit Address', 'fridominimal-core'); ?></a>
                        </li>
                        <li>
                            <a href="<?php echo esc_url(wc_get_account_endpoint_url('edit-account')); ?>" title="<?php esc_html_e('Account Details', 'fridominimal-core'); ?>"><?php esc_html_e('Account Details', 'fridominimal-core'); ?></a>
                        </li>
                <?php else: ?>
                    <li>
                        <a href="<?php echo esc_url(get_dashboard_url(get_current_user_id())); ?>" title="<?php esc_html_e('Dashboard', 'fridominimal-core'); ?>"><?php esc_html_e('Dashboard', 'fridominimal-core'); ?></a>
                    </li>
                <?php endif; ?>
                <li>
                    <a title="<?php esc_html_e('Log out', 'fridominimal-core'); ?>" class="tips" href="<?php echo esc_url(wp_logout_url(home_url())); ?>"><?php esc_html_e('Log Out', 'fridominimal-core'); ?></a>
                </li>
            </ul>
        <?php endif;

    }
}