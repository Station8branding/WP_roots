<?php
require locate_template('/lib/less/Less.php');

// Set our options for the less compiler
$bitstrappier_less_options = array( 
	'compress'	  	=> true,		// Set to false for development mode, true for production mode
	'cache_dir'   	=> get_stylesheet_directory().'/assets/css/cache',	// The directory to store the cache. Do not modify.
	'cache_method'	=> 'php'		// Set the cache method to either false, 'serialize', 'php', 'var_export'
);

// The LESS file to compile and cache. 
$bitstrappier_less_file = array( get_stylesheet_directory().'/assets/less/main.less' => get_bloginfo('template_url') );

// Define the LESS file to compile, in this case the main.less
$bitstrappier_css_file_name = Less_Cache::Get( $bitstrappier_less_file, $bitstrappier_less_options );
Less_Cache::CleanCache();

// Store the CSS file name in a URL with its template path
$s8_stylesheet_url = get_bloginfo('template_url').'/assets/css/cache/'.$bitstrappier_css_file_name;

