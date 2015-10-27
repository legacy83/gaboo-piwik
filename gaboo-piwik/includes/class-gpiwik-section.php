<?php

/**
 * Class GPiwik_Section
 */
final class GPiwik_Section
{
    public function __plugins_loaded()
    {
        add_action( 'admin_init', array( $this, 'admin_init' ) );
    }

    /**
     * Manage the piwik section and settings.
     */
    public function admin_init()
    {
        $title = __( 'Piwik Web Analytics', 'gpiwik' );
        register_setting( GPiwik_Options::GROUP, 'gpiwik_model_site', array( $this, 'sanitize_callback' ) );
        add_settings_section( 'gpiwik_section', $title, array( $this, 'section_callback' ), GPiwik_Options::PAGE );
    }

    /**
     * Render the piwik section.
     */
    public function section_callback()
    {
        $clip = new GPiwik_Clip();
        echo $clip->render( 'admin/section-piwik', array(
            'site' => GPiwik_Model_Site::get(),
        ) );
    }

    /**
     * Sanitize the piwik settings.
     *
     * @param $input
     *
     * @return array
     */
    public function sanitize_callback( $input )
    {
        return array(
            'location' => trailingslashit( esc_url_raw( $input[ 'location' ] ) ),
            'site_id' => absint( $input[ 'site_id' ] ),
        );
    }
}