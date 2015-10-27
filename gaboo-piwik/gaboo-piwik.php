<?php
/**
 * Plugin Name: Gaboo Piwik
 * Plugin URI: https://trsenna.repositoryhosting.com/trac/trsenna_gaboo-piwik
 * Description: Piwik Web Analytics, the leading open-source analytics platform that give us more than just powerful analytics.
 *
 * Version: 0.1.0
 * Author: Thiago Senna
 * Author URI: http://thremes.com.br
 *
 * @package   GabooPiwik
 * @author    Thiago Senna <thiago@thremes.com.br>
 * @copyright Copyright (c) 2015, Thiago Senna
 * @license   http://www.gnu.org/licenses/old-licenses/gpl-2.0.html
 */

add_action( 'gaboo_back_compat_safe', 'gaboo_piwik_safe_includes' );
add_action( 'gaboo_back_compat_safe', 'gaboo_piwik_safe_bootstrap' );

/**
 * Safely continues
 * ... with the includes needed by the plugin
 */
function gaboo_piwik_safe_includes()
{
    /*
     * base includes
     */

    require_once( 'includes/base/class-gaboo-piwik-clip.php' );

    /*
     * model includes
     */

    require_once( 'includes/model/class-gaboo-piwik-model-site.php' );

    /*
     * plugin includes
     */

    require_once( 'includes/class-gaboo-piwik.php' );
    require_once( 'includes/class-gaboo-piwik-options.php' );
    require_once( 'includes/class-gaboo-piwik-section.php' );
}

/**
 * Safely continues
 * ... with the plugin bootstrap
 */
function gaboo_piwik_safe_bootstrap()
{
    __gaboo_plugins_loaded( new Gaboo_Piwik() );
    __gaboo_plugins_loaded( new Gaboo_Piwik_Options() );
    __gaboo_plugins_loaded( new Gaboo_Piwik_Section() );
}