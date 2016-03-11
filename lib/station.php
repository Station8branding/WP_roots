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
/* ------------------------------------------------------------------------ *
* Station8
* Blog Feed
 * ------------------------------------------------------------------------ */

function s8_dashboard_widget_function() {
    $rss = fetch_feed( "http://station8branding.com/feed/" );

    if ( is_wp_error($rss) ) {
        if ( is_admin() || current_user_can('manage_options') ) {
            echo '<p>';
            printf(__('<strong>RSS Error</strong>: %s'), $rss->get_error_message());
            echo '</p>';
        }
        return;
    }

    if ( !$rss->get_item_quantity() ) {
        echo '<p>Apparently, there are no updates to show!</p>';
        $rss->__destruct();
        unset($rss);
        return;
    }
	echo "<header style='background: black; padding: 10px; text-align: center; margin: -11px -12px;'><a href='http://station8branding.com' target='_blank'><img src='http://station8branding.com/wp-content/uploads/2014/12/branding2.png'></a></header>";
    echo "<ul>\n";

    if ( !isset($items) )
        $items = 5;

    foreach ( $rss->get_items(0, $items) as $item ) {

        $link = esc_url( strip_tags( $item->get_link() ) );
        $title = esc_html( $item->get_title() );
        $content = $item->get_content();
        $content = wp_html_excerpt($content, 150) . ' ...';
        //$image = $item->get_the_post_thumbnail();

        echo "<li><a class='rsswidget' href='$link'>$title</a>\n<div class='rssSummary'>$content</div>\n";
    }

    echo "</ul>\n";
    echo "<a href='http://station8branding.com'>Visit Station8 for more information</a>";
    $rss->__destruct();
    unset($rss);
}

function s8_add_dashboard_widget() {
    wp_add_dashboard_widget('s8_dashboard_widget', 'Recent Posts from Station8 Branding', 's8_dashboard_widget_function');
}
add_action('wp_dashboard_setup', 's8_add_dashboard_widget');