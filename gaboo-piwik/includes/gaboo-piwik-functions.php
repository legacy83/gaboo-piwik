<?php

/**
 * Get the templates filesystem directory path (with no trailing slash).
 *
 * @return string
 */
function gaboo_piwik_templates_dir_path()
{
    $templates_path = plugin_dir_path( dirname( __FILE__ ) );
    return untrailingslashit( "{$templates_path}/templates" );
}