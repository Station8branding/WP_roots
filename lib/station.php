<?php
/**
 * Theme Custom functions
 */
	

/* ------------------------------------------------------------------------ *
 * Station8 Widget Widget
 * ------------------------------------------------------------------------ */
function built_by_callback($args) {
   echo $args['before_widget'];
   echo $args['before_title'] . 'My Unique Widget' . $after_title;
   echo $args['after_widget'];
   // print some HTML for the widget to display here
   echo '<div class="s8-footer"><p>Crafted by <a href="http://station8branding.com" target="_blank">Station8</a></div>';
}

wp_register_sidebar_widget(
    'Station',        		// your unique widget id
    'Built by Station8',    // widget name
    'built_by_callback',  	// callback function
    array(                  // options
        'description' => 'Site Production Team'
    )
);

/* ------------------------------------------------------------------------ *
 * is_tree function
 * Based on http://css-tricks.com/snippets/wordpress/if-page-is-parent-or-child/
 * ------------------------------------------------------------------------ */
function is_tree($pid) {      // $pid = The ID of the page we're looking for pages underneath
	global $post;         // load details about this page
	$ancestors = get_post_ancestors($post);
	if(is_page()&&($post->post_parent==$pid||is_page($pid)||in_array($pid,$ancestors))) 
               return true;   // we're at the page or at a sub page
	else 
               return false;  // we're elsewhere
};