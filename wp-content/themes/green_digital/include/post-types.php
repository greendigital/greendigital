<?php
	/**
	 * Post-Types
	 * Desenvolvedor: Rafael Macedo (Vento);
	 * Data: 20.05.2016
	 **/

	// Custom post type 'Unidades'.
	function create_post_type_unidades()
	{
		$labels = array('name' 				 => __('Unidades', 'post type general name'),
						'singular_name' 	 => __('Unidades', 'post type singular name'),
						'add_new' 			 => __('Adicionar nova', 'unidade'),
						'add_new_item' 		 => __('Adicionar nova unidade'),
						'edit_item'			 => __('Editar unidade'),
						'new_item' 			 => __('Novo unidade'),
						'view_item' 		 => __('Ver unidade'),
						'search_items' 		 => __('Buscar unidade'),
						'not_found' 		 => __('Nenhum unidade encontrado'),
						'not_found_in_trash' => __('Nenhum unidade encontrado na lixeira'),
						'parent_item_colon'  => '',
						'menu_name' 		 => 'Unidades');

		$args = array(	'labels' 			 => $labels,
						'public' 			 => true,
						'publicly_queryable' => true,
						'show_ui'			 => true,
						'query_var'			 => true,
						'menu_icon' 		 => 'dashicons-store',
						'rewrite' 			 => array('slug' => 'unidades', 'with_front' => true),
						'capability_type'	 => 'post',
						'hierarchical'		 => false,
						'has_archive'        => false,
						'menu_position'		 => 5,
						'supports'			 => array('title','editor','thumbnail'));

		register_post_type('unidade', $args);
	}
	add_action( 'init', 'create_post_type_unidades' );
	flush_rewrite_rules();
?>