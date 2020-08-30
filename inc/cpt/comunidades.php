<?php

// Register Custom Post Type
function Comunidades() {

	$labels = array(
		'name'                  => _x( 'Comunidades', 'Post Type General Name', 'communityconf2020' ),
		'singular_name'         => _x( 'Comunidad', 'Post Type Singular Name', 'communityconf2020' ),
		'menu_name'             => __( 'Comunidades', 'communityconf2020' ),
		'name_admin_bar'        => __( 'Comunidades', 'communityconf2020' ),
		'archives'              => __( 'Archivos', 'communityconf2020' ),
		'attributes'            => __( 'Atributos', 'communityconf2020' ),
		'parent_item_colon'     => __( 'Nombre de Padre', 'communityconf2020' ),
		'all_items'             => __( 'Comunidades', 'communityconf2020' ),
		'add_new_item'          => __( 'Agregar Nueva Comunidad', 'communityconf2020' ),
		'add_new'               => __( 'Agregar Nueva', 'communityconf2020' ),
		'new_item'              => __( 'Nueva Comunidad', 'communityconf2020' ),
		'edit_item'             => __( 'Editar Comunidad', 'communityconf2020' ),
		'update_item'           => __( 'Actualizar Comunidad', 'communityconf2020' ),
		'view_item'             => __( 'Ver Comunidad', 'communityconf2020' ),
		'view_items'            => __( 'Ver Comunidades', 'communityconf2020' ),
		'search_items'          => __( 'Buscar Comunidad', 'communityconf2020' ),
		'not_found'             => __( 'Not found', 'communityconf2020' ),
		'not_found_in_trash'    => __( 'Not found in Trash', 'communityconf2020' ),
		'featured_image'        => __( 'Featured Image', 'communityconf2020' ),
		'set_featured_image'    => __( 'Set featured image', 'communityconf2020' ),
		'remove_featured_image' => __( 'Remove featured image', 'communityconf2020' ),
		'use_featured_image'    => __( 'Use as featured image', 'communityconf2020' ),
		'insert_into_item'      => __( 'Insert into item', 'communityconf2020' ),
		'uploaded_to_this_item' => __( 'Uploaded to this item', 'communityconf2020' ),
		'items_list'            => __( 'Items list', 'communityconf2020' ),
		'items_list_navigation' => __( 'Items list navigation', 'communityconf2020' ),
		'filter_items_list'     => __( 'Filter items list', 'communityconf2020' ),
	);
	$args = array(
		'label'                 => __( 'Comunidad', 'communityconf2020' ),
		'description'           => __( 'Descripción de Comunidad', 'communityconf2020' ),
		'labels'                => $labels,
		'supports'              => array( 'title', 'editor', 'thumbnail' ),
		'hierarchical'          => false,
		'public'                => true,
		'show_ui'               => true,
		'show_in_menu'          => true,
		'menu_position'         => 20,
		'menu_icon'             => 'dashicons-admin-site',
		'show_in_admin_bar'     => true,
		'show_in_nav_menus'     => true,
		'can_export'            => true,
		'has_archive'           => true,
		'exclude_from_search'   => false,
		'publicly_queryable'    => true,
		'capability_type'       => 'page',
	);
	register_post_type( 'comunidades', $args );

}
add_action( 'init', 'Comunidades', 0 );
