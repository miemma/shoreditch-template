<?php
/**
 * Template part for displaying hero image on the single page.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package Shoreditch
 */

if ( post_password_required() || is_attachment() || ! has_post_thumbnail() ) {
	return;
}
?>
