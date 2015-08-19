<?php
echo head(array(
    'title' => metadata('exhibit_page', 'title') . ' &middot; ' . metadata('exhibit', 'title'),
    'bodyclass' => 'exhibits show'));
?>

<h1><span class="exhibit-page"><?php echo metadata('exhibit_page', 'title'); ?></h1>

<div id="exhibit-blocks">

<?php if ($exhibitDescription = metadata('exhibit', 'description', array('no_escape' => true))): ?>
<div class="exhibit-description exhibit-block">
    <?php echo $exhibitDescription; ?>
</div>
<?php endif; ?>

<?php exhibit_builder_render_exhibit_page(); ?>
</div>
<nav id="exhibit-pages">
    <?php $navArray[] = array('label'=>'Return to Exhibits', 'uri'=>url('exhibits'));?>
    <h4><?php echo nav($navArray); ?></h4>
<!--
    <?php echo exhibit_builder_page_tree($exhibit, $exhibit_page); ?>
-->
    <h5><?php echo __('Browse Related Items'); ?></h5>
    <div class="tag-block">
        <?php if ($exhibitTags = tag_string('exhibit', 'items/browse', ' ')): ?>
            <p class="tags"><?php echo $exhibitTags; ?></p>
        <?php endif; ?>
    </div>
</nav>


<div id="exhibit-page-navigation">
    <?php if ($prevLink = exhibit_builder_link_to_previous_page()): ?>
    <div id="exhibit-nav-prev">
    <?php echo $prevLink; ?>
    </div>
    <?php endif; ?>
    <?php if ($nextLink = exhibit_builder_link_to_next_page()): ?>
    <div id="exhibit-nav-next">
    <?php echo $nextLink; ?>
    </div>
    <?php endif; ?>
    <div id="exhibit-nav-up">
    <?php echo exhibit_builder_page_trail(); ?>
    </div>
</div> 

<?php echo foot(); ?>
