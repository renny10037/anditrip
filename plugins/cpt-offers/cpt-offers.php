<?php
/*
Plugin Name: CPT offers
Plugin URI:
Description:
Version:
Author:
Author URI:
License:
License URI:
*/
if ( ! function_exists('offers') ) {

// Register Custom Post Type
function offers() {

	$labels = array(
		'name'                  => _x( 'offers', 'Post Type General Name', 'text_domain' ),
		'singular_name'         => _x( 'offer', 'Post Type Singular Name', 'text_domain' ),
		'menu_name'             => __( 'offer', 'text_domain' ),
		'name_admin_bar'        => __( 'offer', 'text_domain' ),
		'archives'              => __( 'Archivos de offer', 'text_domain' ),
		'attributes'            => __( 'Atributos de offer', 'text_domain' ),
		'parent_item_colon'     => __( 'Item de offer', 'text_domain' ),
		'all_items'             => __( 'Todos', 'text_domain' ),
		'add_new_item'          => __( 'Añadir Nueva offer', 'text_domain' ),
		'add_new'               => __( 'Añadir Nuevo', 'text_domain' ),
		'new_item'              => __( 'Nuevo', 'text_domain' ),
		'edit_item'             => __( 'Editar', 'text_domain' ),
		'update_item'           => __( 'Actualizar', 'text_domain' ),
		'view_item'             => __( 'Ver', 'text_domain' ),
		'view_items'            => __( 'Ver Todas', 'text_domain' ),
		'search_items'          => __( 'Buscar', 'text_domain' ),
		'not_found'             => __( 'No Encontrado', 'text_domain' ),
		'not_found_in_trash'    => __( 'No Encontrado en Papelera', 'text_domain' ),
		'featured_image'        => __( 'Imagen Destacada', 'text_domain' ),
		'set_featured_image'    => __( 'Configurar Imagen Destacada', 'text_domain' ),
		'remove_featured_image' => __( 'Borrar Imagen Destacada', 'text_domain' ),
		'use_featured_image'    => __( 'Usar como Imagen Destacada', 'text_domain' ),
		'insert_into_item'      => __( 'Insertar en Colombia', 'text_domain' ),
		'uploaded_to_this_item' => __( 'Actualizar en Colombia', 'text_domain' ),
		'items_list'            => __( 'Listado de offer', 'text_domain' ),
		'items_list_navigation' => __( 'Listado Navegable de offer', 'text_domain' ),
		'filter_items_list'     => __( 'Filtro de Lista de offer', 'text_domain' ),
	);
	$args = array(
		'label'                 => __( 'offer', 'text_domain' ),
		'description'           => __( 'offer', 'text_domain' ),
		'labels'                => $labels,
		'supports'              => array( 'title', 'thumbnail'),
		'taxonomies'            => array( 'category', 'post_tag' ),
		'hierarchical'          => false,
		'public'                => true,
		'show_ui'               => true,
		'show_in_menu'          => true,
		'menu_position'         => 5,
		'menu_icon'             => 'dashicons-megaphone',
		'show_in_admin_bar'     => true,
		'show_in_nav_menus'     => true,
		'can_export'            => true,
		'has_archive'           => true,
		'exclude_from_search'   => false,
		'publicly_queryable'    => true,
		'capability_type'       => 'page',
	);
	register_post_type( 'offers', $args );

}
add_action( 'init', 'offers', 0 );

}
