<?php echo head(array('bodyclass'=>'home')); ?>

<div id="callout">
    <div id="video-intro">
        <iframe src="https://player.vimeo.com/video/69445362?portrait=0" frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe> <p><a href="https://vimeo.com/69445362">Adrift</a> from <a href="https://vimeo.com/simonchristen">Simon Christen</a> on <a href="https://vimeo.com">Vimeo</a>.</p>
    </div>

    <?php if (get_theme_option('Homepage Text')): ?>
        <aside id="intro" role="introduction">
            <p><?php echo get_theme_option('Homepage Text'); ?></p>
        </aside>
    <?php endif; ?>
</div>

<?php if (get_theme_option('Display Featured Item') !== '0'): ?>
<!-- Featured Item -->
<div id="featured-item" class="featured">
    <h2><?php echo __('Featured Interviews'); ?></h2>
    <?php echo random_featured_items(4); ?>
</div><!--end featured-item-->
<?php endif; ?>



<?php if (get_theme_option('Display Featured Collection') !== '0'): ?>
<!-- Featured Collection -->
<div id="featured-collection" class="entry-block">
    <h2><?php echo __('Collections'); ?></h2>
    <?php echo random_featured_collection(); ?>
</div><!-- end featured collection -->
<?php endif; ?>


<?php if ((get_theme_option('Display Featured Exhibit') !== '0')
        && plugin_is_active('ExhibitBuilder')
        && function_exists('exhibit_builder_display_random_featured_exhibit')): ?>
<!-- Featured Exhibit -->
<?php echo exhibit_builder_display_random_featured_exhibit(); ?>
<?php endif; ?>

<?php if (get_theme_option('Display Featured Item') !== '0'): ?>
<!-- Featured Item -->
<div id="item-block" class="entry-block">
    <h2><?php echo __('Items'); ?></h2>
    <?php echo random_featured_items(1); ?>
</div><!--end featured-item-->
<?php endif; ?>



<?php fire_plugin_hook('public_home', array('view' => $this)); ?>

<?php echo foot(); ?>
