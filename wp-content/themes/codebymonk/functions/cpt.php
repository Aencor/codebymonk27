<?php
/**
 * Register Custom Post Types & Taxonomies
 */

function cbm_register_custom_post_types() {
	// ========================================================
	// 1. Post Type: Portfolio / Portafolio
	// ========================================================
	$portfolio_labels = [
		'name'               => _x('Portafolio', 'post type general name', 'codebymonk'),
		'singular_name'      => _x('Proyecto', 'post type singular name', 'codebymonk'),
		'menu_name'          => _x('Portafolio', 'admin menu', 'codebymonk'),
		'name_admin_bar'     => _x('Proyecto', 'add new on admin bar', 'codebymonk'),
		'add_new'            => _x('Añadir Nuevo', 'proyecto', 'codebymonk'),
		'add_new_item'       => __('Añadir Nuevo Proyecto', 'codebymonk'),
		'new_item'           => __('Nuevo Proyecto', 'codebymonk'),
		'edit_item'          => __('Editar Proyecto', 'codebymonk'),
		'view_item'          => __('Ver Proyecto', 'codebymonk'),
		'all_items'          => __('Todos los Proyectos', 'codebymonk'),
		'search_items'       => __('Buscar Proyectos', 'codebymonk'),
		'not_found'          => __('No se encontraron proyectos', 'codebymonk'),
		'not_found_in_trash' => __('No hay proyectos en la papelera', 'codebymonk'),
	];

	register_post_type('portfolio', [
		'labels'             => $portfolio_labels,
		'public'             => true,
		'publicly_queryable' => true,
		'show_ui'            => true,
		'show_in_menu'       => true,
		'show_in_rest'       => true,
		'query_var'          => true,
		'rewrite'            => ['slug' => 'portafolio', 'with_front' => false],
		'capability_type'    => 'post',
		'has_archive'        => 'portafolio',
		'hierarchical'       => false,
		'menu_position'      => 5,
		'menu_icon'          => 'dashicons-portfolio',
		'supports'           => ['title', 'editor', 'thumbnail', 'excerpt', 'custom-fields'],
	]);

	// Taxonomy: Categoría de Portafolio
	register_taxonomy('portfolio_category', ['portfolio'], [
		'hierarchical'      => true,
		'labels'            => [
			'name'          => _x('Categorías de Portafolio', 'taxonomy general name', 'codebymonk'),
			'singular_name' => _x('Categoría de Portafolio', 'taxonomy singular name', 'codebymonk'),
			'menu_name'     => __('Categorías', 'codebymonk'),
		],
		'show_ui'           => true,
		'show_admin_column' => true,
		'show_in_rest'      => true,
		'query_var'         => true,
		'rewrite'           => ['slug' => 'categoria-portafolio'],
	]);

	// Taxonomy: Tags de Portafolio
	register_taxonomy('portfolio_tag', ['portfolio'], [
		'hierarchical'      => false,
		'labels'            => [
			'name'          => _x('Tags de Portafolio', 'taxonomy general name', 'codebymonk'),
			'singular_name' => _x('Tag de Portafolio', 'taxonomy singular name', 'codebymonk'),
			'menu_name'     => __('Tags', 'codebymonk'),
		],
		'show_ui'           => true,
		'show_admin_column' => true,
		'show_in_rest'      => true,
		'query_var'         => true,
		'rewrite'           => ['slug' => 'tag-portafolio'],
	]);

	// ========================================================
	// 2. Post Type: Casos de Estudio (Case Studies)
	// ========================================================
	$case_study_labels = [
		'name'               => _x('Casos de Estudio', 'post type general name', 'codebymonk'),
		'singular_name'      => _x('Caso de Estudio', 'post type singular name', 'codebymonk'),
		'menu_name'          => _x('Casos de Estudio', 'admin menu', 'codebymonk'),
		'name_admin_bar'     => _x('Caso de Estudio', 'add new on admin bar', 'codebymonk'),
		'add_new'            => _x('Añadir Nuevo', 'caso de estudio', 'codebymonk'),
		'add_new_item'       => __('Añadir Nuevo Caso de Estudio', 'codebymonk'),
		'new_item'           => __('Nuevo Caso de Estudio', 'codebymonk'),
		'edit_item'          => __('Editar Caso de Estudio', 'codebymonk'),
		'view_item'          => __('Ver Caso de Estudio', 'codebymonk'),
		'all_items'          => __('Todos los Casos de Estudio', 'codebymonk'),
		'search_items'       => __('Buscar Casos de Estudio', 'codebymonk'),
		'not_found'          => __('No se encontraron casos de estudio', 'codebymonk'),
		'not_found_in_trash' => __('No hay casos en la papelera', 'codebymonk'),
	];

	register_post_type('case_study', [
		'labels'             => $case_study_labels,
		'public'             => true,
		'publicly_queryable' => true,
		'show_ui'            => true,
		'show_in_menu'       => true,
		'show_in_rest'       => true,
		'query_var'          => true,
		'rewrite'            => ['slug' => 'casos-de-estudio', 'with_front' => false],
		'capability_type'    => 'post',
		'has_archive'        => 'casos-de-estudio',
		'hierarchical'       => false,
		'menu_position'      => 6,
		'menu_icon'          => 'dashicons-analytics',
		'supports'           => ['title', 'editor', 'thumbnail', 'excerpt', 'custom-fields'],
	]);

	// Taxonomy: Categoría de Caso de Estudio
	register_taxonomy('case_study_category', ['case_study'], [
		'hierarchical'      => true,
		'labels'            => [
			'name'          => _x('Categorías de Casos de Estudio', 'taxonomy general name', 'codebymonk'),
			'singular_name' => _x('Categoría de Caso de Estudio', 'taxonomy singular name', 'codebymonk'),
			'menu_name'     => __('Categorías', 'codebymonk'),
		],
		'show_ui'           => true,
		'show_admin_column' => true,
		'show_in_rest'      => true,
		'query_var'         => true,
		'rewrite'           => ['slug' => 'categoria-casos'],
	]);
}
add_action('init', 'cbm_register_custom_post_types');
