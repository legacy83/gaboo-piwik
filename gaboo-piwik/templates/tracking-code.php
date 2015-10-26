<?php /** @var Gaboo_Piwik_Model_Site $site */ ?>

<!-- Piwik -->
<script type="text/javascript">
    var _paq = _paq || [];
    _paq.push( [ 'trackPageView' ] );
    _paq.push( [ 'enableLinkTracking' ] );
    (function () {
        var u = "<?php echo esc_js( $site->location ); ?>";
        _paq.push( [ 'setTrackerUrl', u + 'piwik.php' ] );
        _paq.push( [ 'setSiteId', <?php echo esc_js( $site->site_id ); ?> ] );
        var d = document, g = d.createElement( 'script' ), s = d.getElementsByTagName( 'script' )[ 0 ];
        g.type = 'text/javascript';
        g.async = true;
        g.defer = true;
        g.src = u + 'piwik.js';
        s.parentNode.insertBefore( g, s );
    })();
</script>
<noscript>
    <p><img src="<?php echo esc_js( $site->location ); ?>piwik.php?idsite=<?php echo esc_js( $site->site_id ); ?>" style="border:0;" alt=""/></p>
</noscript>
<!-- End Piwik Code -->
