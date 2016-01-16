<?php

// Custom functions
 
 
 	add_action( 'init', 'sliders' );
	function sliders() {
		register_post_type( 'sliders',
			array(
				'labels' => array(
					'name' => __( 'Sliders' ),
					'singular_name' => __( 'Slider Item' )
				),
				'public' => true,
				'has_archive' => true,
				'rewrite' => array('slug' => 'sliders'),
				'supports' => array( 'title', 'editor', 'comments', 'excerpt', 'thumbnail' ),
			)
		);
	}
	
	function slider_sections() {  
		  register_taxonomy(  
			'slider_sections',  
			'sliders',
			array(  
				'hierarchical' => true,  
				'label' => 'Section',  
				'query_var' => true,  
				'rewrite' => array('slug' => 'slider-sections')  
			)  
		);  
	}
	add_action( 'init', 'slider_sections' );
	
	
	