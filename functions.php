
<?php
function display_featured_exhibits($exhibit) {
		$html = '<div id="featured-exhibit" class="featured">';
		$html .= get_view()->partial('exhibits/single.php', array('exhibit' => $exhibit));
		$html .= '</div>';
    	$html = apply_filters('exhibit_builder_display_random_featured_exhibit', $html);
    return $html;
}
?>