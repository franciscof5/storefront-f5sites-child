<?php

add_action( 'init', 'your_theme_init' );

function is_blog() {
	#
    return ( is_home() || is_single() || is_category() || is_archive() || is_front_page() || strpos($_SERVER['REQUEST_URI'], "blog") );
}

function your_theme_init() {
	add_shortcode('startups-links', 'startups_link_generate');
	// Disable nesting check to allow inserted pages within inserted pages.
	#add_filter('insert_pages_apply_nesting_check','__return_false' );
}

function startups_link_generate($atts) {
	$alink='';
	
	if(!isset($atts['title']))
		$atts['title']="Visitar Site do Projeto";

	if(isset($atts['url']))
	$alink = '<br /><a href="https://'.$atts['url'].'" class="button">'.$atts['title'].'</a> <hr />';

	return $alink.do_shortcode('[insert page=3614]').do_shortcode('[insert page=4634]').do_shortcode('[insert page=5034]');
}



