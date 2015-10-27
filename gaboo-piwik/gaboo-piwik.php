<?php
/**
 * Plugin Name: Gaboo Piwik
 * Plugin URI: https://github.com/trsenna/gaboo-piwik
 * Description: Piwik Web Analytics, the leading open-source analytics platform that give us more than just powerful
 * analytics.
 *
 * Version: 0.1.0
 * Author: Thiago Senna
 * Author URI: http://thremes.com.br
 *
 * @package   GPiwik
 * @author    Thiago Senna <thiago@thremes.com.br>
 * @copyright Copyright (c) 2015, Thiago Senna
 * @license   http://www.gnu.org/licenses/old-licenses/gpl-2.0.html
 */

add_action( 'gaboo_back_compat_safe', 'gpiwik_safe_includes' );
add_action( 'gaboo_back_compat_safe', 'gpiwik_safe_bootstrap' );

/**
 * Safely continues
 * ... with the includes needed by the plugin
 */
function gpiwik_safe_includes()
{
    // components
    require_once( 'includes/components/class-gpiwik-clip.php' );

    // models
    require_once( 'includes/models/class-gpiwik-model-site.php' );

    // includes
    require_once( 'includes/class-gpiwik.php' );
//    require_once( 'includes/class-gaboo-piwik-options.php' );
//    require_once( 'includes/class-gaboo-piwik-section.php' );
}

/**
 * Safely continues
 * ... with the plugin bootstrap
 */
function gpiwik_safe_bootstrap()
{
    __gaboo_plugins_loaded( new GPiwik() );
//    __gaboo_plugins_loaded( new Gaboo_Piwik_Options() );
//    __gaboo_plugins_loaded( new Gaboo_Piwik_Section() );
}