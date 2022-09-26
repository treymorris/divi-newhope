<?php
function my_theme_enqueue_styles() { 
    wp_enqueue_style( 'parent-style', get_template_directory_uri() . '/style.css' );
}
add_action( 'wp_enqueue_scripts', 'my_theme_enqueue_styles' );


//This code allows user to enter text in place of a logo in menu settings
add_action('et_html_logo_container', 'db133_add_title_and_tagline');
 
if (!function_exists('db133_add_title_and_tagline')) {
	function db133_add_title_and_tagline($content){
		$logo_regex = '#<img[^>]*?id="logo"[^>]*?/>#';
		$new_content = preg_replace_callback($logo_regex, 'db133_add_title_and_tagline_callback', $content);
		return apply_filters('db133_add_title_and_tagline', $new_content, $content);
	}
}

if (!function_exists('db133_add_title_and_tagline_callback')) {
	function db133_add_title_and_tagline_callback($m) {
		$logo = isset($m[0])?$m[0]:'';
		$markup = $logo.db133_title_and_tagline_html();
		return apply_filters('db133_add_title_and_tagline_callback', $markup, $m);
	}
}

if (!function_exists('db133_title_and_tagline_html')) {
	function db133_title_and_tagline_html() {
		$title_and_tagline_html = sprintf(
			'<div id="db_title_and_tagline">
				<h1 id="logo-text">%s</h1> 
				<h5 id="logo-tagline" class="logo-tagline">%s</h5>
			</div>', 
			esc_html(db133_site_title()),
			esc_html(db133_site_tagline())
		);
		return apply_filters('db133_title_and_tagline_html', $title_and_tagline_html);
	}
}

if (!function_exists('db133_site_tagline')) {
	function db133_site_tagline() {
		$title = get_bloginfo('description');
		return apply_filters('db133_site_tagline', $title);
	}
}

if (!function_exists('db133_site_title')) {
	function db133_site_title() {
		$title = get_bloginfo('name');
		return apply_filters('db133_site_title', $title);
	}
}
