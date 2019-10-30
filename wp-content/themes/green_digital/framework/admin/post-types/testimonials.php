<?php

/*-----------------------------------------------------------------------------------*/
/* Manage Employee's columns */
/*-----------------------------------------------------------------------------------*/

function edit_testimonial_columns( $testimonial_columns ) {
	$columns = array(
		"cb" => "<input type=\"checkbox\" />",
		'title' => __( 'Nome do depoimento', 'mk_framework' ),
		"quote_author" => __( 'Autor', 'mk_framework' ),
		"desc" => __( 'Descrição', 'mk_framework' ),
		"thumbnail" => __( 'Imagem', 'mk_framework' ),
	);

	return $columns;
}
add_filter( 'manage_edit-testimonial_columns', 'edit_testimonial_columns' );

function manage_testimonials_columns( $column ) {
	global $post;

	if ( $post->post_type == "testimonial" ) {
		switch ( $column ) {
		case "quote_author":
			echo get_post_meta( $post->ID, '_author', true );
			break;
		case "desc":
			echo get_post_meta( $post->ID, '_desc', true );
			break;

		case 'thumbnail':
			echo the_post_thumbnail( 'thumbnail' );
			break;
		}
	}
}
add_action( 'manage_posts_custom_column', 'manage_testimonials_columns', 10, 2 );



/*-----------------------------------------------------------------------------------*/
/* Register Custom Post Types - Gallerys */
/*-----------------------------------------------------------------------------------*/
function register_testimonials_post_type() {

	global $mk_options;
   		if($mk_options['testimonials-post-type'] == 'false') return false;

	register_post_type( 'testimonial', array(
			'labels' => array(
				'name' => __( 'Depoimentos', 'mk_framework' ), __( 'post type general name', 'mk_framework' ),
				'singular_name' => __( 'Depoimento', 'mk_framework' ), __( 'post type singular name', 'mk_framework' ),
				'add_new' => __( 'Adicionar novo depoimento', 'mk_framework' ), __( 'Testimonials', 'mk_framework' ),
				'add_new_item' => __( 'Adicionar novo depoimento', 'mk_framework'),
				'edit_item' => __( 'Editar depoimento', 'mk_framework' ),
				'new_item' => __( 'Novo depoimento', 'mk_framework' ),
				'view_item' => __( 'Ver depoimentos', 'mk_framework' ),
				'search_items' => __( 'Pesquisar depoimentos', 'mk_framework' ),
				'not_found' =>  __( 'Nenhum depoimento encontrado', 'mk_framework' ),
				'not_found_in_trash' => __( 'Nenhum depoimento encontrado na lixeira', 'mk_framework' ),
				'parent_item_colon' => '',

			),
			'singular_label' => 'Testimonials',
			'public' => true,
			'exclude_from_search' => true,
			'show_ui' => true,
			'menu_icon'=> 'dashicons-awards',
			'capability_type' => 'post',
			'hierarchical' => false,
			'rewrite' => false,
			'menu_position' => 100,
			'query_var' => false,
			'show_in_nav_menus' => false,
			'supports' => array('title', 'thumbnail', 'page-attributes', 'revisions')
		) );
}
add_action( 'init', 'register_testimonials_post_type' );

function testimonials_context_fixer() {
	if ( get_query_var( 'post_type' ) == 'testimonial' ) {
		global $wp_query;
		$wp_query->is_home = false;
		$wp_query->is_404 = true;
		$wp_query->is_single = false;
		$wp_query->is_singular = false;
	}
}
add_action( 'template_redirect', 'testimonials_context_fixer' );