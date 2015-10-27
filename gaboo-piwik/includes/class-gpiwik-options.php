<?php

/**
 * Class GPiwik_Options
 */
final class GPiwik_Options
{
    const GROUP = 'gpiwik_options_group';
    const PAGE = 'gpiwik_options_page';

    public function __plugins_loaded()
    {
        add_action( 'admin_menu', array( $this, 'admin_menu' ) );
    }

    /**
     * Manage the admin menu.
     */
    public function admin_menu()
    {
        $page_title = __( 'Web Analytics Settings', 'gpiwik' );
        $menu_title = __( 'Web Analytics', 'gpiwik' );
        add_options_page( $page_title, $menu_title, 'manage_options', self::PAGE, array( $this, 'options_page' ) );
    }

    /**
     * Render the options page.
     */
    public function options_page()
    {
        $clip = new GPiwik_Clip();
        echo $clip->render( 'admin/options-page' );
    }
}
