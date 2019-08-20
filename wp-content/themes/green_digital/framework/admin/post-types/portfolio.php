<?php

function register_portfolio_post_type(){

	global $mk_options;
   		if($mk_options['portfolio-post-type'] == 'false') return false;
	
	register_post_type('portfolio', array(
		'labels' => array(
			'name' => __('Portfolios', 'post type general name', 'mk_framework' ),
			'singular_name' => __('Portfolio', 'post type singular name', 'mk_framework' ),
			'add_new' => __('Adicionar novo', 'portfolio', 'mk_framework' ),
			'add_new_item' => __('Adicionar novo Portfolio', 'mk_framework' ),
			'edit_item' => __('Editar portfolio', 'mk_framework' ),
			'new_item' => __('Novo Portfolio', 'mk_framework' ),
			'view_item' => __('Ver Portfolio', 'mk_framework' ),
			'search_items' => __('Pesquisar Portfolios', 'mk_framework' ),
			'not_found' =>  __('Nenhum portfolio encontrado', 'mk_framework' ),
			'not_found_in_trash' => __('Nenhum portfolio encontrado na lixeira', 'mk_framework' ), 
			'parent_item_colon' => '',
		),
		'singular_label' => __('portfolio', 'mk_framework' ),
		'public' => true,
		'has_archive' => true,
		'exclude_from_search' => false,
		'show_ui' => true,
		'menu_icon'=> 'dashicons-portfolio',
		'capability_type' => 'post',
		'menu_position' => 90,
		'hierarchical' => false,
		'rewrite' => array('slug' => _x($mk_options['portfolio_slug'], 'URL slug', 'mk_framework'), 'with_front' => FALSE ),
		//'rewrite' => false,
		'query_var' => false,
		'show_in_nav_menus' => true,
		'supports' => array('title', 'editor', 'author', 'excerpt', 'thumbnail', 'comments', 'page-attributes', 'revisions'),
	));

	//register taxonomy for portfolio
	register_taxonomy('portfolio_category','portfolio',array(
		'hierarchical' => true,
		'labels' => array(
			'name' => __( 'Categorias do Portfolio', 'mk_framework' ),
			'singular_name' => __( 'Categoria do Portfolio', 'mk_framework' ),
			'search_items' =>  __( 'Pesquisar categorias', 'mk_framework' ),
			'popular_items' => __( 'Categorias populares', 'mk_framework' ),
			'all_items' => __( 'Todas as categorias', 'mk_framework' ),
			'parent_item' => null,
			'parent_item_colon' => null,
			'edit_item' => __( 'Editar categoria do portfolio', 'mk_framework' ), 
			'update_item' => __( 'Atualizar categoria do portfolio', 'mk_framework' ),
			'add_new_item' => __( 'Adicionar nova categoria do portfolio', 'mk_framework' ),
			'new_item_name' => __( 'Novo novo da categoria do portfolio', 'mk_framework' ),
			'separate_items_with_commas' => __( 'Separar categorias com vírgula', 'mk_framework' ),
			'add_or_remove_items' => __( 'Adicionar ou remover categoria do portfolio', 'mk_framework' ),
			'choose_from_most_used' => __( 'Escolha categoria portfolio mais utilizado', 'mk_framework' ),
			
		),
		'show_ui' => true,
		'query_var' => true,
		'rewrite' => true,
		'show_in_nav_menus' => true,
	));

}
add_action('init','register_portfolio_post_type');


/*-----------------------------------------------------------------------------------*/
/* Manage portfolio's columns */
/*-----------------------------------------------------------------------------------*/
function edit_portfolio_columns($portfolio_columns) {
	$portfolio_columns = array(
		"cb" => "<input type=\"checkbox\" />",
		"title" => _x('Nome do portfolio', 'column name', 'mk_framework' ),
		"portfolio_categories" => __('Categorias', 'mk_framework' ),
		"thumbnail" => __('Imagem', 'mk_framework' )
	);

	return $portfolio_columns;
}
add_filter('manage_edit-portfolio_columns', 'edit_portfolio_columns');

function manage_portfolio_columns($column) {
	global $post;
	
	if ($post->post_type == "portfolio") {
		switch($column){
			case "portfolio_categories":
				$terms = get_the_terms($post->ID, 'portfolio_category');
				
				if (! empty($terms)) {
					foreach($terms as $t)
						$output[] = "<a href='edit.php?post_type=portfolio&portfolio_tag=$t->slug'> " . esc_html(sanitize_term_field('name', $t->name, $t->term_id, 'portfolio_tag', 'display')) . "</a>";
					$output = implode(', ', $output);
				} else {
					$t = get_taxonomy('portfolio_category');
					$output = "No $t->label";
				}
				
				echo $output;
				break;
			
			case 'thumbnail':
				echo the_post_thumbnail('thumbnail');
				break;
		}
	}
}
add_action('manage_posts_custom_column', 'manage_portfolio_columns', 10, 2);

?>