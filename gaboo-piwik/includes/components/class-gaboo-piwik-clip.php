<?php

/**
 * Class Gaboo_Piwik_Clip
 */
final class Gaboo_Piwik_Clip extends Gaboo_Clip
{
    /**
     * Locate the template
     *
     * @param $name
     *
     * @return bool|string
     */
    protected function locate_template( $name )
    {
        $templates_path = plugin_dir_path( dirname( __DIR__ ) );
        $templates_path = trailingslashit( "{$templates_path}templates" );

        if ( file_exists( "{$templates_path}{$name}.php" ) ) {
            $located = "{$templates_path}{$name}.php";
        }

        return isset( $located ) ? $located : FALSE;
    }
}