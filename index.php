<?php echo head(array('bodyclass'=>'home')); ?>

<div id="callout">
    <div id="video-intro">
        <video controls autoplay muted> 
            <source src="files/original/6cc36550f716edfd0433aa661c183fd5.mp4" type="video/mp4" />
            Your browser does not support the video tag.
        </video> 
    </div>
</div>

<div id="featured-bar">

<?php if ((get_theme_option('Display Featured Exhibit') <= '3')
        && plugin_is_active('ExhibitBuilder')): ?>
    <h2><?php echo __('Featured Exhibits'); ?></h2>
    <!-- Featured Exhibit -->
    <?php $exhibits = exhibit_builder_recent_exhibits(3); ?>
        <?php foreach ($exhibits as &$exhibit) {
            print_r(display_featured_exhibits($exhibit));
            }
        ?>
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
    <h2><?php echo __('Featured Items'); ?></h2>
    <?php echo random_featured_items(4); ?>
    <p class="view-items-link"><a class="action" href="<?php echo html_escape(url('items')); ?>"><?php echo __('View All Items'); ?></a></p>
</div><!--end recent-items -->


<?php fire_plugin_hook('public_home', array('view' => $this)); ?>

<?php echo foot(); ?>