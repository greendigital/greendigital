<?php


if ( ! function_exists( 'tutsup_session_start' ) ) {
    // Cria a função
    function tutsup_session_start() {
        // Inicia uma sessão PHP
        if ( ! session_id() ) session_start();
    }
    // Executa a ação
    add_action( 'init', 'tutsup_session_start' );
}


if ( ! function_exists( 'tp_count_post_views' ) ) {
    // Conta os views do post
    function tp_count_post_views () {	
        // Garante que vamos tratar apenas de posts
        if ( is_single() ) {
        
            // Precisamos da variável $post global para obter o ID do post
            global $post;
            
            // Se a sessão daquele posts não estiver vazia
            if ( empty( $_SESSION[ 'tp_post_counter_' . $post->ID ] ) ) {
                
                // Cria a sessão do posts
                $_SESSION[ 'tp_post_counter_' . $post->ID ] = true;
            
                // Cria ou obtém o valor da chave para contarmos
                $key = 'tp_post_counter';
                $key_value = get_post_meta( $post->ID, $key, true );
                
                // Se a chave estiver vazia, valor será 1
                if ( empty( $key_value ) ) { // Verifica o valor
                    $key_value = 1;
                    update_post_meta( $post->ID, $key, $key_value );
                } else {
                    // Caso contrário, o valor atual + 1
                    $key_value += 1;
                    update_post_meta( $post->ID, $key, $key_value );
                } // Verifica o valor
                
            } // Checa a sessão
            
        } // is_single
        
        return;
        
    }
    add_action( 'get_header', 'tp_count_post_views' );
}


// function create_post_type_noticia()
// {
//   $labels = array('name' 				 => __('Noticia', 'post type general name'),
//           'singular_name' 	 => __('Noticia', 'post type singular name'),
//           'add_new' 			 => __('Adicionar', 'Noticia'),
//           'add_new_item' 		 => __('Adicionar Noticia'),
//           'edit_item'			 => __('Editar Noticia'),
//           'new_item' 			 => __('Novo Noticia'),
//           'view_item' 		 => __('Ver Noticia'),
//           'search_items' 		 => __('Search Noticia'),
//           'not_found' 		 => __('Noticia not found'),
//           'not_found_in_trash' => __('Noticia not found'),
//           'parent_item_colon'  => '',
//           'menu_name' 		 => 'Notícias');
//   $args = array(	'labels' 			 => $labels,
//           'public' 			 => true,
//           'publicly_queryable' => true,
//           'show_ui'			 => true,
//           'query_var'			 => true,
//           'menu_icon' 		 => 'dashicons-welcome-widgets-menus',
//           'rewrite' 			 => array('slug' => 'Noticia', 'with_front' => true),
//           'capability_type'	 => 'post',
//           'hierarchical'		 => false,
//           'has_archive'        => false,
//           'menu_position'		 => 5,
//           'supports'			 => array('title','editor','thumbnail'));
//   register_post_type('noticia', $args);
// }
// add_action( 'init', 'create_post_type_noticia' );
// flush_rewrite_rules();


/* Personalizar o logotipo e respectivo link da página de login */

  function page_login_logo() {
  echo "<style>

  body.login { background:#ffffff;}
  body.login #login h1 a { background: url('".get_stylesheet_directory_uri()."/images/green-digital.png') no-repeat scroll center top transparent; width: 109px; height: 121px; margin: 0 auto; }

  .message { background:#fff; color:#C00 }
  .login #login_error { background-color:#fff; border-color:#4e3b34; color:#c00;}

  /*——————————————————— login form——————————————————— */
  .login label { color:#86b145; }
  .login input { color:#86b145; }
  .login .button-primary { border:none; border-color:#86b145;  color: #FFF; background: #86b145;}
  .login .button-primary:hover { border:none; border-color:#FFF;  color: #fff; background: #86b145;}

  /*——————————————————— links below login forms——————————————————— */
  .login #nav, .login #backtoblog {padding: 8px;}
  .login #nav a {color:#86b145 !important; text-shadow:none; text-decoration:none}
  .login #nav a:hover { text-shadow:none; text-decoration:none}
  .login #backtoblog a {color:#86b145 !important; text-shadow:none; text-decoration:none}
  .login #backtoblog a:hover { text-shadow:none; text-decoration:none}

  </style>\n";

  }

  add_action("login_head", "page_login_logo");