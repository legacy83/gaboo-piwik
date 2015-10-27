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
        $clip = new Gaboo_Piwik_Clip();
        echo $clip->render( 'tracking-code', array(
            'site' => Gaboo_Piwik_Model_Site::get(),
        ) );
    }
}