<?php

/**
 * The plugin bootstrap file
 *
 * This file is read by WordPress to generate the plugin information in the plugin
 * admin area. This file also includes all of the dependencies used by the plugin,
 * registers the activation and deactivation functions, and defines a function
 * that starts the plugin.
 *
 * @link              whitelabelcoders.com
 * @since             1.0.0
 * @package           Wp_Screens
 *
 * @wordpress-plugin
 * Plugin Name:       WPScreens
 * Plugin URI:        wpscreens.com/product-overview
 * Description:       The easy way to display your favorite slider on every screen you want.
 * Version:           2.5.3
 * Stable Tag:        2.5.3
 * Author:            WP Screens
 * Author URI:        wpscreens.com
 * License:           GPL-2.0+
 * License URI:       http://www.gnu.org/licenses/gpl-2.0.txt
 * Text Domain:       wp-screens
 * Domain Path:       /languages
 */

// If this file is called directly, abort.
if ( ! defined( 'WPINC' ) ) {
	die;
}

/**
 * Currently plugin version.
 * Start at version 1.0.0 and use SemVer - https://semver.org
 * Rename this for your plugin and update it as you release new versions.
 */
define( 'WPSCRN_WP_SCREENS_VERSION', '2.5.2' );

/**
 * The code that runs during plugin activation.
 * This action is documented in includes/class-wp-screens-activator.php
 */
function wpscrn_activate_wp_screens() {
	require_once plugin_dir_path( __FILE__ ) . 'includes/class-wp-screens-activator.php';
	Wpscrn_Wp_Screens_Activator::wpscrn_activate();
}

/**
 * The code that runs during plugin deactivation.
 * This action is documented in includes/class-wp-screens-deactivator.php
 */
function wpscrn_deactivate_wp_screens() {
	require_once plugin_dir_path( __FILE__ ) . 'includes/class-wp-screens-deactivator.php';
	Wpscrn_Wp_Screens_Deactivator::wpscrn_deactivate();
}

register_activation_hook( __FILE__, 'wpscrn_activate_Wp_Screens' );
register_deactivation_hook( __FILE__, 'wpscrn_deactivate_Wp_Screens' );

/**
 * The core plugin class that is used to define internationalization,
 * admin-specific hooks, and public-facing site hooks.
 */
require plugin_dir_path( __FILE__ ) . 'includes/class-wp-screens.php';

/**
 * Begins execution of the plugin.
 *
 * Since everything within the plugin is registered via hooks,
 * then kicking off the plugin from this point in the file does
 * not affect the page life cycle.
 *
 * @since    1.0.0
 */
function wpscrn_run_wp_screens() {

	$plugin = new Wpscrn_Wp_Screens();
	$plugin->run();

}

/**
* Load built-in ACF if ACF Pro isnot among active active_plugins
*/
if ( ! in_array( 'advanced-custom-fields-pro/acf.php', apply_filters( 'active_plugins', get_option( 'active_plugins' ) ) ) ) {
	define( 'WPSCRN_MY_ACF_PATH', plugin_dir_path( __FILE__ ) . '/includes/acf/' );
	define( 'WPSCRN_MY_ACF_URL', plugin_dir_url( __FILE__ ) . '/includes/acf/' );

	include_once( WPSCRN_MY_ACF_PATH . 'acf.php' );

	add_filter( 'acf/settings/url', 'wpscrn_my_acf_settings_url' );
	function wpscrn_my_acf_settings_url( $url ) {

			return WPSCRN_MY_ACF_URL;

	}
}

add_filter( 'acf/settings/show_admin', 'wpscrn_my_acf_settings_show_admin' );
function wpscrn_my_acf_settings_show_admin( $show_admin ) {
	return true;
}

include( plugin_dir_path( __FILE__ ) . '/includes/acf.php' );

wpscrn_run_Wp_Screens();



//test
//add_action('pre_post_update', 'restrict_publish_post', 10, 2);
add_action('wp_insert_post', 'restrict_publish_post', 10, 2);

function restrict_publish_post($post_ID, $post) {

   if($post->post_type === 'displays'){
    $wpscreens_valid_licanse = get_option('wpscreens_valid_licance');

    $wp_screens_addon_valid_license = get_option('wpscreens_valid_licence_addon');

    $getExtraScreen = get_option('wpscreen_custom_define');
    $getExtraScreens = is_numeric($getExtraScreen) ? (int) $getExtraScreen : 0;
    $total_screens = 0;

    switch ($wpscreens_valid_licanse) {
        case '1':
            $total_screens = 20 + $getExtraScreens;
            break;
        case '2':
            $total_screens = 30 + $getExtraScreens;
            break;
        default:
            $total_screens = 10 + $getExtraScreens;
            break;
    }

    if ('3' === $wp_screens_addon_valid_license) {
        $validAddonIf = get_option('addon_increment_valid');
        $countAddon = is_array($validAddonIf) ? count(array_unique($validAddonIf)) : 1;
        $total_screens += (25 * $countAddon);
    }
	$args = array(
		'post_type' => 'displays',
		'post_status' => array('publish', 'future', 'draft', 'pending', 'trash'),
		'posts_per_page' => -1
	);


	$all_posts = get_posts($args);
	$total_posts = count($all_posts);

    if ($total_posts && $post->post_type === 'displays') {
        $published_posts = wp_count_posts('displays')->publish + wp_count_posts('displays')->draft + wp_count_posts('displays')->trash ;

        if ($published_posts > $total_screens) {
            // Delete the post and show an error message
            wp_delete_post($post_ID, true);

            wp_die(
                'Sorry, the maximum number of WP Slides has been reached. <a href="https://wpscreens.com/product/wpscreens-add-on/" target="_blank">Increase the limit</a>',
                'Maximum Reached',
                array(
                    'response' => 500,
                    'back_link' => true,
                )
            );
        }
    }
	}
}