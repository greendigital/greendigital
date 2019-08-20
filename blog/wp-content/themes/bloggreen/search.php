<?php get_header(); ?>
 
  <div class="container">
  <div class="col-md-8 col-md-offset-2">
  
 
<?php if ( have_posts() ) : ?>
 
    <h1 class="page-title"><?php _e( 'Resultados: ', 'seu-template' ); ?><span><?php the_search_query(); ?></span></h1>
 

 
<?php while ( have_posts() ) : the_post() ?>
 
    <div id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
    <div  class = "col-md-4">
      <img src="<?php the_field('imagem-do-post');?>" class = "img-responsive">
    </div>
    <div class="col-md-8">
      
    
    
     <h2 class="entry-title"><a href="<?php the_permalink(); ?>" title="<?php printf( __('Permalink to %s', 'your-theme'), the_title_attribute('echo=0') ); ?>" rel="bookmark"><?php the_title(); ?></a></h2>
 
<?php if ( $post->post_type == 'post' ) { ?>
     <div class="entry-meta">
      <span class="meta-prep meta-prep-author"><?php _e('Por: ', 'seu-template'); ?></span>
      <span class="author vcard"><a class="url fn n" href="<?php echo get_author_link( false, $authordata->ID, $authordata->user_nicename ); ?>" title="<?php printf( __( 'View all posts Por: %s', 'seu-template' ), $authordata->display_name ); ?>"><?php the_author(); ?></a></span>
      <span class="meta-sep"> | </span>
      <span class="meta-prep meta-prep-entry-date"><?php _e('Data:  ', 'seu-template'); ?></span>
      <span class="entry-date"><abbr class="Data: " title="<?php the_time('Y-m-d\TH:i:sO') ?>"><?php the_time( get_option( 'date_format' ) ); ?></abbr></span>
      <?php edit_post_link( __( 'Edit', 'seu-template' ), "<span class=\"meta-sep\">|</span>\n\t\t\t\t\t\t<span class=\"edit-link\">", "</span>\n\t\t\t\t\t" ) ?>
     </div><!– .entry-meta –>
<?php } ?>
 
     <div class="entry-summary">
<?php the_excerpt( __( 'Continue reading <span class="meta-nav">»</span>', 'seu-template' )  ); ?>
<?php wp_link_pages('before=<div class="page-link">' . __( 'Pages:', 'seu-template' ) . '&after=</div>') ?>
     </div><!– .entry-summary –>
 
<?php if ( $post->post_type == 'post' ) { ?>
     <div class="entry-utility">
      <span class="cat-links"><span class="entry-utility-prep entry-utility-prep-cat-links"><?php _e( 'Categoria: ', 'seu-template' ); ?></span><?php echo get_the_category_list(', '); ?></span>
      <span class="meta-sep">  </span>
      <?php the_tags( '<span class="tag-links"><span class="entry-utility-prep entry-utility-prep-tag-links">' . __('Tagged ', 'seu-template' ) . '</span>', ", ", "</span>\n\t\t\t\t\t\t<span class=\"meta-sep\">|</span>\n" ) ?>
      
      <?php edit_post_link( __( 'Edit', 'seu-template' ), "<span class=\"meta-sep\">|</span>\n\t\t\t\t\t\t<span class=\"edit-link\">", "</span>\n\t\t\t\t\t\n" ) ?>
     </div><!– #entry-utility –>
<?php } ?>
    </div><!– #post-<?php the_ID(); ?> –>
 
<?php endwhile; ?>
 
<?php global $wp_query; $total_pages = $wp_query->max_num_pages; if ( $total_pages > 1 ) { ?>
    <div id="nav-below" class="navigation">
     <div class="nav-previous"><?php next_posts_link(__( '<span class="meta-nav">«</span> Posts Antigos', 'seu-template' )) ?></div>
     <div class="nav-next"><?php previous_posts_link(__( 'Posts Recentes <span class="meta-nav">»</span>', 'seu-template' )) ?></div>
    </div><!– #nav-below –>
<?php } ?>  
 
<?php else : ?>
 
    <div id="post-0" class="post no-results not-found">
     <h2 class="entry-title"><?php _e( 'Nada encontrado :(', 'seu-template' ) ?></h2>
     <div class="entry-content">
      <p><?php _e( 'Desculpe, não conseguimos encontrar nada em nosso blog com essas palavras.', 'your-theme' ); ?></p>
     </div><!– .entry-content –>
    </div>
 
<?php endif; ?>
</div >
<div style="margin-bottom: 50px;"></div>
<div style="margin-bottom: 50px;"></div>
</div>
</div>
 
<?php get_footer(); ?>