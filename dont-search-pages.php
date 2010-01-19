<?php
/*
Plugin Name: Don't Search Pages
Plugin URI: http://playground.ebiene.de/517/dont-search-pages-wordpress-plugin/
Description: Eliminate static pages from the internal blog search.
Author: Sergej M&uuml;ller
Version: 0.1
Author URI: http://www.wpSEO.org
*/


add_filter(
	'posts_where',
	create_function(
		'$where',
		'return (!empty($GLOBALS["wp_query"]->query_vars["s"]) ? "AND " .$GLOBALS["wpdb"]->posts. ".post_type != \'page\'" : "") . $where;'
	)
);