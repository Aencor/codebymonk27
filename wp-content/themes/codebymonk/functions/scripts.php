<?php

function theme_scripts() {
	if (is_single() && comments_open() && get_option("thread_comments")) {
		wp_enqueue_script("comment-reply");
	}

	$theme_version = '1.2.0';
	$css_file = get_template_directory() . '/assets/build/style.css';
	$js_file = get_template_directory() . '/assets/build/main.js';
	
	$css_ver = file_exists($css_file) ? filemtime($css_file) : $theme_version;
	$js_ver = file_exists($js_file) ? filemtime($js_file) : $theme_version;

	// Font Awesome 6 CDN - Load without blocking master.css
	wp_enqueue_style(
		"font-awesome",
		"https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css",
		[],
		"6.6.0",
		"all"
	);

	// Main Master Stylesheet
	wp_enqueue_style(
		"master",
		get_template_directory_uri() . "/assets/build/style.css",
		[],
		$css_ver,
		"all"
	);

	// Main JavaScript (GSAP, Lazy Modules, Router)
	wp_register_script(
		"theme-defer",
		get_template_directory_uri() . "/assets/build/main.js",
		[],
		$js_ver,
		true // Footer
	);
	wp_enqueue_script("theme-defer");
}

add_action("wp_enqueue_scripts", "theme_scripts", 9999);

// Add 'defer' attribute to main script for non-blocking execution
add_filter('script_loader_tag', function($tag, $handle, $src) {
	if ($handle === 'theme-defer') {
		return '<script src="' . esc_url($src) . '" defer id="' . esc_attr($handle) . '-js"></script>' . "\n";
	}
	return $tag;
}, 10, 3);

// Asynchronously load FontAwesome to eliminate render blocking
add_filter('style_loader_tag', function($html, $handle, $href, $media) {
	if ($handle === 'font-awesome') {
		return '<link rel="preload" href="' . esc_url($href) . '" as="style" onload="this.onload=null;this.rel=\'stylesheet\'">' . "\n"
			 . '<noscript><link rel="stylesheet" href="' . esc_url($href) . '"></noscript>' . "\n";
	}
	return $html;
}, 10, 4);

