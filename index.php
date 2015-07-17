<?php echo head(array('bodyclass'=>'home')); ?>

<div id="callout">
    <div id="video-intro">
        <iframe src="https://player.vimeo.com/video/69445362?portrait=0" frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe> <p><a href="https://vimeo.com/69445362">Adrift</a> from <a href="https://vimeo.com/simonchristen">Simon Christen</a> on <a href="https://vimeo.com">Vimeo</a>.</p>
    </div>

    <?php if (get_theme_option('Homepage Text')): ?>
        <!-- <aside id="intro" role="introduction">
            <p><?php echo get_theme_option('Homepage Text'); ?></p>
        </aside> -->
    <?php endif; ?>
</div>

<div id="featured-bar">

<?php if (get_theme_option('Display Featured Collection') !== '0'): ?>
<!-- Featured Collection -->
<div id="featured-collection" class="featured">
    <h2><?php echo __('Collections'); ?></h2>
    <!-- <?php echo random_featured_collection(); ?> -->
    <img src="<?php echo img('rectangle_image.png'); ?>" />
    <p>Curabitur blandit tempus ardua ridiculus sed magna. Non equidem invideo, miror magis posuere velit aliquet.</p>
    <a class="action" href="<?php echo  url('collections/browse');?>">Browse Collections</a>
</div><!-- end featured collection -->
<?php endif; ?>

<!-- <?php if ((get_theme_option('Display Featured Exhibit') !== '0')
        && plugin_is_active('ExhibitBuilder')
        && function_exists('exhibit_builder_display_random_featured_exhibit')): ?> -->
<!-- Featured Exhibit -->
<!-- <?php echo exhibit_builder_display_random_featured_exhibit(); ?>
<?php endif; ?>
-->

<div id="featured-exhibit" class="featured">
    <h2><?php echo __('Exhibits'); ?></h2>
    <img src="<?php echo img('rectangle_image.png'); ?>" />
    <p>Curabitur blandit tempus ardua ridiculus sed magna. Non equidem invideo, miror magis posuere velit aliquet.</p>
    <a class="action" href="<?php echo  url('exibits');?>">Browse Exhibits</a>
</div>
<?php if (get_theme_option('Display Featured Item') !== '0'): ?>
<!-- Featured Item -->
<div id="featured-item" class="featured">
    <h2><?php echo __('Items'); ?></h2>
    <img src="<?php echo img('rectangle_image.png'); ?>" />
    <p>Curabitur blandit tempus ardua ridiculus sed magna. Non equidem invideo, miror magis posuere velit aliquet.</p>
    <a class="action" href="<?php echo  url('items/browse');?>">Browse Items</a></div><!--end featured-item-->
<?php endif; ?>

</div> <!-- end featured bar -->

<div id="main">
    <?php if (get_theme_option('Homepage Text')): ?>
        <aside id="intro" role="introduction">
    <p><?php echo get_theme_option('Homepage Text'); ?></p>
    </aside>
    <?php endif; ?>
</div>

<div id="recent-items">
    <h2><?php echo __('Featured Interviews'); ?></h2>
    <?php echo random_featured_items(4); ?>
    <p class="view-items-link"><a class="action" href="<?php echo html_escape(url('items')); ?>"><?php echo __('View All Items'); ?></a></p>
</div><!--end recent-items -->


<?php fire_plugin_hook('public_home', array('view' => $this)); ?>

<?php echo foot(); ?>