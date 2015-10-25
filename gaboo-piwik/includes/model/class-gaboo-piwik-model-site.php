<?php

/**
 * Class Gaboo_Piwik_Model_Site
 */
class Gaboo_Piwik_Model_Site
{
    public $site_id;
    public $location;

    /**
     * The constructor.
     *
     * @param array $option
     */
    private function __construct( array $option )
    {
        $this->site_id = $option[ 'site_id' ];
        $this->location = $option[ 'location' ];
    }

    /**
     * Build the site model.
     *
     * @return Gaboo_Piwik_Model_Site
     */
    public static function get()
    {
        $option = get_option( 'gaboo_piwik_model_site', array(
            'location' => '//piwik.192.168.27.14.xip.io/',
            'site_id' => 1,
        ) );

        return new Gaboo_Piwik_Model_Site( $option );
    }
}