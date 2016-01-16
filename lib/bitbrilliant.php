<?php
/**
 * Bitrbilliant functions
 */
add_action('admin_init', 'bitbrilliant_shop_options');
function bitbrilliant_shop_options() {

	add_settings_section(
		'bitbrilliant_options',
		'Activate Comments',
		'toggle_comments_callback',
		'discussion'
		);
	
	 add_settings_field( 
        'show_comments',                     // ID
        'Comments',                          // Label
        'bit_comment_callback',  			 // The name of the function responsible for rendering the option interface
        'discussion',                        // The page on which this option will be displayed
        'bitbrilliant_options',         	 // The name of the section to which this field belongs
        array(                               // The array of arguments to pass to the callback. In this case, just a description.
            'Activate this setting to display the comments.'
        )
    );
    register_setting(
        'discussion',
        'show_comments'
    );
}
/** --------------------------------------------------
Callbacks
-------------------------------------------------------**/
function bit_comment_callback($args) {
	 // Note the ID and the name attribute of the element match that of the ID in the call to add_settings_field
    $html = '<input type="checkbox" id="show_comments" name="show_comments" value="1" ' . checked(1, get_option('show_comments'), false) . '/>'; 
      
    $html .= '<label for="show_comments"> '  . $args[0] . '</label>'; 
    echo $html;
}
function toggle_comments_callback() {
		echo '<p>Select which areas of content you wish to change.</p>';
		
	}
	
	

/* ------------------------------------------------------------------------ *
 * Bitbrilliant Widget
 * ------------------------------------------------------------------------ */
function built_by_callback($args) {
   echo $args['before_widget'];
   echo $args['before_title'] . 'My Unique Widget' . $after_title;
   echo $args['after_widget'];
   // print some HTML for the widget to display here
   echo '<div class="bit-footer"><p>Built by <a href="http://www.bitbrilliant.com" target="_blank">BitBrilliant</a></div>';
}

wp_register_sidebar_widget(
    'Bitbrilliant',        // your unique widget id
    'Built by Bitbrilliant',          // widget name
    'built_by_callback',  // callback function
    array(                  // options
        'description' => 'Site Production Team'
    )
);

/* ------------------------------------------------------------------------ *
 * Bitbrilliant is_tree function
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