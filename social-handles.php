<?php
/*
Plugin Name: Social Handles
Plugin URI: http://www.rivercitygraphix.com
Description: A plugin that allows you to replace social handles with links to their respective profiles.
Author: Kevin Olson
Version: 1.0
Author URI: http://www.rivercitygraphix.com
*/

add_filter( "the_content", "replace_twitter_handles" );
add_filter( "the_content", "replace_youtube_handles" );
add_filter( "the_content", "replace_facebook_page_handles" );
add_filter( "the_content", "replace_wordpress_handles" );
add_filter( "the_content", "replace_twitter_hashtags_handles" );

function replace_twitter_handles($content) {
	$pattern= '/(?<=^|(?<=[^a-zA-Z0-9-_\.]))@([A-Za-z]+[A-Za-z0-9_]+)/i';
	$replace= '@<a href="http://www.twitter.com/$1">$1</a>';
	$content= preg_replace($pattern, $replace, $content);
	return $content;
}
function replace_youtube_handles($content) {
	$pattern= '/(?<=^|(?<=[^a-zA-Z0-9-_\.]))yt@([A-Za-z]+[A-Za-z0-9_]+)/i';
	$replace= '@<a href="http://www.youtube.com/$1">$1</a>';
	$content= preg_replace($pattern, $replace, $content);
	return $content;
}
function replace_facebook_page_handles($content) {
	$pattern= '/(?<=^|(?<=[^a-zA-Z0-9-_\.]))fb@([A-Za-z]+[A-Za-z0-9_]+)/i';
	$replace= '@<a href="http://www.facebook.com/$1">$1</a>';
	$content= preg_replace($pattern, $replace, $content);
	return $content;
}
function replace_wordpress_handles($content) {
	$pattern= '/(?<=^|(?<=[^a-zA-Z0-9-_\.]))wp@([A-Za-z]+[A-Za-z0-9_]+)/i';
	$replace= '@<a href="http://profiles.wordpress.org/$1">$1</a>';
	$content= preg_replace($pattern, $replace, $content);
	return $content;
}
function replace_twitter_hashtags_handles($content) {
	$pattern= '/(?<=^|(?<=[^a-zA-Z0-9-_\.]))#([A-Za-z]+[A-Za-z0-9_]+)/i';
	$replace= '#<a href="http://www.twitter.com/search/$1">$1</a>';
	$content= preg_replace($pattern, $replace, $content);
	return $content;
}
?>