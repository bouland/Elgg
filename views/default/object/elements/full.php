<?php
/**
 * Object full rendering
 *
 * Sample output
 * <h2>Title</h3>
 * <div class="elgg-content">
 *     <div class="elgg-image-block">
 *     </div>
 *     <div class="elgg-output">
 *     </div>
 * </div>
 *
 * @uses $vars['entity']   ElggEntity
 * @uses $vars['title']    Title (false for no title)
 * @uses $vars['icon']     HTML for the content icon
 * @uses $vars['summary']  HTML for the content summary
 * @uses $vars['body']     HTML for the content body
 * @uses $vars['class']    Optional additional class for the content wrapper
 */

$title = elgg_extract('title', $vars);
$icon = elgg_extract('icon', $vars);
$summary = elgg_extract('summary', $vars);
$body = elgg_extract('body', $vars);
$class = elgg_extract('class', $vars);
if ($class) {
	$class = "elgg-content $class";
} else {
	$class = "elgg-content";
}

if ($title) {
	$title = elgg_view_title($title);
}

$header = elgg_view_image_block($icon, $summary);

echo <<<HTML
$title
<div class="$class">
$header
$body
</div>
HTML;
