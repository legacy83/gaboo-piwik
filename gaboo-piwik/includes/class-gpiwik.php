<?php

/**
 * Class GPiwik
 */
final class GPiwik
{
    public function __plugins_loaded()
    {
        add_action( 'wp_footer', array( $this, 'the_tracking_code' ), 99 );
    }

    /**
     * Render the piwik tracking code.
     */
    public function the_tracking_code()
    {
        $clip = new GPiwik_Clip();
        echo $clip->render( 'tracking-code', array(
            'site' => GPiwik_Model_Site::get(),
        ) );
    }
}