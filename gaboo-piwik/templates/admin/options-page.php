<?php /** @var string $template */ ?>

<div class="wrap">

    <h2><?php echo __( 'Web Analytics Settings', 'gpiwik' ); ?></h2>

    <form action="options.php" method="post">
        <?php settings_fields( GPiwik_Options::GROUP ); ?>
        <?php do_settings_sections( GPiwik_Options::PAGE ); ?>
        <?php submit_button(); ?>
    </form>

</div>