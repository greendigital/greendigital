<?php

	/**
	 * Nessa seção do código eu estou colocando as novas funcionalidades, pois como eu não me encontrei nessa zona
	 * vou fazer dessa forma. Assim temos controle do código e das funcionalidades desejadas no momento.
	 * Desenvolvedor: Rafael Macedo (Vento)
	 * Data: 20.05.2016.
	 **/

	//Include dos post-types.
	include(TEMPLATEPATH.'/include/post-types.php');



	/** Daqui para frente é coisa do Márcio **/
$theme = new Theme();
$theme->init(array(
    "theme_name" => "Jupiter",
    "theme_slug" => "JP"
));

if (!isset($content_width)) {
    $content_width = 1140;
}

class Theme
{
    function init($options)
    {
        $this->constants($options);
        add_action('init', array(
            &$this,
            'language'
        ));
        $this->functions();
        $this->plugins();
        $this->post_types();
        add_action('admin_menu', array(
            &$this,
            'admin_menus'
        ));
        add_action('init', array(
            &$this,
            'add_metaboxes'
        ));
        $this->theme_activated();

        add_action('after_setup_theme', array(
            &$this,
            'supports'
        ));
        add_action('widgets_init', array(
            &$this,
            'widgets'
        ));
    }

    function constants($options)
    {
        define("THEME_DIR", get_template_directory());
        define("THEME_DIR_URI", get_template_directory_uri());
        define("THEME_NAME", $options["theme_name"]);
        if (defined("ICL_LANGUAGE_CODE")) {
            $lang = "_" . ICL_LANGUAGE_CODE;
        } else {
            $lang = "";
        }
        define("THEME_OPTIONS", $options["theme_name"] . '_options' . $lang);
        define("THEME_SLUG", $options["theme_slug"]);
        define("THEME_STYLES", THEME_DIR_URI . "/stylesheet/css");
        define("THEME_IMAGES", THEME_DIR_URI . "/images");
        define("THEME_JS", THEME_DIR_URI . "/js");
        define('FONTFACE_DIR', THEME_DIR . '/fontface');
        define('FONTFACE_URI', THEME_DIR_URI . '/fontface');
        define("THEME_FRAMEWORK", THEME_DIR . "/framework");
        define("THEME_PLUGINS", THEME_FRAMEWORK . "/plugins");
        define("THEME_ACTIONS", THEME_FRAMEWORK . "/actions");
        define("THEME_PLUGINS_URI", THEME_DIR_URI . "/framework/plugins");
        define("THEME_SHORTCODES", THEME_FRAMEWORK . "/shortcodes");
        define("THEME_WIDGETS", THEME_FRAMEWORK . "/widgets");
        define("THEME_SLIDERS", THEME_FRAMEWORK . "/sliders");
        define("THEME_HELPERS", THEME_FRAMEWORK . "/helpers");
        define("THEME_FUNCTIONS", THEME_FRAMEWORK . "/functions");
        define("THEME_CLASSES", THEME_FRAMEWORK . "/classes");
        define('THEME_ADMIN', THEME_FRAMEWORK . '/admin');
        define('THEME_METABOXES', THEME_ADMIN . '/metaboxes');
        define('THEME_ADMIN_POST_TYPES', THEME_ADMIN . '/post-types');
        define('THEME_GENERATORS', THEME_ADMIN . '/generators');
        define('THEME_ADMIN_URI', THEME_DIR_URI . '/framework/admin');
        define('THEME_ADMIN_ASSETS_URI', THEME_DIR_URI . '/framework/admin/assets');
    }
    function widgets()
    {
        require_once locate_template("widgets/widgets-contact-form.php");
        require_once locate_template("widgets/widgets-contact-info.php");
        require_once locate_template("widgets/widgets-gmap.php");
        require_once locate_template("widgets/widgets-popular-posts.php");
        require_once locate_template("widgets/widgets-related-posts.php");
        require_once locate_template("widgets/widgets-recent-posts.php");
        require_once locate_template("widgets/widgets-social-networks.php");
        require_once locate_template("widgets/widgets-subnav.php");
        require_once locate_template("widgets/widgets-testimonials.php");
        require_once locate_template("widgets/widgets-twitter-feeds.php");
        require_once locate_template("widgets/widgets-video.php");
        require_once locate_template("widgets/widgets-flickr-feeds.php");
        require_once locate_template("widgets/widgets-instagram-feeds.php");
        require_once locate_template("widgets/widgets-news-slider.php");
        require_once locate_template("widgets/widgets-recent-portfolio.php");
        require_once locate_template("widgets/widgets-slideshow.php");
        register_widget("Artbees_Widget_Popular_Posts");
        register_widget("Artbees_Widget_Recent_Posts");
        register_widget("Artbees_Widget_Related_Posts");
        register_widget("Artbees_Widget_Twitter");
        register_widget("Artbees_Widget_Contact_Form");
        register_widget("Artbees_Widget_Contact_Info");
        register_widget("Artbees_Widget_Social");
        register_widget("Artbees_Widget_Sub_Navigation");
        register_widget("Artbees_Widget_Google_Map");
        register_widget("Artbees_Widget_Testimonials");
        register_widget("Artbees_Widget_video");
        register_widget("Artbees_Widget_Flickr_feeds");
        register_widget("Artbees_Widget_Instagram_Feeds");
        register_widget("Artbees_Widget_News_Feed");
        register_widget("Artbees_Widget_Recent_Portfolio");
        register_widget("Artbees_Widget_Slideshow");
    }
    function plugins()
    {
        require_once locate_template("wpml-fix/mk-wpml.php");
    }
    function supports()
    {
        add_theme_support('menus');
        add_theme_support('automatic-feed-links');
        add_theme_support('editor-style');
        register_nav_menus(array(
            'primary-menu' => 'Primary Navigation',
            'second-menu' => 'Second Navigation',
            'third-menu' => 'Third Navigation',
            'fourth-menu' => 'Fourth Navigation',
            'footer-menu' => 'Footer Navigation',
            'toolbar-menu' => 'Header Toolbar Navigation',
            'side-dashboard-menu' => 'Side Dashboard Navigation',
            'fullscreen-menu' => 'Full Screen Navigation'
        ));
        add_theme_support( 'post-thumbnails' );
        add_image_size( 'jupiter-full-width', 1140, 580, true );
    }
    function post_types()
    {
        include_once(THEME_ADMIN_POST_TYPES . '/portfolio.php');
        include_once(THEME_ADMIN_POST_TYPES . '/news.php');
        include_once(THEME_ADMIN_POST_TYPES . '/faq.php');
        include_once(THEME_ADMIN_POST_TYPES . '/employee.php');
        include_once(THEME_ADMIN_POST_TYPES . '/pricing.php');
        include_once(THEME_ADMIN_POST_TYPES . '/clients.php');
        include_once(THEME_ADMIN_POST_TYPES . '/testimonials.php');
        include_once(THEME_ADMIN_POST_TYPES . '/slideshow.php');
        include_once(THEME_ADMIN_POST_TYPES . '/edge_slider.php');
        include_once(THEME_ADMIN_POST_TYPES . '/icarousel.php');
        include_once(THEME_ADMIN_POST_TYPES . '/banner_builder.php');
        include_once(THEME_ADMIN_POST_TYPES . '/animated_columns.php');
        include_once(THEME_ADMIN_POST_TYPES . '/tab_slider.php');
    }
    function functions()
    {
        include_once(ABSPATH . 'wp-admin/includes/plugin.php');
        require_once(THEME_FUNCTIONS . "/general-functions.php");
        if(!is_admin()) {
            require_once(THEME_FUNCTIONS . "/bfi_cropping.php");
        }
        require_once(THEME_FUNCTIONS . "/vc-integration.php");
        require_once(THEME_FUNCTIONS . "/ajax-search.php");
        require_once(THEME_CLASSES . "/wp-nav-custom-walker.php");
        require_once(THEME_FUNCTIONS . "/enqueue-front-scripts.php");
        require_once(THEME_CLASSES . "/love-this.php");
        require_once(THEME_GENERATORS . '/sidebar-generator.php');
        require_once(THEME_FRAMEWORK . "/tgm-plugin-activation/request-plugins.php");
        include_once(THEME_ADMIN_POST_TYPES . '/news.php');
        include_once(THEME_ADMIN_POST_TYPES . '/faq.php');
        include_once(THEME_ADMIN_POST_TYPES . '/portfolio.php');

        require_once locate_template('framework/actions/header.php');
        require_once locate_template('framework/actions/general.php');
        require_once locate_template('framework/actions/post.php');
        require_once locate_template('framework/actions/slideshow.php');

        require_once(THEME_FUNCTIONS . "/dynamic-styles.php");
        require_once(THEME_FUNCTIONS . "/mk-woocommerce.php");


        if (is_admin()) {
            include_once(THEME_ADMIN . '/general/general-functions.php');
            include_once(THEME_ADMIN . '/general/mega-menu.php');
            include_once(THEME_ADMIN . '/general/icon-library.php');
            include_once(THEME_ADMIN . '/generators/option-generator.php');
            include_once(THEME_ADMIN . '/general/backend-enqueue-scripts.php');
            include_once(THEME_ADMIN . '/admin-panel/masterkey-ajax-calls.php');


        }

    }
    function language()
    {
        $locale = get_locale();
        load_theme_textdomain('mk_framework', get_stylesheet_directory() . '/languages');
        $locale_file = get_stylesheet_directory() . "/languages/$locale.php";
        if (is_readable($locale_file)) {
            require_once($locale_file);
        }
    }

    function admin_menus()
    {
        add_menu_page(__('CONFIGURAÇÕES', 'mk_framework'), __('CONFIGURAÇÕES', 'mk_framework'), 'edit_theme_options', 'masterkey', array(
            &$this,
            '_load_option_page'
        ), 'dashicons-admin-network');

        add_submenu_page( 'themes.php', 'Instalar temas', 'Instalar temas', 'manage_options', 'demo-importer', array( &$this,'_load_demo_content_page') );
    }



    function add_metaboxes()
    {
        include_once(THEME_GENERATORS . '/metabox-generator.php');
        include_once(THEME_METABOXES . '/metabox-posts.php');
        include_once(THEME_METABOXES . '/metabox-employee.php');
        include_once(THEME_METABOXES . '/metabox-slideshow.php');
        include_once(THEME_METABOXES . '/metabox-clients.php');
        include_once(THEME_METABOXES . '/metabox-testimonials.php');
        include_once(THEME_METABOXES . '/metabox-icarousel.php');
        include_once(THEME_METABOXES . '/metabox-pricing.php');
        include_once(THEME_METABOXES . '/metabox-banner-video.php');
        include_once(THEME_METABOXES . '/metabox-news.php');
        include_once(THEME_METABOXES . '/metabox-edge.php');
        include_once(THEME_METABOXES . '/metabox-portfolios.php');
        include_once(THEME_METABOXES . '/metabox-posts-slideshow.php');
        include_once(THEME_METABOXES . '/metabox-skinning.php');
        include_once(THEME_METABOXES . '/metabox-animated-columns.php');
        include_once(THEME_METABOXES . '/metabox-tab-slider.php');
        include_once(THEME_METABOXES . '/metabox-pages.php');
        include_once(THEME_METABOXES . '/metabox-footer-widgets.php');
    }

    function theme_activated()
    {
        if ('themes.php' == basename($_SERVER['PHP_SELF']) && isset($_GET['activated']) && $_GET['activated'] == 'true') {
            update_option('woocommerce_enable_lightbox', "no");
            wp_redirect(admin_url('admin.php?page=masterkey'));
        }
    }

    function _load_demo_content_page()
    {
        include_once(THEME_DIR . '/demo-importer/engine/index.php');


    }

    function _load_option_page()
    {

        $page = include(THEME_ADMIN . '/admin-panel/masterkey.php');
        new mkOptionGenerator($page['name'], $page['options']);
    }

}





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

	/* ———————————————————
	 reescrever o link, fica directamente para a raiz do nosso site
	*/
	function page_login_url_home(){ return get_bloginfo('url'); }

	add_filter('login_headerurl', 'page_login_url_home');

	/* ———————————————————
	 reescrever o titulo do link, fica com o nome do nosso site
	*/
	function page_login_logo_title() {
			return esc_attr(get_bloginfo('name'));
	}
	add_filter('login_headertitle', 'page_login_logo_title');




	/* Mostrar menu do contato no painel administrativo somente para o administrador */
	if (!(current_user_can('administrator'))) {
		function remove_wpcf7() {
			remove_menu_page( 'wpcf7' );
		}

		add_action('admin_menu', 'remove_wpcf7');
	}



	/* --------------------------------- REMOVER AJUDA DO PAINEL -------------------------------------- */

	function hide_help() {
		echo '<style type="text/css">
				#contextual-help-link-wrap { display: none !important; }
			  </style>';
	}
	add_action('admin_head', 'hide_help');




	/* --------------------------------- REMOVER MENUS DO PAINEL -------------------------------------- */

	function remove_menus () {

	global $menu;
	$restricted = array();
	end ($menu);

	while (prev($menu)){
	$value = explode(' ',$menu[key($menu)][0]);

	if(in_array($value[0] != NULL?$value[0]:"" , $restricted)){unset($menu[key($menu)]);}
	}
	}
	add_action('admin_menu', 'remove_menus');




	function wps_admin_bar() {
		global $wp_admin_bar;
		$wp_admin_bar->remove_menu('wp-logo');
		$wp_admin_bar->remove_menu('about');
		$wp_admin_bar->remove_menu('wporg');
		$wp_admin_bar->remove_menu('documentation');
		$wp_admin_bar->remove_menu('support-forums');
		$wp_admin_bar->remove_menu('feedback');

	}
	add_action( 'wp_before_admin_bar_render', 'wps_admin_bar' );




	/* --------------------------------- ALTERAR RODAPÉ DO PAINEL -------------------------------------- */

	function remove_footer_admin () {
	  echo 'www.greendigital.com.br';
	}
	add_filter('admin_footer_text', 'remove_footer_admin');


	function change_footer_version() {
	  return '(41) 3007-6400';
	}
	add_filter( 'update_footer', 'change_footer_version', 9999 );



	// Arruma bug no menu admin do Chrome
	add_action('admin_enqueue_scripts', 'chrome_fix');
	function chrome_fix() {
	   if ( strpos( $_SERVER['HTTP_USER_AGENT'], 'Chrome' ) !== false )
	   wp_add_inline_style( 'wp-admin', '#adminmenu { transform: translateZ(0); }' );
	}

// disable for posts
add_filter(‘use_block_editor_for_post’, ‘__return_false’, 10);

// disable for post types
add_filter(‘use_block_editor_for_post_type’, ‘__return_false’, 10);

add_filter(‘use_block_editor_for_post’, ‘__return_false’);

?>