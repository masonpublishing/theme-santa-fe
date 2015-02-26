</div><!-- end content -->

<div id="footer" role="contentinfo">


    <div id="custom-footer-text">
        <?php if ( $footerText = get_theme_option('Footer Text') ): ?>
        <p><?php echo $footerText; ?></p>
        <?php endif; ?>
        <?php if ((get_theme_option('Display Footer Copyright') == 1) && $copyright = option('copyright')): ?>
            <p><?php echo $copyright; ?></p>
        <?php endif; ?>
    </div>

    <p><?php echo __('Proudly powered by <a href="http://omeka.org">Omeka</a>.'); ?></p>

    <?php fire_plugin_hook('public_footer', array('view' => $this)); ?>


</div><!-- end footer -->



</div><!--end wrap-->

<script type="text/javascript">
jQuery(document).ready(function () {
    SantaFe.showAdvancedForm();
    SantaFe.mobileSelectNav();
    SantaFe.skipNav();
});
</script>

</body>

</html>
