<?php

/**
 * Class Gaboo_Piwik
 */
final class Gaboo_Piwik
{
    function __plugins_loaded()
    {
        add_action( 'wp_footer', array( $this, 'the_tracking_code' ), 99 );
    }

    /**
     * Render the piwik tracking code.
     */
    function the_tracking_code()
    {
        extract( array(
            'site' => Gaboo_Piwik_Model_Site::get(),
        ) );
        
        $templates_path = gaboo_piwik_templates_dir_path();
        include( "{$templates_path}tracking-code.php" );
    }
}